@extends('layout')

@section('title', 'Changelog & Release History | Grocy')
@section('lang', 'en')

@section('headerAdditional')
<link href="/packages/@fontsource/pt-mono/latin.css?v={{ $version }}"
	rel="stylesheet">

<meta name="description"
	content="Grocy Changelog & Release History">

<link rel="canonical"
	href="https://grocy.info/changelog">

<link rel="alternate"
	type="application/rss+xml"
	title="Grocy Changelog & Release History feed"
	href="https://grocy.info/changelog/feed">

<meta property="og:type"
	content="website">
<meta property="og:title"
	content="@yield('title')">
<meta property="og:description"
	content="Grocy Changelog & Release History">
<meta property="og:site_name"
	content="Grocy">
<meta property="og:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

<meta name="twitter:card"
	content="summary">
<meta name="twitter:title"
	content="@yield('title')">
<meta name="twitter:description"
	content="Grocy Changelog & Release History">
<meta name="twitter:site"
	content="@grocy_erp">
<meta name="twitter:creator"
	content="@BerndBestel">
<meta name="twitter:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

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
			"@id": "https://grocy.info/changelog",
			"url": "https://grocy.info/changelog",
			"name": "@yield('title')",
			"description": "Grocy Changelog & Release History",
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
						"item": "https://grocy.info/changelog",
						"name": "Changelog"
					}
				]
			},
			"potentialAction": {
				"@type": "ReadAction",
				"target": "https://grocy.info/changelog"
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
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row align-items-center">

		<div class="col-xs-12 col-lg-8 offset-lg-2">
			<h1 class="headline">Changelog & Release History</h1>
			<h5 class="d-block"><i class="fa-solid fa-rss"></i> <a href="/changelog/feed">Feed</h5></a>
		</div>

	</div>
</header>

<div class="container pb-3">

	@foreach($changelog['changelog_items'] as $changelogItem)
	@if($changelogItem['version'] == "UNRELEASED")
	<section id="preview"
		class="row align-items-center d-flex my-3">
		<div class="col">
			<div class="card border-danger">
				<div class="card-header bg-warning border-danger">
					<a class="discrete-link dropdown-toggle collapsed"
						data-toggle="collapse-next"
						href="#">Preview version <span class="small">(<span class="font-italic">not yet released</span>)</span></a>
				</div>
				<div class="collapse">
					<div class="card-body text-left fs-2 pb-0 px-3 border-danger">
						{!! $commonMarkConverter->convert($changelogItem['body']) !!}
					</div>
					<div class="card-body pt-0">
						<a href="https://demo-prerelease.grocy.info"
							target="_blank"
							class="btn btn-warning border-danger">Pre-release demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@else
	<section id="v{{ $changelogItem['version'] }}"
		class="row align-items-center d-flex my-3">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<a class="discrete-link dropdown-toggle @if(!($changelogItem['release_number'] >= $changelog['newest_release_number'] - 4)) collapsed @endif"
						data-toggle="collapse-next"
						href="#">Version <span class="font-weight-bold">{{ $changelogItem['version'] }}</span> released on <span class="font-weight-bold">{{ $changelogItem['release_date'] }}</span></a>
				</div>
				<div class="collapse @if($changelogItem['release_number'] >= $changelog['newest_release_number'] - 4) show @endif">
					<div class="card-body text-left fs-2 pb-0 px-3">
						{!! $commonMarkConverter->convert($changelogItem['body']) !!}
					</div>
					<div class="card-body pt-0">
						<a href="https://releases.grocy.info/v?{{ $changelogItem['version'] }}"
							target="_blank"
							class="btn btn-primary">Download</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	@endforeach

</div>

<script>
	document.addEventListener("DOMContentLoaded", function(event)
	{
		if (location.hash.startsWith("#v") || location.hash == "#preview")
		{
			$(location.hash.replaceAll(".", "\\.")).find(".dropdown-toggle.collapsed").click();
		}
	});
</script>
@stop
