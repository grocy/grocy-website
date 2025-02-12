@extends('layout')

@section('title', 'Links | Grocy')
@section('lang', 'en')

@section('headerAdditional')
<meta name="description"
	content="A list of community contributed help- and troubleshooting guides and other articles about Grocy.">

<link rel="canonical"
	href="https://grocy.info/links">

<meta property="og:type"
	content="website">
<meta property="og:title"
	content="@yield('title')">
<meta property="og:description"
	content="A list of community contributed help- and troubleshooting guides and other articles about Grocy.">
<meta property="og:site_name"
	content="Grocy">
<meta property="og:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

<meta name="twitter:card"
	content="summary">
<meta name="twitter:title"
	content="@yield('title')">
<meta name="twitter:description"
	content="A list of community contributed help- and troubleshooting guides and other articles about Grocy.">
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
			"@id": "https://grocy.info/links",
			"url": "https://grocy.info/links",
			"name": "@yield('title')",
			"description": "A list of community contributed help- and troubleshooting guides and other articles about Grocy.",
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
						"item": "https://grocy.info/links",
						"name": "Links"
					}
				]
			},
			"potentialAction": {
				"@type": "ReadAction",
				"target": "https://grocy.info/links"
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

		<div class="col">
			<h1 class="headline">Links</h1>
			<h5 class="text-muted pt-3">A list of community contributed help- and troubleshooting guides and other articles about Grocy</h5>
		</div>

	</div>
</header>

<div class="container pb-3">
	<div class="row">

		<div class="col-xs-12 col-lg-6">

			<h2 class="headline mb-3">Articles / written tutorials</h2>

			<div>
				<h5>Debian/NGINX/PHP-FPM reference configuration of the official Grocy demo instances (incl. reverse proxy)</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://www.reddit.com/r/grocy/comments/15lm1he"
					target="_blank">https://www.reddit.com/r/grocy/comments/15lm1he</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Keep Your Cupboard Contents Fresh With Grocy on Raspberry Pi</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://www.makeuseof.com/raspberry-pi-keep-cupboard-contents-fresh-grocy/"
					target="_blank">https://www.makeuseof.com/raspberry-pi-keep-cupboard-contents-fresh-grocy/</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Installing Bleeding Edge Grocy on Raspberry Pi OS (Debian 11)</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://othmanalikhan.github.io/installing-grocy-on-a-raspberry-pi-with-apache"
					target="_blank">https://othmanalikhan.github.io/installing-grocy-on-a-raspberry-pi-with-apache</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Arch Linux installation script</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/TheHellSite/archlinux_lxc/tree/main/grocy"
					target="_blank">https://github.com/TheHellSite/archlinux_lxc/tree/main/grocy</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>How to install Grocy on FreeNas FreeBSD 11.3 Jail using nginx</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/715#issue-597535439"
					target="_blank">https://github.com/grocy/grocy/issues/715#issue-597535439</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy >= 2.6.1 subdirectory installation (Apache)</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/694#issue-592850273"
					target="_blank">https://github.com/grocy/grocy/issues/694#issue-592850273</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy >= 2.6.1 subdirectory installation (nginx)</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/694#issuecomment-609079721"
					target="_blank">https://github.com/grocy/grocy/issues/694#issuecomment-609079721</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>How to install inside LXC container (Alpine Linux)</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/523"
					target="_blank">https://github.com/grocy/grocy/issues/523</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Securing Grocy Desktop for the internet with a nginx reverse proxy</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy-desktop/issues/17#issuecomment-668591402"
					target="_blank">https://github.com/grocy/grocy-desktop/issues/17#issuecomment-668591402</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>How to install on Ubuntu 16.04 using Apache</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/357"
					target="_blank">https://github.com/grocy/grocy/issues/357</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Install Grocy in cPanel</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/354"
					target="_blank">https://github.com/grocy/grocy/issues/354</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Minimal Ubuntu 20.04 system setup with nginx, Grocy > 2.6.0, php 7.4</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/649"
					target="_blank">https://github.com/grocy/grocy/issues/649</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Error message "Undefined function mime_content_type()"</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://github.com/grocy/grocy/issues/381"
					target="_blank">https://github.com/grocy/grocy/issues/381</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Automating your shopping list with Home Assistant and Grocy</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://philhawthorne.com/automating-your-shopping-list-with-home-assistant-and-grocy"
					target="_blank">https://philhawthorne.com/automating-your-shopping-list-with-home-assistant-and-grocy</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Nie wieder Lebensmittel wegschmeißen – dank Grocy</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://www.nerd-o-mania.de/wordpress/2020/07/28/nie-wieder-lebensmittel-wegschmeien-dank-grocy/"
					target="_blank">https://www.nerd-o-mania.de/wordpress/2020/07/28/nie-wieder-lebensmittel-wegschmeien-dank-grocy/</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Manage your home stocks like a pro with Grocy and a Raspberry Pi</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://peppe8o.com/manage-your-home-stocks-like-a-pro-with-grocy-and-raspberry-pi/"
					target="_blank">https://peppe8o.com/manage-your-home-stocks-like-a-pro-with-grocy-and-raspberry-pi/</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Setting up Grocy on Caddy with Let’s Encrypt Support</h5>
				<i class="fa-solid fa-arrow-up-right-from-square"></i>
				<a class="small"
					href="https://srp.life/2023/05/23/setting-up-grocy-on-caddy-with-lets-encrypt-support/"
					target="_blank">https://srp.life/2023/05/23/setting-up-grocy-on-caddy-with-lets-encrypt-support/</a>
			</div>
		</div>

		<div class="col-xs-12 col-lg-6 mt-5 mt-lg-0">

			<h2 class="headline mb-3">Video tutorials</h2>

			<div>
				<h5>Kühlschrank trifft Smart Home: Grocy & Home Assistant</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=_e7dvJiKbQQ"
					target="_blank">https://www.youtube.com/watch?v=_e7dvJiKbQQ</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy ERP installieren – Die perfekte Software für deine Haushaltsorganisation</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=yeCpZFSR2FA"
					target="_blank">https://www.youtube.com/watch?v=yeCpZFSR2FA</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy auf Synology</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=ddSEkfT95eI"
					target="_blank">https://www.youtube.com/watch?v=ddSEkfT95eI</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>BitBastelei #485 - Grocy: Übersicht im Kühlschrank</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=q0U--z_1vio"
					target="_blank">https://www.youtube.com/watch?v=q0U--z_1vio</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy - a Web-Based Self-Hosted Groceries and Household Management Solution for your Home</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=kMpui1hw-gM"
					target="_blank">https://www.youtube.com/watch?v=kMpui1hw-gM</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>How to Install Grocy on Docker Using Portainer</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=cm8oaHYdoR4"
					target="_blank">https://www.youtube.com/watch?v=cm8oaHYdoR4</a>
			</div>

			<hr class="my-3 py-0">

			<div>
				<h5>Grocy Übersicht</h5>
				<i class="fa-brands fa-youtube"></i>
				<a class="small"
					href="https://www.youtube.com/watch?v=82xtwjKIei0"
					target="_blank">https://www.youtube.com/watch?v=82xtwjKIei0</a>
			</div>

		</div>

	</div>
</div>
@stop
