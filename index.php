<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Load composer dependencies
require_once __DIR__ . '/vendor/autoload.php';

// Setup base application
$appContainer = new \Slim\Container([
	'settings' => [
		'displayErrorDetails' => true,
		'determineRouteBeforeAppMiddleware' => true
	],
	'view' => function($container)
	{
		return new \Slim\Views\Blade(__DIR__ . '/views', __DIR__ . '/data/viewcache');
	}
]);
$app = new \Slim\App($appContainer);

// Routes
$app->group('', function()
{
	$this->get('/', function(Request $request, Response $response, array $args)
	{
		return $this->view->render($response, 'en', [
			'grocyVersionInfo' => json_decode(file_get_contents(__DIR__ . '/data/grocyreleasesymlinks/version.json', true))
		]);
	});

	$this->get('/de', function(Request $request, Response $response, array $args)
	{
		return $this->view->render($response, 'de', [
			'grocyVersionInfo' => json_decode(file_get_contents(__DIR__ . '/data/grocyreleasesymlinks/version.json', true))
		]);
	});

	$this->get('/changelog', function(Request $request, Response $response, array $args)
	{
		$changelogItems = array();
		foreach(glob(__DIR__ . '/data/grocyreleasesymlinks/changelog/*.md') as $file)
		{
			$fileName = basename($file);
			$fileNameParts = explode('_', $fileName);

			$fileContent = file_get_contents($file);
			$version = $fileNameParts[1];
			$releaseDate = explode('.', $fileNameParts[2])[0];
			$releaseNumber = intval($fileNameParts[0]);

			$changelogItems[] = array(
				'version' => $version,
				'release_date' => $releaseDate,
				'body' => $fileContent,
				'release_number' => $releaseNumber
			);
		}

		// Sort changelog items to have the changelog descending by newest version
		usort($changelogItems, function($a, $b)
		{
			if ($a['release_number'] == $b['release_number'])
			{
				return 0;
			}

			return ($a['release_number'] < $b['release_number']) ? 1 : -1;
		});

		$changelog = array(
			'changelog_items' => $changelogItems,
			'newest_release_number' => $changelogItems[0]['release_number']
		);

		$Parsedown = new ParsedownExtraPlugin();
		$Parsedown->linkAttributes = function($Text, $Attributes, &$Element, $Internal)
		{
			if (!$Internal)
			{
				return [
					'target' => '_blank'
				];
			}

			return [];
		};

		return $this->view->render($response, 'changelog', [
			'changelog' => $changelog,
			'Parsedown' => $Parsedown
		]);
	});

	$this->get('/links', function(Request $request, Response $response, array $args)
	{
		return $this->view->render($response, 'links');
	});

	$this->get('/impressum', function(Request $request, Response $response, array $args)
	{
		return $this->view->render($response, 'impressum', [
			'noindex' => true
		]);
	});

	$this->get('/datenschutz', function(Request $request, Response $response, array $args)
	{
		return $this->view->render($response, 'datenschutz', [
			'noindex' => true
		]);
	});
})->add(new StaticFileCacheMiddleware(__DIR__ . '/data/static/'));

$app->run();
