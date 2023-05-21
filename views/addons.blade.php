@extends('layout')

@section('title', 'Add-ons | grocy')
@section('lang', 'en')

@section('headerAdditional')
<link rel="canonical"
	href="https://grocy.info/addons">
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row">

		<div class="col">
			<h1 class="bold d-inline-block sketch-underline">Add-ons</h1>
			<h5 class="text-muted pt-3">A list of community contributed Add-ons, integrations and other tools for grocy</h5>
		</div>

	</div>
</header>

<div class="container pb-3">
	<div class="row">

		<div class="col-xs-12 col-lg-10 offset-lg-1">

			<div>
				<h5>grocy-desktop</h5>
				Run grocy without having to manage a webserver, just like a normal (windows) desktop application<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/grocy/grocy-desktop"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy-docker</h5>
				ERP beyond your fridge - now containerized<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/grocy/grocy-docker"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>linuxserver/docker-grocy (LinuxServer.io)</h5>
				A container for grocy - the ERP application for your kitchen<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/linuxserver/docker-grocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>k8s-grocy</h5>
				Run grocy on a Kubernetes Cluster<br>
				<a class="btn btn-secondary btn-sm"
					href="https://git.sr.ht/~johnhamelink/k8s-grocy/"
					target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Source</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy-android</h5>
				grocy on your smartphone - with barcode scanning and batch processing<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/patzly/grocy-android"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy Mobile</h5>
				Native interface for grocy on Apple devices (iOS, macOS)<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/supergeorg/Grocy-SwiftUI"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Barcode Buddy</h5>
				A barcode scanning helper / lookup tool for grocy<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/Forceu/barcodebuddy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Recipe Buddy</h5>
				Recipe Buddy is a tool that enables the easy adding of recipes to grocy through web scraping<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/georgegebbett/recipe-buddy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Home Assistant Add-On</h5>
				Home Assistant add-on for grocy<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/hassio-addons/addon-grocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<di>
				<h5>grocy iOS Shortcut (RoutineHub)</h5>
				Complete tasks on the fly<br>
				<a class="btn btn-secondary btn-sm"
					href="https://routinehub.co/shortcut/7061/"
					target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> RoutineHub</a>
			</di>

			<hr class="my-3 py-0">

			<div>
				<h5>pygrocy</h5>
				A grocy Python API client<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/SebRut/pygrocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy-pyscanner</h5>
				A python based barcode scanning helper<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/grocy/grocy-pyscanner"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy Pad</h5>
				A magnetic shopping list interface<br>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/tjhowse/grocy_pad"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy for YunoHost</h5>
				<a class="btn btn-secondary btn-sm"
					href="https://github.com/YunoHost-Apps/grocy_ynh"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

		</div>

	</div>
</div>
@stop
