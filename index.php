<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface as Container;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

use Bhaktaraz\RSSGenerator\Feed;
use Bhaktaraz\RSSGenerator\Channel;
use Bhaktaraz\RSSGenerator\Item;

// Load composer dependencies
require_once __DIR__ . '/vendor/autoload.php';

// Setup base application
AppFactory::setContainer(new DI\Container());
$app = AppFactory::create();

$container = $app->getContainer();
$container->set('view', function (Container $container) {
	return new Slim\Views\Blade(__DIR__ . '/views', __DIR__ . '/data/viewcache');
});

// Routes
$app->group('', function (RouteCollectorProxy $group) {
	$view = $this->get('view');

	$group->get('/', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'en', [
			'grocyVersionInfo' => json_decode(file_get_contents(__DIR__ . '/data/grocyreleasesymlinks/version.json', true))
		]);
	});

	$group->get('/de', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'de', [
			'grocyVersionInfo' => json_decode(file_get_contents(__DIR__ . '/data/grocyreleasesymlinks/version.json', true))
		]);
	});

	$group->get('/changelog', function (Request $request, Response $response, array $args) use ($view) {
		$changelogItems = GetChangelogItems();

		$changelog = [
			'changelog_items' => $changelogItems,
			'newest_release_number' => $changelogItems[0]['release_number']
		];

		return $view->render($response, 'changelog', [
			'changelog' => $changelog,
			'commonMarkConverter' => GetCommonMarkConverter()
		]);
	});

	$group->get('/addons', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'addons');
	});

	$group->get('/links', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'links');
	});

	$group->get('/impressum', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'impressum', [
			'noindex' => true
		]);
	});

	$group->get('/datenschutz', function (Request $request, Response $response, array $args) use ($view) {
		return $view->render($response, 'datenschutz', [
			'noindex' => true
		]);
	});
})->add(new StaticFileCacheMiddleware(__DIR__ . '/data/static/'));

$app->get('/changelog/feed', function (Request $request, Response $response, array $args) {
	$changelogItems = GetChangelogItems();
	$commonMarkConverter = GetCommonMarkConverter();

	$feed = new Feed();

	$channel = new Channel();
	$channel
		->title('grocy Changelog & release history')
		->description('grocy - ERP beyond your fridge')
		->url('https://grocy.info')
		->appendTo($feed);

	foreach ($changelogItems as $changelogItem)
	{
		if ($changelogItem['version'] == 'UNRELEASED')
		{
			continue;
		}

		$item = new Item();
		$item
			->title('Version ' . $changelogItem['version'])
			->description($commonMarkConverter->convertToHtml($changelogItem['body']))
			->url('https://grocy.info/changelog#' . $changelogItem['version'])
			->pubDate(strtotime($changelogItem['release_date']))
			->appendTo($channel);
	}

	$response->getBody()->write(strval($feed));
	return $response->withHeader('Content-Type', 'application/rss+xml');
});

// Add default middleware
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, false, false);

$app->run();


function GetChangelogItems()
{
	$changelogItems = [];
	foreach (glob(__DIR__ . '/data/grocyreleasesymlinks/changelog/*.md') as $file)
	{
		$fileName = basename($file);
		$fileNameParts = explode('_', $fileName);

		if ($fileName == '__TEMPLATE.md')
		{
			continue;
		}

		$fileContent = file_get_contents($file);
		$version = $fileNameParts[1];
		$releaseDate = explode('.', $fileNameParts[2])[0];
		$releaseNumber = intval($fileNameParts[0]);

		$changelogItems[] = [
			'version' => $version,
			'release_date' => $releaseDate,
			'body' => $fileContent,
			'release_number' => $releaseNumber
		];
	}

	// Sort changelog items to have the changelog descending by newest version
	usort($changelogItems, function ($a, $b) {
		if ($a['release_number'] == $b['release_number'])
		{
			return 0;
		}

		return ($a['release_number'] < $b['release_number']) ? 1 : -1;
	});

	return $changelogItems;
}

function GetCommonMarkConverter()
{
	$commonMarkEnvironment = League\CommonMark\Environment::createCommonMarkEnvironment();
	$commonMarkEnvironment->addExtension(new League\CommonMark\Extension\Autolink\AutolinkExtension());
	$commonMarkEnvironment->addExtension(new League\CommonMark\Extension\ExternalLink\ExternalLinkExtension());
	$commonMarkEnvironment->addExtension(new League\CommonMark\Extension\Mention\MentionExtension());
	$commonMarkEnvironment->mergeConfig([
		'external_link' => [
			'open_in_new_window' => true
		],
		'mentions' => [
			'github_handle' => [
				'prefix'    => '@',
				'pattern'   => '[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}(?!\w)',
				'generator' => 'https://github.com/%s',
			],
			'github_issue' => [
				'prefix'    => '#',
				'pattern'   => '\d+',
				'generator' => 'https://github.com/grocy/grocy/issues/%d',
			],
		]
	]);
	$commonMarkConverter = new League\CommonMark\MarkdownConverter($commonMarkEnvironment);

	return $commonMarkConverter;
}
