@extends('layout')

@section('title', 'Links | grocy')
@section('lang', 'en')

@section('headerAdditional')
<link rel="canonical" href="https://grocy.info/links">
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row align-items-center">

		<div class="col">
			<h1 class="bold d-inline-block sketch-underline">Links</h1>
			<h5 class="text-muted pt-3">A list of community contributed help- and troubleshooting guides and other articles about grocy</h5>
		</div>

	</div>
</header>

<div class="container pb-3">
	<div class="row align-items-center">

		<div class="col-xs-12 col-lg-10 offset-lg-1">

			<p>
				<h5>How to install inside LXC container (Alpine Linux)</h5>
				<a class="small" href="https://github.com/grocy/grocy/issues/523" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy/issues/523</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>How to install on Ubuntu 16.04 using Apache</h5>
				<a class="small" href="https://github.com/grocy/grocy/issues/357" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy/issues/357</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Install grocy in cPanel</h5>
				<a class="small" href="https://github.com/grocy/grocy/issues/354" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy/issues/354</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Install grocy with nginx, PHP, SQLite on minimal system</h5>
				<a class="small" href="https://github.com/grocy/grocy/issues/201#issuecomment-487074462" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy/issues/201#issuecomment-487074462</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Example nginx/PHP-FPM config from the official demo instance (incl. reverse proxy)</h5>
				<a class="small" href="https://github.com/grocy/grocy-docker/issues/15#issuecomment-486579894" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy-docker/issues/15#issuecomment-486579894</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Error message "Undefined function mime_content_type()"</h5>
				<a class="small" href="https://github.com/grocy/grocy/issues/381" target="_blank"><i class="fas fa-external-link-alt"></i> https://github.com/grocy/grocy/issues/381</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Automating your shopping list with Home Assistant and grocy</h5>
				<a class="small" href="https://philhawthorne.com/automating-your-shopping-list-with-home-assistant-and-grocy" target="_blank"><i class="fas fa-external-link-alt"></i> https://philhawthorne.com/automating-your-shopping-list-with-home-assistant-and-grocy</a>
			</p>
		</div>

	</div>	
</div>
@stop
