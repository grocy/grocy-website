@extends('layout')

@section('title', 'Changelog & release history | grocy')
@section('lang', 'en')

@section('headerAdditional')
<link href="/node_modules/@fontsource/fira-mono/latin.css"
	rel="stylesheet">
<link rel="canonical"
	href="https://grocy.info/changelog">
<link rel="alternate"
	type="application/rss+xml"
	title="grocy Changelog & release history feed"
	href="https://grocy.info/changelog/feed">
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row align-items-center">

		<div class="col-xs-12 col-lg-8 offset-lg-2">
			<h1 class="bold d-inline-block sketch-underline">Changelog & release history</h1>
			<h5 class="bold d-block"><a href="https://grocy.info/changelog/feed"><i class="fas fa-rss"></i> Feed</h5></a>
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
					<div class="card-body text-left major-info pb-0 px-3 border-danger">
						{!! $commonMarkConverter->convertToHtml($changelogItem['body']) !!}
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
					<div class="card-body text-left major-info pb-0 px-3">
						{!! $commonMarkConverter->convertToHtml($changelogItem['body']) !!}
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
		if (location.hash == "#preview")
		{
			$("#preview").find(".dropdown-toggle").click();
		}
	});
</script>
@stop
