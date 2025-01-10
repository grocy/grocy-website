<!DOCTYPE html>
<html lang="@yield('lang')">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">

	@if(isset($noindex))
	<meta name="robots"
		content="noindex,nofollow,noodp,noydir">
	@else
	<meta name="robots"
		content="noodp,noydir">
	@endif
	<meta name="format-detection"
		content="telephone=no">

	<meta name="author"
		content="Bernd Bestel (bernd@berrnd.de)">
	<link rel="icon"
		type="image/x-icon"
		href="/favicon.ico?v={{ $version }}">

	<title>@yield('title')</title>

	@yield('headerAdditional')

	<link href="/packages/bootstrap/dist/css/bootstrap.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fontsource/inter/latin.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fontsource/pt-sans/latin.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fortawesome/fontawesome-free/css/fontawesome.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fortawesome/fontawesome-free/css/solid.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fortawesome/fontawesome-free/css/brands.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/simplelightbox/dist/simple-lightbox.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/flag-icons/css/flag-icons.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/site.css?v={{ $version }}"
		rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light mb-2">
		<div class="container">
			<a class="navbar-brand py-2"
				href="/"><img src="/img/grocy_logo.svg?v={{ $version }}"
					alt="Grocy logo"
					title="Grocy logo"
					height="30"></a>

			@yield('navAdditional')
		</div>
	</nav>

	<main class="text-center">

		@yield('content')

	</main>

	<footer class="container text-center py-3">
		<div class="row">
			<div class="col">

				<div class="legal-navigation">
					<ul>
						<li>
							<a class="discrete-link"
								href="/impressum">Impressum</a>
						</li>
						<li>
							<a class="discrete-link"
								href="/datenschutz">Datenschutz</a>
						</li>
					</ul>
				</div>

				<div class="pt-3">
					Grocy is a hobby project by <a href="https://berrnd.de"
						target="_blank">Bernd Bestel</a>
					<br>
					Created with passion since 2017 and hosted on <a href="https://berrnd.net"
						target="_blank">Bernds IT Infrastructure</a>
					<br>
					Life runs on Code
				</div>

			</div>
		</div>
	</footer>

	<script src="/packages/jquery/dist/jquery.min.js?v={{ $version }}"></script>
	<script src="/packages/bootstrap/dist/js/bootstrap.min.js?v={{ $version }}"></script>
	<script src="/packages/simplelightbox/dist/simple-lightbox.jquery.min.js?v={{ $version }}"></script>
	<script src="/site.js?v={{ $version }}"></script>
	<script>
		var _paq = window._paq = window._paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		_paq.push(['enableHeartBeatTimer', 10]);
		(function()
		{
			var u = "//m4o.berrnd.org/";
			_paq.push(['setTrackerUrl', u + 'js/']);
			_paq.push(['setAPIUrl', u]);
			_paq.push(['setSiteId', '17']);
			var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
			g.async = true; g.src = u + 'js/'; s.parentNode.insertBefore(g, s);
		})();
	</script>
	<noscript>
		<p><img src="//m4o.berrnd.org/t.php?idsite=17&amp;rec=1"
				style="border:0;"
				alt="" /></p>
	</noscript>
</body>

</html>
