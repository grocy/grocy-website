@extends('layout')

@section('title', 'grocy - ERP beyond your fridge')
@section('lang', 'de')

@section('headerAdditional')
<meta name="description" content="ERP für deinen Kühlschrank - grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung. Open Source. Built with passion. Created by Bernd Bestel.">

<link rel="canonical" href="https://grocy.info/de">
<link rel="alternate" hreflang="en" href="https://grocy.info">
@stop

@section('navAdditional')
<div class="collapse navbar-collapse" id="languageNavbar">
	<ul class="navbar-nav ml-auto">
		<li class=" nav-item dropdown ml-auto">
			<a class="nav-link dropdown-toggle text-primary" href="#" data-toggle="dropdown"><i class="flag-icon flag-icon-de"></i> Deutsch</a>

			<div class="dropdown-menu">
				<a class="dropdown-item" href="https://grocy.info/"><i class="flag-icon flag-icon-us"></i> Englisch</a>
			</div>
		</li>
	</ul>
</div>
@stop

@section('content')
<header>
	<div class="jumbotron mb-1">
		<div class="container">
			<div class="row align-items-center d-flex">

				<div class="col-xs-12 col-lg-7">
					<h1 class="bold">ERP für deinen Kühlschrank</h1>
					<p class="lead grandmajor-info">grocy ist eine selbst gehostete Webanwendung zur Lebensmittel- und Haushaltsverwaltung.</p>
					<p class="lead major-info">Open Source. Built with passion.</p>
					<p class="mb-2">
						<a class="btn btn-primary btn-lg" href="https://releases.grocy.info/latest" target="_blank"><i class="fas fa-download"></i> Download</a>
						<a class="btn btn-success btn-lg" href="https://de.demo.grocy.info" target="_blank"><i class="fas fa-eye"></i> Demo</a>
					</p>
					<p class="mb-1">
						<a class="btn btn-secondary btn-sm" href="/changelog"><i class="fas fa-exchange-alt"></i> Changelog</a>
						<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy#how-to-install" target="_blank"><i class="fas fa-info"></i> Install guide</a>
						<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
					</p>
					<p class="font-weight-light font-italic grandminor-info">
						Aktuelle Version: {{ $grocyVersionInfo->Version }} (veröffentlicht am {{ date('d.m.Y', strtotime($grocyVersionInfo->ReleaseDate)) }})
					</p>
					<p class="font-weight-light font-italic grandminor-info mb-0">
						Ein Webserver mit PHP 7.2 (oder höher) und der SQLite (PDO) Erweiterung ist erforderlich.<br>
						Aktuell übersetzt in: Englisch, Deutsch, Dänisch, Spanisch, Französisch, Ungarisch, Italienisch, Niederländisch, Norwegisch, Polnisch, Portugiesisch (Brasilien), Portugiesisch (Portugal), Russisch, Slovakisch, Schwedisch, Türkisch und Tschechisch
					</p>
				</div>

				<div class="col-xs-12 col-lg-5">
					<a class="lightbox" href="/img/stock-de.png"><img src="/img/stock-de.png" alt="grocy Dashboard" title="grocy Dashboard" class="feature-image img-fluid"></a>
				</div>

			</div>
		</div>
	</div>

	<div id="top-addons-carousel" class="carousel slide my-2" data-ride="carousel" data-interval="8000">
		<ol class="carousel-indicators">
			<li data-target="#top-addons-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#top-addons-carousel" data-slide-to="1"></li>
			<li data-target="#top-addons-carousel" data-slide-to="2"></li>
			<li data-target="#top-addons-carousel" data-slide-to="3"></li>
			<li data-target="#top-addons-carousel" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="container alert alert-dark rounded-0">
				<div class="row align-items-center d-flex">
					<div id="grocy-desktop" class="carousel-item active">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h1 class="bold">grocy-desktop</h1>
								<p class="lead major-info">Benutze grocy ohne einen Webserver verwalten zu müssen - wie eine normale (Windows) Desktop-Anwendung.</p>
								<p class="mb-2">
									<a class="btn btn-primary" href="https://releases.grocy.info/latest-desktop" target="_blank"><i class="fas fa-download"></i> Download <span class="small">(klassische Installation)</span></a>
									oder
									<a href="https://www.microsoft.com/store/apps/9nwb1trnnksf?cid=storebadge&ocid=badge" target="_blank">
										<img src="/img/microsoft-store-badge.png" class="img-fluid w-25" alt="grocy-desktop im Microsoft Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary" href="https://github.com/grocy/grocy-desktop" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
								<p class="font-weight-light font-italic grandminor-info mb-lg-0">
									.Net Framework erforderlich (normalerweise bereits auf jedem Windows-PC vorhanden), grocy-desktop konfiguriert und verwaltet einen lokalen PHP-Server und grocy - einfach das Setup ausführen, fertig.
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox" href="/img/grocy-desktop-de.png"><img src="/img/grocy-desktop-de.png" alt="grocy-desktop" title="grocy-desktop" class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="grocy-android" class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1 class="bold">grocy-android</h1>
								<p class="lead major-info">grocy on your smartphone - with barcode scanning and batch processing.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=xyz.zedler.patrick.grocy" target="_blank">
										<img src="/img/play-store-badge.png" class="img-fluid w-25" alt="grocy-android on Google Play">
									</a>
									<a href="https://apt.izzysoft.de/fdroid/index/apk/xyz.zedler.patrick.grocy" target="_blank">
										<img src="/img/izzyondroid-badge.png" class="img-fluid w-25" alt="grocy-android on IzzyOnDroid">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary" href="https://github.com/patzly/grocy-android" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox" href="/img/grocy-android.png"><img src="/img/grocy-android.png" alt="grocy-android" title="grocy-android" class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

					<div id="pantryparty" class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1 class="bold">Pantry Party</h1>
								<p class="lead major-info">grocy on your smartphone - multiple barcode lookup sources, text-to-speech and more.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=org.nativescript.PantryParty" target="_blank">
										<img src="/img/play-store-badge.png" class="img-fluid w-25" alt="Pantry Party on Google Play">
									</a>
									<a href="https://apps.apple.com/app/pantry-party/id1510485755" target="_blank">
										<img src="/img/apple-app-store-badge.png" class="img-fluid w-25" alt="Pantry Party on the App Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary" href="https://pantryparty.app/" target="_blank"><i class="fas fa-external-link-alt"></i> Documentation</a>
									<a class="btn btn-sm btn-secondary" href="https://github.com/PantryParty/pantry_party" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox" href="/img/pantry-party.png"><img src="/img/pantry-party.png" alt="Pantry Party" title="Pantry Party" class="feature-image img-fluid w-50"></a>
							</div>
						</div>
					</div>

					<div id="barcodebuddy" class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1 class="bold">Barcode Buddy</h1>
								<p class="lead major-info">A barcode scanning helper / lookup tool for grocy.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=de.bulling.barcodebuddyscanner" target="_blank">
										<img src="/img/play-store-badge.png" class="img-fluid w-25" alt="Barcode Buddy on Google Play">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary" href="https://github.com/Forceu/barcodebuddy" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox" href="/img/barcode-buddy.png"><img src="/img/barcode-buddy.png" alt="Barcode Buddy" title="Barcode Buddy" class="feature-image img-fluid w-50"></a>
							</div>
						</div>
					</div>

					<div id="homeassistant" class="carousel-item">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h6 class="my-0"><span class="badge badge-info">Community contribution</span></h6>
								<h1 class="bold">Home Assistant Add-On for grocy</h1>
								<p class="lead major-info">Use grocy fully integrated into Hass.io.</p>
								<p class="mb-2">
									<a class="btn btn-sm btn-secondary" href="https://community.home-assistant.io/t/community-hass-io-add-on-grocy/112422" target="_blank"><i class="fas fa-external-link-alt"></i>  Home Assistant Community Forum Thread</a>
									<a class="btn btn-sm btn-secondary" href="https://github.com/hassio-addons/addon-grocy/blob/master/grocy/DOCS.md" target="_blank"><i class="fas fa-external-link-alt"></i> Documentation</a>
									<a class="btn btn-sm btn-secondary mt-1" href="https://github.com/hassio-addons/addon-grocy" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox" href="/img/hassio-addon.gif"><img src="/img/hassio-addon.gif" alt="Home Assistant Add-On" title="Home Assistant Add-On" class="feature-image img-fluid"></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<a class="carousel-control-prev ml-lg-5 pl-lg-5" href="#top-addons-carousel" data-slide="prev">
			<span class="carousel-control-prev-icon ml-lg-5 pl-lg-5"></span>
		</a>
		<a class="carousel-control-next mr-lg-5 pr-lg-5" href="#top-addons-carousel" data-slide="next">
			<span class="carousel-control-next-icon mr-lg-5 pr-lg-5"></span>
		</a>
	</div>
</header>

<div class="container mt-5 feature-list">

	<section class="row">
		<div id="getting-in-touch" class="col-xs-12 col-lg-6">
			<h2 class="bold d-inline-block sketch-underline">Mach mit / Kontakt</h2>
			<p class="lead major-info">
				Unterhalte dich mit anderen grocy Benutzern im subreddit oder melde Fehler / schlage neue Ideen im Issue Tracker auf GitHub vor.
			</p>
			<p class="lead major-info">
				<a class="btn btn-danger" href="https://www.reddit.com/r/grocy" target="_blank"><i class="fab fa-reddit"></i> r/grocy</a>
				<a class="btn btn-dark" href="https://github.com/grocy/grocy/issues" target="_blank"><i class="fab fa-github"></i> grocy/grocy</a>
			</p>
		</div>
		<div id="addons-intro" class="col-xs-12 col-lg-6">
			<h2 class="bold d-inline-block sketch-underline">Add-ons / Tools / Guides</h2>
			<p class="lead major-info">
				Von der Community beigesteuerte Tools, Integrationen, Installations-/Fehlersuche-Guides und andere nützliche Helferlein, die grocy noch besser und produktiver machen.
			</p>
			<p class="lead major-info">
				<a class="btn btn-info" href="https://grocy.info/addons"><i class="fas fa-tools"></i> Community contributed Add-ons and other tools</a>
				<a class="btn btn-info mt-2" href="https://grocy.info/links"><i class="fas fa-list"></i> Community contributed help (and other) guides</a>
			</p>
		</div>
	</section>

	<hr>

	<section id="purchase-form" class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox" href="/img/purchase-de.png"><img src="/img/purchase-de.png" alt="grocy Einkaufs-Erfassungsformular" title="grocy Einkaufs-Erfassungsformular" class="feature-image img-fluid"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Einkäufe erfassen</h3>
			<p class="lead major-info">Eine für Barcodescanner vorbereitete Oberfläche macht es einfach, Einkäufe einfach und vor allem schnell zu erfassen. Damit weißt du immer, was gerade Zuhause vorrätig ist.</p>
			<p class="lead major-info">
				Es ist auch möglich, Barcodes direkt im Webbrowser mit der Gerätekamera zu scannen (<a href="https://www.youtube.com/watch?v=Y5YH6IJFnfc" target="_blank"><i class="fab fa-youtube"></i> Kurze Video-Demo</a>).
			</p>
		</div>
		<div class="col">
			<a class="lightbox" href="/img/browser-barcode-scanning.png"><img src="/img/browser-barcode-scanning.png" alt="grocy Barcode scannen im Browser" title="grocy Barcode scannen im Browser" class="feature-image img-fluid"></a>
		</div>
	</section>

	<hr>

	<section id="shopping-list" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/shoppinglist-de.png"><img src="/img/shoppinglist-de.png" alt="grocy Einkausfzettel" title="grocy Einkausfzettel" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Automatisiere & Optimiere deinen Einkaufszettel</h3>
			<p class="lead major-info">Definiere Mindestbestände für deine Lieblingsprodukte und frage dich nie wieder im Supermarkt "habe ich noch genug Nudeln daheim?".</p>
			<p class="lead major-info">Gruppiere Produkte nach Sortiment um den Weg im Supermarkt zu optimieren - nie mehr ständig von einem zum anderen Ende springen müssen.</p>
		</div>
	</section>

	<hr>

	<section id="products" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/products-de.png"><img src="/img/products-de.png" alt="grocy Bestandsübersicht" title="grocy Bestandsübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Wirf weniger weg</h3>
			<p class="lead major-info">Behalte immer im Überblick, was als nächstes abläuft.</p>
		</div>
	</section>

	<hr>

	<section id="input-productivity" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/dateinput-de.gif"><img src="/img/dateinput-de.gif" alt="grocy Eingabeformular" title="grocy Eingabeformular" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Durchdachte Eingeformulare</h3>
			<p class="lead major-info">Eine Hand, 3 Sekunden, kein Problem - Eingabefehler ausgeschlossen.</p>
		</div>
	</section>

	<hr>

	<section id="recipes" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/recipes-de.png"><img src="/img/recipes-de.png" alt="grocy Rezeptliste" title="grocy Rezeptliste" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Rezepte mit Intelligenz</h3>
			<p class="lead major-info">Pflege deine Rezepte und sehe auf einen Blick, ob alles Benötigte Zuhause vorrätig ist. Natürlich kann alles nicht vorhandene auch automatisch auf den Einkaufszettel übernommen werden.</p>
		</div>
	</section>
	
	<hr>
	
	<section id="recipe-details" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/recipedetail-de.png"><img src="/img/recipedetail-de.png" alt="grocy Rezeptansicht" title="grocy Rezeptansicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Kochbuch ist so 2016</h3>
			<p class="lead major-info">Rezepte übersichtlich und klar.</p>
		</div>
	</section>

	<hr>
	
	<section id="meal-planning" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/mealplan-de.png"><img src="/img/mealplan-de.png" alt="grocy Speiseplan" title="grocy Speiseplan" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Speiseplan Like a Pro</h3>
			<p class="lead major-info">Plane deine täglichen Mahlzeiten anhand deiner Rezepte und packe alles nicht vorhandene mit einem Klick auf den Einkaufszettel.</p>
		</div>
	</section>

	<hr>

	<section id="equipment" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/equipment-de.png"><img src="/img/equipment-de.png" alt="grocy Ausstattungsübersicht" title="grocy Ausstattungsübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Verwalte deine Haushaltsgeräte/-Ausstattung</h3>
			<p class="lead major-info">Habe Bedienungsanleitungen und wichtige Informationen zur Hand, wenn sie benötigt werden - nie mehr vergeblich suchen.</p>
		</div>
	</section>
	
	<hr>

	<section id="chores" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/chores-de.png"><img src="/img/chores-de.png" alt="grocy Hausarbeitenübersicht" title="grocy Hausarbeitenübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Erfasse deine Hausarbeiten</h3>
			<p class="lead major-info">Mache dir keinen Kopf mehr über "oh, wann hab ich zuletzt ... gemacht?", schaue einfach nach.</p>
		</div>
	</section>

	<hr>

	<section id="tasks" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/tasks-de.png"><img src="/img/tasks-de.png" alt="grocy Aufgabenübersicht" title="grocy Aufgabenübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Behalte den Überblick über deine Aufgaben</h3>
			<p class="lead major-info">Nur eine ganz normale To-Do Liste.<br>So wie ich sowas (und evtl. auch du) mag.</p>
		</div>
	</section>

	<hr>

	<section id="batteries" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/batteries-de.png"><img src="/img/batteries-de.png" alt="grocy Batterieübersicht" title="grocy Batterieübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Verwalte deine Akkus</h3>
			<p class="lead major-info">Benutze aufladbare Batterien für alles im Haushalt und halte sie fit, weil du weißt, wo welcher Akku gerade im Einsatz ist und wann und wie oft er zuletzt aufgeladen wurde.</p>
		</div>
	</section>

	<hr>

	<section id="user-defined-fields" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/userobjects-de.png"><img src="/img/userobjects-de.png" alt="grocy Benutzerdefinierte Felder" title="grocy Benutzerdefinierte Felder" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Benutzerdefinierte Felder/Objekte/Listen</h3>
			<p class="lead major-info">Zu jeder Entität (wie Produkte oder Hausarbeiten) können beliebige benutzerdefinierte Felder hinzugefügt werden. Du kannst sogar komplett eigene Objekte erstellen, um alles bequem zentral verwalten zu könnnen.</p>
		</div>
	</section>

	<hr>

	<section id="night-mode" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/nightmode-de.png"><img src="/img/nightmode-de.png" alt="grocy im Night-Mode" title="grocy im Night-Mode" class="feature-image img-fluid mt-1"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Night-Mode inklusive</h3>
			<p class="lead major-info">Weil wir alle es lieben, zumindest manchmal. Natürlich kann der Nachtmodus auch automatisch bei Sonnenuntergang aktiviert werden (konfigurierbarer Zeitbereich).</p>
		</div>
	</section>

	<hr>

	<section id="devices" class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox" href="/img/smartphone-shopping-list-de.jpg"><img src="/img/smartphone-shopping-list-de.jpg" alt="grocy Einkaufszettel auf einem Smartphone" title="grocy Einkaufszettel auf einem Smartphone" class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Läuft auf jedem Gerät</h3>
			<p class="lead major-info">Egal ob auf dem Smartphone oder jedem anderem Gerät, nur ein Browser wird benötigt - baue dir z. B. ein günstiges und sparsames Tablet in die Küche und du hast ein super komfortables 24/7 grocy Terminal.</p>
		</div>
		<div class="col">
			<a class="lightbox" href="/img/kitchen-terminal-de.jpg"><img src="/img/kitchen-terminal-de.jpg" alt="grocy Terminal in der Küche" title="grocy Terminal in der Küche" class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
	</section>

	<hr>

	<section id="integration-and-customization" class="row align-items-center d-flex">
		<div class="col">
			<h3 class="bold d-inline-block sketch-underline">Integration und individuelle Anpassbarkeit</h3>
			<p class="lead major-info">Ein (RESTful) API für alles, siehe das <a href="https://demo.grocy.info/api" target="_blank">integrierte Swagger UI  (/api)</a></p>
			<p class="lead major-info">Feature flags um alles, was du nicht brauchst, ausschalten bzw. ausblenden zu können (z. B. Hausarbeiten, alles was zu zum Preis tracking gehört, etc.)</p>
			<p class="lead major-info"><a href="https://github.com/grocy/grocy#adding-your-own-css-or-js-without-to-have-to-modify-the-application-itself" target="_blank">Eigenes CSS and JS</a> um wirklich alles bis ins kleinste Detail anpassen zu können</p>
		</div>
	</section>

	<hr>

	<section id="more" class="row">
		<div class="col">
			<h2 class="bold d-inline-block sketch-underline">Und noch vieles mehr</h2>
			<p class="lead major-info">grocy wird ständig weiterentwickelt täglich von mir und vielen anderen benutzt.</p>
			<p class="lead major-info">Wenn dir etwas fehlt, erstelle gerne einfach einen <a href="https://github.com/grocy/grocy/issues/new?title=Feature%20Request%3A%20" target="_blank">Feature Request</a> auf GitHub - evtl. wird es innerhalb von Stunden umgesetzt, denn deine Ideen sind meine Motiviation. :)</p>
		</div>
	</section>

	<hr>

	<section id="say-thanks" class="row">
		<div class="col">
			<h2 class="bold d-inline-block sketch-underline">Sag Danke</h2>
			<p class="lead major-info">
				grocy ist ein tolles Projekt und ein Hobby, das ich liebe, allerdings ist es derzeit, neben kleineren Beiträgen, eine One-Man-Show, also ausschließlich in meiner Freizeit entstanden.
				Es ist meine Leidenschaft, großartige Software zu bauen.
			</p>
			<p class="lead major-info mb-0">
				Wenn du also Danke sagen möchtest, wäre meine erste Bitte, dies zu tun, indem du grocy noch besser machst - und das muss nicht Code sein - hier sind einige Ideen:
				<ul class="minor-info list-unstyled">
					<li>Fange an, an einem offenen Ticket zu arbeiten - siehe den <a href="https://github.com/grocy/grocy/issues" target="_blank">Issue Tracker</a></li>
					<li>Bringe neue Ideen ein, lass uns diese auf dem <a href="https://www.reddit.com/r/grocy/" target="_blank">Subreddit</a> oder über den <a href="https://github.com/grocy/grocy/issues" target="_blank">Issue Tracker</a> diskutieren</li>
					<li>Überdenke / verbessere aktuelle Funktionalität oder die Oberfläche</li>
					<li>Erstelle Dokumentation (die es leider aktuell quasi nicht gibt)</li>
					<li>Helfe bei der Übersetzung von grocy in deine Sprache, geht ganz einfach auf <a href="https://www.transifex.com/grocy/grocy" target="_blank">Transifex</a></li>
					<li>Erzähle anderen von grocy, oder schreibe einen Artikel darüber</li>
				</ul>
			</p>
			<p class="lead major-info mb-0">
				Wenn du dich dennoch bedanken willst, indem du mich auf ein Bier einlädst, kannst du das gerne tun, hier sind einige Möglichkeiten dafür:
				<ul class="minor-info list-unstyled">
					<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UPPXVE63EK3L2&source=https%3A%2F%2Fgrocy.info" target="_blank"><i class="fab fa-paypal"></i> PayPal</a></li>
				</ul>
			</p>
			<p class="lead major-info">
				Danke dir! <i class="fas fa-heart"></i>
			</p>
		</div>
	</section>

</div>
@stop
