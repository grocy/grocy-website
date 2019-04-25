<?php

class StaticFileCacheMiddleware
{
	public function __construct(string $cachePath)
	{
		$this->CachePath = $cachePath;
	}

	protected $CachePath;

	public function __invoke(\Slim\Http\Request $request, \Slim\Http\Response $response, callable $next)
	{
		$response = $next($request, $response);
		$response->write('<!-- Static page generated at ' . date('Y-m-d H:i:s', time()) . ' -->');

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
