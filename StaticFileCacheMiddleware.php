<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

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
		$response->getBody()->write('<!-- Static page generated at ' . date('Y-m-d H:i:s', time()) . ' -->');

		$folder = $request->getUri()->getPath();
		if (empty($folder) || $folder == '/')
		{
			$folder = '';
		}
		$folder = $this->CachePath . $folder;
		@mkdir($folder, 0777, true);

		$staticFilePath = $folder . '/index.html';
		file_put_contents($staticFilePath, $response->getBody());

		return $response;
	}
}
