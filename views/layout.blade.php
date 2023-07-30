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
		href="/img/grocy_icon.svg?v={{ $version }}">

	<title>@yield('title')</title>

	@yield('headerAdditional')

	<meta property="og:type"
		content="website">
	<meta property="og:title"
		content="@yield('title')">
	<meta property="og:description"
		content="ERP beyond your fridge - Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.">
	<meta property="og:site_name"
		content="Grocy">
	<meta property="og:image"
		content="https://grocy.info/img/screenshot.png?v={{ $version }}">

	<meta name="twitter:card"
		content="summary_large_image">
	<meta name="twitter:title"
		content="@yield('title')">
	<meta name="twitter:description"
		content="ERP beyond your fridge - Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.">
	<meta name="twitter:site"
		content="@grocy_erp">
	<meta name="twitter:creator"
		content="@BerndBestel">
	<meta name="twitter:image"
		content="https://grocy.info/img/screenshot.png?v={{ $version }}">

	<link href="/packages/bootstrap/dist/css/bootstrap.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/simplelightbox/dist/simple-lightbox.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/flag-icon-css/css/flag-icons.min.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fontsource/poppins/latin.css?v={{ $version }}"
		rel="stylesheet">
	<link href="/packages/@fontsource/news-cycle/latin.css?v={{ $version }}"
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

			<button class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#languageNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

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
					Grocy is a project by <a href="https://berrnd.de"
						target="_blank">Bernd Bestel</a>
					<br>
					Created with passion since 2017 and hosted on <a href="https://berrnd.net"
						target="_blank">berrnd.net</a> infrastructure
					<br>
					Life runs on code
				</div>

			</div>
		</div>
	</footer>

	<script src="/packages/jquery/dist/jquery.min.js?v={{ $version }}"></script>
	<script src="/packages/bootstrap/dist/js/bootstrap.min.js?v={{ $version }}"></script>
	<script src="/packages/@fortawesome/fontawesome-free/js/all.js?v={{ $version }}"></script>
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
