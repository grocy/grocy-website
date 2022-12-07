<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Psr\Http\Message\ResponseInterface as Response;
use WyriHaximus\HtmlCompress\Factory;

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

		$folder = $request->getUri()->getPath();
		if (empty($folder) || $folder == '/')
		{
			$folder = '';
		}
		$folder = $this->CachePath . $folder;
		@mkdir($folder, 0777, true);

		$staticFilePath = $folder . '/index.html';
		$htmlCompressor = Factory::constructSmallest();
		file_put_contents($staticFilePath, $htmlCompressor->compress($response->getBody()));

		return $response;
	}
}
