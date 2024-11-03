<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Psr\Http\Message\ResponseInterface as Response;
use WyriHaximus\HtmlCompress\Factory;
use voku\helper\HtmlMin;

class StaticFileCacheMiddleware
{
	public function __construct(string $cachePath)
	{
		$this->CachePath = $cachePath;
	}

	protected $CachePath;

	public function __invoke(Request $request, RequestHandler $handler): Response
	{
		$response = $handler->handle($request);

		$path = $request->getUri()->getPath();
		$folder = $path;
		if (empty($folder) || $folder == '/')
		{
			$folder = '';
		}
		$folder = $this->CachePath . $folder;
		@mkdir($folder, 0777, true);

		$staticFilePath = $folder . '/index.html';

		$htmlMin = new HtmlMin();
		$htmlMin->doOptimizeViaHtmlDomParser(true);
		$htmlMin->doRemoveWhitespaceAroundTags(true);
		$htmlMin->doRemoveOmittedHtmlTags(false);
		$htmlCompressor = Factory::constructSmallest()->withHtmlMin($htmlMin);

		// Don't compress the changelog feed (RSS/XML)
		$data = $response->getBody();
		if ($path != '/changelog/feed')
		{
			$data = $htmlCompressor->compress($data);
		}
		file_put_contents($staticFilePath, $data);

		return $response;
	}
}
