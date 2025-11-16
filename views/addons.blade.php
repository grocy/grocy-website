@extends('layout')

@section('title', 'Add-ons | Grocy')
@section('lang', 'en')

@section('headerAdditional')
<meta name="description"
	content="A list of community contributed Add-ons, integrations and other tools for Grocy.">

<link rel="canonical"
	href="https://grocy.info/addons">

<meta property="og:type"
	content="website">
<meta property="og:title"
	content="@yield('title')">
<meta property="og:description"
	content="A list of community contributed Add-ons, integrations and other tools for Grocy.">
<meta property="og:site_name"
	content="Grocy">
<meta property="og:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

<meta name="twitter:card"
	content="summary">
<meta name="twitter:title"
	content="@yield('title')">
<meta name="twitter:description"
	content="A list of community contributed Add-ons, integrations and other tools for Grocy.">
<meta name="twitter:site"
	content="@grocy_erp">
<meta name="twitter:creator"
	content="@BerndBestel">
<meta name="twitter:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

@verbatim
<script type="application/ld+json">
	{
	"@context": "https://schema.org",
	"@graph": [{
			"@type": "WebSite",
			"@id": "https://grocy.info/#/schema/WebSite",
			"url": "https://grocy.info/",
			"name": "Grocy - ERP beyond your fridge",
			"publisher": {
				"@type": "Person",
				"@id": "https://berrnd.de/#/schema/Organization",
				"url": "https://berrnd.de/",
				"name": "Bernd Bestel"
			}
		}, {
			"@type": "WebPage",
			"@id": "https://grocy.info/addons",
			"url": "https://grocy.info/addons",
			"name": "@yield('title')",
			"description": "A list of community contributed Add-ons, integrations and other tools for Grocy.",
			"isPartOf": {
				"@id": "https://grocy.info/#/schema/WebSite"
			},
			"breadcrumb": {
				"@type": "BreadcrumbList",
				"@id": "https://grocy.info/#/schema/BreadcrumbList",
				"itemListElement": [{
						"@type": "ListItem",
						"position": 1,
						"item": "https://grocy.info/",
						"name": "Grocy"
					}, {
						"@type": "ListItem",
						"position": 2,
						"item": "https://grocy.info/addons",
						"name": "Add-ons"
					}
				]
			},
			"potentialAction": {
				"@type": "ReadAction",
				"target": "https://grocy.info/addons"
			},
			"author": {
				"@type": "Person",
				"@id": "https://berrnd.de/#/schema/Organization",
				"url": "https://berrnd.de/",
				"name": "Bernd Bestel"
			}
		}
	]
}
</script>
@endverbatim
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row">

		<div class="col">
			<h1 class="headline">Add-ons</h1>
			<h5 class="text-muted pt-3">A list of community contributed Add-ons, integrations and other tools for Grocy</h5>
		</div>

	</div>
</header>

<div class="container pb-3">
	<div class="row">

		<div class="col-xs-12 col-lg-10 offset-lg-1">

			<div>
				<h5>Grocy Desktop</h5>
				Run Grocy without having to manage a webserver, just like a normal (Windows) desktop application<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/grocy/grocy-desktop"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy Android</h5>
				Grocy on your smartphone - with barcode scanning and batch processing<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/patzly/grocy-android"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy Mobile</h5>
				Native interface for Grocy on Apple devices (iOS, macOS)<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/supergeorg/Grocy-SwiftUI"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Barcode Buddy</h5>
				A barcode scanning helper / lookup tool for Grocy<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/Forceu/barcodebuddy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Home Assistant Add-on</h5>
				Home Assistant add-on for Grocy<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/hassio-addons/addon-grocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>linuxserver/docker-grocy (LinuxServer.io)</h5>
				A container for Grocy - the ERP application for your kitchen<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/linuxserver/docker-grocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>custom-components/grocy</h5>
				Custom Grocy integration for Home Assistant<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/custom-components/grocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>k8s-grocy</h5>
				Run Grocy on a Kubernetes Cluster<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://git.sr.ht/~johnhamelink/k8s-grocy/"
					target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Source</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Recipe Buddy</h5>
				Recipe Buddy is a tool that enables the easy adding of recipes to Grocy through web scraping<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/georgegebbett/recipe-buddy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<di>
				<h5>Grocy iOS Shortcut (RoutineHub)</h5>
				Complete tasks on the fly<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://routinehub.co/shortcut/7061/"
					target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> RoutineHub</a>
			</di>

			<hr class="my-3 py-0">

			<div>
				<h5>pygrocy</h5>
				A Grocy Python API client<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/SebRut/pygrocy"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>pygrocy2</h5>
				Another Grocy Python API client<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/flipper/pygrocy2"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>grocy-pyscanner</h5>
				A python based barcode scanning helper<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/grocy/grocy-pyscanner"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy Pad</h5>
				A magnetic shopping list interface<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/tjhowse/grocy_pad"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy for YunoHost</h5>
				Grocy package for YunoHost<br>
				<a class="btn btn-secondary btn-sm mt-2"
					href="https://github.com/YunoHost-Apps/grocy_ynh"
					target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
			</div>

		</div>

	</div>
</div>
@stop
