@extends('layout')

@section('title', 'Grocy - ERP für deinen Kühlschrank')
@section('lang', 'de')

@section('headerAdditional')
<meta name="description"
	content="Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion. Created by Bernd Bestel.">

<link rel="canonical"
	href="https://grocy.info/de">
<link rel="alternate"
	hreflang="en"
	href="https://grocy.info">

<meta property="og:type"
	content="website">
<meta property="og:title"
	content="@yield('title')">
<meta property="og:description"
	content="Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion.">
<meta property="og:site_name"
	content="Grocy">
<meta property="og:image"
	content="https://grocy.info/img/screenshot-de.png?v={{ $version }}">

<meta name="twitter:card"
	content="summary">
<meta name="twitter:title"
	content="@yield('title')">
<meta name="twitter:description"
	content="Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion.">
<meta name="twitter:site"
	content="@grocy_erp">
<meta name="twitter:creator"
	content="@BerndBestel">
<meta name="twitter:image"
	content="https://grocy.info/img/screenshot-de.png?v={{ $version }}">

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
			"@id": "https://grocy.info/de",
			"url": "https://grocy.info/de",
			"name": "Grocy - ERP für deinen Kühlschrank",
			"description": "Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion.",
			"inLanguage": "de",
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
						"item": "https://grocy.info/de",
						"name": "DE"
					}
				]
			},
			"about": {
				"@type": "SoftwareApplication",
				"@id": "https://grocy.info/#/schema/Organization",
				"name": "Grocy",
				"description": "Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion.",
				"applicationCategory": "ERP",
				"screenshot": "https://grocy.info/img/screenshot-de.png?v={{ $version }}",
				"inLanguage": "de",
				"softwareVersion": "{{ $grocyVersionInfo->Version }}",
				"author": {
					"@type": "Person",
					"@id": "https://berrnd.de/#/schema/Organization",
					"url": "https://berrnd.de/",
					"name": "Bernd Bestel"
				},
				"dateCreated": "2017-04-15",
				"dateModified": "{{ $grocyVersionInfo->ReleaseDate }}",
				"keywords": "ERP, Grocy",
				"license": "https://opensource.org/licenses/MIT",
				"releaseNotes": "https://grocy.info/changelog",
				"sameAs": "https://github.com/grocy/grocy"
			}
		}
	]
}
</script>
@stop

@section('navAdditional')
<div class="collapse navbar-collapse"
	id="languageNavbar">
	<ul class="navbar-nav ml-auto">
		<li class=" nav-item dropdown ml-auto">
			<a class="nav-link dropdown-toggle text-primary"
				href="#"
				data-toggle="dropdown"><i class="fi fi-de"></i> Deutsch</a>

			<div class="dropdown-menu">
				<a class="dropdown-item"
					href="/"><i class="fi fi-us"></i> Englisch</a>
			</div>
		</li>
	</ul>
</div>
@stop

@section('content')
<header>
	<div class="jumbotron bg-dark text-white mb-1 py-5">
		<div class="container">
			<div class="row align-items-center d-flex">

				<div class="col-xs-12 col-lg-7">
					<h1>ERP für deinen Kühlschrank</h1>
					<p class="lead fs-1 mb-2">Grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung.</p>
					<p class="lead fs-2">Open Source. Built with passion.</p>
					<p class="mb-2">
						<a class="btn btn-primary btn-lg"
							href="https://releases.grocy.info/latest"
							target="_blank"><i class="fas fa-download"></i> Download</a>
						<a class="btn btn-success btn-lg"
							href="https://de.demo.grocy.info"
							target="_blank"><i class="fas fa-eye"></i> Demo</a>
					</p>
					<p class="mb-1">
						<a class="btn btn-secondary btn-sm"
							href="/changelog"><i class="fas fa-right-left"></i> Changelog</a>
						<a class="btn btn-secondary btn-sm"
							href="https://github.com/grocy/grocy#how-to-install"
							target="_blank"><i class="fas fa-info"></i> Install guide</a>
						<a class="btn btn-secondary btn-sm"
							href="https://github.com/grocy/grocy"
							target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
					</p>
					<p class="font-weight-light font-italic fs-4 pt-1">
						Aktuelle Version: {{ $grocyVersionInfo->Version }} (veröffentlicht am {{ date('d.m.Y', strtotime($grocyVersionInfo->ReleaseDate)) }})
					</p>
				</div>

				<div class="col-xs-12 col-lg-5 mt-3 mt-lg-0">
					<a class="lightbox"
						href="/img/stock-de.png?v={{ $version }}"><img src="/img/__thumbs/stock-de.png?v={{ $version }}"
							alt="Grocy Dashboard"
							title="Grocy Dashboard"
							class="feature-image img-fluid"></a>
				</div>

			</div>
		</div>
	</div>

	<div id="top-addons-carousel"
		class="carousel slide mt-2"
		data-ride="carousel"
		data-interval="8000">
		<ol class="carousel-indicators">
			<li data-target="#top-addons-carousel"
				data-slide-to="0"
				class="active"></li>
			<li data-target="#top-addons-carousel"
				data-slide-to="1"></li>
			<li data-target="#top-addons-carousel"
				data-slide-to="2"></li>
			<li data-target="#top-addons-carousel"
				data-slide-to="3"></li>
			<li data-target="#top-addons-carousel"
				data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="container alert alert-dark rounded-0">
				<div class="row align-items-center d-flex my-3 coursel-inner-container">

					<div id="grocy-desktop"
						class="carousel-item active">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h1>Grocy Desktop</h1>
								<p class="lead fs-2">Benutze Grocy ohne einen Webserver verwalten zu müssen - wie eine normale (Windows) Desktop-Anwendung.</p>
								<p class="mb-2">
									<a class="btn btn-primary"
										href="https://releases.grocy.info/latest-desktop"
										target="_blank"><i class="fas fa-download"></i> Download <span class="small">(klassische Installation)</span></a>
									oder
									<a href="https://apps.microsoft.com/detail/9NWB1TRNNKSF?launch=true&mode=full&hl=de&gl=DE"
										target="_blank">
										<img src="/img/badges/microsoft-store-badge-de.svg?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Desktop im Microsoft Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/grocy/grocy-desktop"
										target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/grocy-desktop-de.png?v={{ $version }}"><img src="/img/__thumbs/grocy-desktop-de.png?v={{ $version }}"
										alt="Grocy Desktop"
										title="Grocy Desktop"
										class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="grocy-android"
						class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1>Grocy Android</h1>
								<p class="lead fs-2">Grocy auf deinem Smartphone - mit Barcodeerkennung und intuitiver Stapelverarbeitung.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=xyz.zedler.patrick.grocy&hl=de"
										target="_blank">
										<img src="/img/badges/google-play-badge-de.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Android on Google Play">
									</a>
									<a href="https://f-droid.org/de/packages/xyz.zedler.patrick.grocy/"
										target="_blank">
										<img src="/img/badges/f-droid-badge-de.svg?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Android on F-Droid">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/patzly/grocy-android"
										target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/grocy-android.png?v={{ $version }}"><img src="/img/__thumbs/grocy-android.png?v={{ $version }}"
										alt="Grocy Android"
										title="Grocy Android"
										class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="grocy-swiftui"
						class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1>Grocy Mobile</h1>
								<p class="lead fs-2">Native interface for Grocy on Apple devices (iOS, macOS).</p>
								<p class="mb-2">
									<a href="https://apps.apple.com/de/app/id1567803209"
										target="_blank">
										<img src="/img/badges/app-store-badge-de.svg?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Mobile on the App Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/supergeorg/Grocy-SwiftUI"
										target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/grocy-swiftui.png?v={{ $version }}"><img src="/img/__thumbs/grocy-swiftui.png?v={{ $version }}"
										alt="Grocy Mobile"
										title="Grocy Mobile"
										class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="barcodebuddy"
						class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1>Barcode Buddy</h1>
								<p class="lead fs-2">A barcode scanning helper / lookup tool for Grocy.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=de.bulling.barcodebuddyscanner&hl=de"
										target="_blank">
										<img src="/img/badges/google-play-badge-de.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Barcode Buddy on Google Play">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/Forceu/barcodebuddy"
										target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/barcode-buddy.png?v={{ $version }}"><img src="/img/__thumbs/barcode-buddy.png?v={{ $version }}"
										alt="Barcode Buddy"
										title="Barcode Buddy"
										class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="homeassistant"
						class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1>Home Assistant Add-on</h1>
								<p class="lead fs-2">Use Grocy fully integrated into Home Assistant.</p>
								<p class="mb-2">
									<a class="btn btn-sm btn-secondary"
										href="https://community.home-assistant.io/t/community-hass-io-add-on-grocy/112422"
										target="_blank"><i class="fas fa-arrow-up-right-from-square"></i> Home Assistant Community Forum Thread</a>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/hassio-addons/addon-grocy/blob/master/grocy/DOCS.md"
										target="_blank"><i class="fas fa-arrow-up-right-from-square"></i> Documentation</a>
									<a class="btn btn-sm btn-secondary mt-1"
										href="https://github.com/hassio-addons/addon-grocy"
										target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/hassio-addon.gif?v={{ $version }}"><img src="/img/__thumbs/hassio-addon.gif?v={{ $version }}"
										alt="Home Assistant Add-on"
										title="Home Assistant Add-on"
										class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<a class="carousel-control-prev"
			href="#top-addons-carousel"
			data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next"
			href="#top-addons-carousel"
			data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</header>

<div class="container mt-5 feature-list">

	<section class="row">
		<div id="getting-in-touch"
			class="col-xs-12 col-lg-6">
			<h2>Mach mit / Kontakt</h2>
			<p class="lead fs-2">
				Unterhalte dich mit anderen Grocy Benutzern auf Reddit oder melde Fehler / schlage neue Ideen im Issue Tracker auf GitHub vor.
			</p>
			<p class="lead fs-2">
				<a class="btn btn-danger"
					href="https://www.reddit.com/r/grocy"
					target="_blank"><i class="fab fa-reddit"></i> r/grocy</a>
				<a class="btn btn-dark"
					href="https://github.com/grocy/grocy/issues"
					target="_blank"><i class="fab fa-github"></i> grocy/grocy</a>
			</p>
		</div>
		<div id="addons-intro"
			class="col-xs-12 col-lg-6 mt-5 mt-lg-0">
			<h2>Add-ons / Tools / Guides</h2>
			<p class="lead fs-2">
				Von der Community beigesteuerte Tools, Integrationen, Installations-/Fehlersuche-Guides und andere nützliche Helferlein, die Grocy noch besser und produktiver machen.
			</p>
			<p class="lead fs-2">
				<a class="btn btn-info"
					href="/addons"><i class="fas fa-puzzle-piece"></i> Add-ons and other tools</a>
				<a class="btn btn-info"
					href="/links"><i class="fas fa-list"></i> Tutorials and other guides</a>
			</p>
		</div>
	</section>

	<hr>

	<section id="purchase-form"
		class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox"
				href="/img/purchase-de.png?v={{ $version }}"><img src="/img/__thumbs/purchase-de.png?v={{ $version }}"
					alt="Grocy Einkaufs-Erfassungsformular"
					title="Grocy Einkaufs-Erfassungsformular"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-lg-0">
			<h3>Einkäufe erfassen</h3>
			<p class="lead fs-2">Eine für Barcodescanner vorbereitete Oberfläche macht es einfach, Einkäufe intuitiv und effizient zu erfassen. Damit weißt du immer, was gerade Zuhause vorrätig ist.</p>
			<p class="lead fs-2">
				Es ist auch möglich, Barcodes direkt im Webbrowser mit der Gerätekamera zu scannen (<i class="fab fa-youtube"></i> <a href="https://www.youtube.com/watch?v=Y5YH6IJFnfc"
					target="_blank">Kurze Video-Demo</a>).
			</p>
		</div>
		<div class="col">
			<a class="lightbox"
				href="/img/browser-barcode-scanning.png?v={{ $version }}"><img src="/img/__thumbs/browser-barcode-scanning.png?v={{ $version }}"
					alt="Grocy Barcode scannen im Browser"
					title="Grocy Barcode scannen im Browser"
					class="feature-image img-fluid"></a>
		</div>
	</section>

	<hr>

	<section id="shopping-list"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/shoppinglist-de.png?v={{ $version }}"><img src="/img/__thumbs/shoppinglist-de.png?v={{ $version }}"
					alt="Grocy Einkausfzettel"
					title="Grocy Einkausfzettel"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Automatisiere & Optimiere deinen Einkaufszettel</h3>
			<p class="lead fs-2">Definiere Mindestbestände für deine Lieblingsprodukte und frage dich nie wieder im Supermarkt "habe ich noch genug Nudeln daheim?".</p>
			<p class="lead fs-2">Gruppiere Produkte nach Sortiment um den Weg im Supermarkt zu optimieren - nie mehr ständig von einem zum anderen Ende springen müssen.</p>
		</div>
	</section>

	<hr>

	<section id="products"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/products-de.png?v={{ $version }}"><img src="/img/__thumbs/products-de.png?v={{ $version }}"
					alt="Grocy Bestandsübersicht"
					title="Grocy Bestandsübersicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Wirf weniger weg</h3>
			<p class="lead fs-2">Behalte immer im Überblick, was als nächstes fällig ist.</p>
		</div>
	</section>

	<hr>

	<section id="input-productivity"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/dateinput-de.gif?v={{ $version }}"><img src="/img/__thumbs/dateinput-de.gif?v={{ $version }}"
					alt="Grocy Eingabeformular"
					title="Grocy Eingabeformular"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Durchdachte Eingabeformulare</h3>
			<p class="lead fs-2">Eine Hand, 3 Sekunden, kein Problem - Eingabefehler ausgeschlossen.</p>
		</div>
	</section>

	<hr>

	<section id="recipes"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/recipes-de.png?v={{ $version }}"><img src="/img/__thumbs/recipes-de.png?v={{ $version }}"
					alt="Grocy Rezeptliste"
					title="Grocy Rezeptliste"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Rezepte mit Intelligenz</h3>
			<p class="lead fs-2">Pflege deine Rezepte und sehe auf einen Blick, ob alles Benötigte Zuhause vorrätig ist. Natürlich kann alles nicht vorhandene auch automatisch auf den Einkaufszettel übernommen werden.</p>
		</div>
	</section>

	<hr>

	<section id="recipe-details"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/recipedetail-de.png?v={{ $version }}"><img src="/img/__thumbs/recipedetail-de.png?v={{ $version }}"
					alt="Grocy Rezeptansicht"
					title="Grocy Rezeptansicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Kochbuch ist so 2016</h3>
			<p class="lead fs-2">Rezepte schick und übersichtlich.</p>
		</div>
	</section>

	<hr>

	<section id="meal-planning"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/mealplan-de.png?v={{ $version }}"><img src="/img/__thumbs/mealplan-de.png?v={{ $version }}"
					alt="Grocy Speiseplan"
					title="Grocy Speiseplan"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Speiseplan Like a Pro</h3>
			<p class="lead fs-2">Plane deine täglichen Mahlzeiten anhand deiner Rezepte und packe alles nicht vorhandene mit einem Klick auf den Einkaufszettel.</p>
		</div>
	</section>

	<hr>

	<section id="equipment"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/equipment-de.png?v={{ $version }}"><img src="/img/__thumbs/equipment-de.png?v={{ $version }}"
					alt="Grocy Ausstattungsübersicht"
					title="Grocy Ausstattungsübersicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Verwalte deine Haushaltsgeräte/-Ausstattung</h3>
			<p class="lead fs-2">Habe Bedienungsanleitungen und wichtige Informationen zur Hand, wenn sie benötigt werden - nie mehr vergeblich danach suchen.</p>
		</div>
	</section>

	<hr>

	<section id="chores"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/chores-de.png?v={{ $version }}"><img src="/img/__thumbs/chores-de.png?v={{ $version }}"
					alt="Grocy Hausarbeitenübersicht"
					title="Grocy Hausarbeitenübersicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Erfasse deine Hausarbeiten</h3>
			<p class="lead fs-2">Mache dir keinen Kopf mehr über "oh, wann hab ich zuletzt ... gemacht?", schau einfach nach.</p>
		</div>
	</section>

	<hr>

	<section id="tasks"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/tasks-de.png?v={{ $version }}"><img src="/img/__thumbs/tasks-de.png?v={{ $version }}"
					alt="Grocy Aufgabenübersicht"
					title="Grocy Aufgabenübersicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Behalte den Überblick über deine Aufgaben</h3>
			<p class="lead fs-2">Nur eine ganz normale To-Do Liste.<br>So wie ich sowas (und vielleicht auch du) mag.</p>
		</div>
	</section>

	<hr>

	<section id="batteries"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/batteries-de.png?v={{ $version }}"><img src="/img/__thumbs/batteries-de.png?v={{ $version }}"
					alt="Grocy Batterieübersicht"
					title="Grocy Batterieübersicht"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Verwalte deine Akkus</h3>
			<p class="lead fs-2">Heutzutage haben wir unzählige Akkus in unserem Haushalt. Um sie in einem guten Zustand zu halten, ist es gut zu wissen, wann sie zuletzt geladen wurden.</p>
		</div>
	</section>

	<hr>

	<section id="user-defined-fields"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/userfields-de.png?v={{ $version }}"><img src="/img/__thumbs/userfields-de.png?v={{ $version }}"
					alt="Grocy Benutzerdefinierte Felder"
					title="Grocy Benutzerdefinierte Felder"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Benutzerdefinierte Felder/Objekte/Listen</h3>
			<p class="lead fs-2">Zu jeder Entität (wie Produkte oder Hausarbeiten) können beliebige benutzerdefinierte Felder hinzugefügt werden. Du kannst sogar komplett eigene Objekte/Listen erstellen, um alles bequem zentral verwalten zu könnnen.</p>
		</div>
	</section>

	<hr>

	<section id="night-mode"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/nightmode-de.png?v={{ $version }}"><img src="/img/__thumbs/nightmode-de.png?v={{ $version }}"
					alt="Grocy im Night-Mode"
					title="Grocy im Night-Mode"
					class="feature-image img-fluid mt-1"></a>
		</div>
		<div class="col pt-4 pt-lg-0">
			<h3>Nachtmodus</h3>
			<p class="lead fs-2">Der Nachtmodus wird automatisch verwendet, wenn dein Gerät das standardmäßig bevorzugt und kann alternativ auch automatisch bei Sonnenuntergang aktiviert werden (konfigurierbarer Zeitbereich).</p>
		</div>
	</section>

	<hr>

	<section id="devices"
		class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox"
				href="/img/smartphone-shopping-list-de.jpg?v={{ $version }}"><img src="/img/__thumbs/smartphone-shopping-list-de.jpg?v={{ $version }}"
					alt="Grocy Einkaufszettel auf einem Smartphone"
					title="Grocy Einkaufszettel auf einem Smartphone"
					class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-lg-0">
			<h3>Läuft auf jedem Gerät</h3>
			<p class="lead fs-2">Egal ob auf dem Smartphone oder jedem anderem Gerät, nur ein Browser wird benötigt - baue dir z. B. ein günstiges und sparsames Tablet in die Küche und du hast ein super komfortables 24/7 Grocy Terminal.</p>
		</div>
		<div class="col">
			<a class="lightbox"
				href="/img/kitchen-terminal-de.jpg?v={{ $version }}"><img src="/img/__thumbs/kitchen-terminal-de.jpg?v={{ $version }}"
					alt="Grocy Terminal in der Küche"
					title="Grocy Terminal in der Küche"
					class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
	</section>

	<hr>

	<section id="integration-and-customization"
		class="row align-items-center d-flex">
		<div class="col">
			<h3>Integration und individuelle Anpassbarkeit</h3>
			<p class="lead fs-2">Eine (RESTful) API für alles, siehe das <a href="https://demo.grocy.info/api"
					target="_blank">integrierte Swagger UI (/api)</a>.</p>
			<p class="lead fs-2">Feature Flags um alles, was du nicht brauchst, ausschalten bzw. ausblenden zu können (z. B. Hausarbeiten, alles was mit der Preisverfolgung zu tun hat, etc.).</p>
			<p class="lead fs-2"><a href="https://github.com/grocy/grocy#adding-your-own-css-or-js-without-to-have-to-modify-the-application-itself"
					target="_blank">Eigenes CSS and JS</a> um wirklich alles bis ins kleinste Detail anpassen zu können, unter Beibehaltung der Updatefähigkeit.</p>
		</div>
	</section>

	<hr>

	<section id="more"
		class="row">
		<div class="col">
			<h2>Und noch vieles mehr</h2>
			<p class="lead fs-2">Grocy wird ständig weiterentwickelt und täglich von mir und vielen anderen benutzt.</p>
			<p class="lead fs-2">Wenn dir etwas fehlt, erstelle gerne einfach einen <a href="https://github.com/grocy/grocy/issues/new?labels=enhancement&template=feature-request.md&title=Feature+Request%3A+"
					target="_blank">Feature Request</a> auf GitHub - evtl. wird es innerhalb von Stunden umgesetzt, denn deine Ideen sind meine Motiviation. 😄</p>
		</div>
	</section>

	<hr>

	<section id="say-thanks"
		class="row">
		<div class="col">
			<h2>Sag Danke</h2>
			<p class="lead fs-2">
				Grocy ist eines meiner Hobbys und ich arbeite gerne daran. Aber da es eben ein Hobby ist, hängt die Weiterentwicklung von (meiner) Freizeit und Lust ab - heißt es kann manchmal auch mal etwas dauern.
			</p>
			<p class="lead fs-2 mb-0">
				Mitarbeit beim Projekt wäre also das, was Grocy am meisten hilft.
			</p>
			<p class="lead fs-3">
				Das muss nicht unbedingt Code sein - das Erstellen von Dokumentation / Tutorials für Grocy, Hilfe bei der Übersetzung von Grocy in deine Sprache (kann auf <a href="https://www.transifex.com/grocy/grocy"
					target="_blank">Transifex</a> gemacht werden) oder helfen Grocy zu verbreiten (z. B. indem du einen Artikel darüber schreibst) ist genauso hilfreich.
			</p>
			<p class="lead fs-2 mb-0">
				Wenn du dich dennoch bedanken willst, indem du mich auf einen Kaffee, ein Bier oder eine Pizza einlädst, kannst du das natürlich gerne tun - hier sind einige Möglichkeiten dafür:
			<ul class="fs-2 list-unstyled">
				<li class="my-2">
					<a class="btn btn-primary"
						href="https://www.paypal.com/donate/?hosted_button_id=UPPXVE63EK3L2"
						target="_blank"
						rel="nofollow">
						<i class="fab fa-paypal"></i> PayPal
					</a>
				</li>
			</ul>
			</p>
			<p class="lead fs-2">
				Danke dir! <i class="fas fa-heart"></i>
			</p>
		</div>
	</section>

</div>
@stop
