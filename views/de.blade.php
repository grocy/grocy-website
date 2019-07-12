@extends('layout')

@section('title', 'grocy - ERP beyond your fridge')
@section('lang', 'de')

@section('headerAdditional')
<meta name="description" content="ERP für deinen Kühlschrank - eine selbst gehostete Lösung zur Lebensmittel- und Haushaltsverwaltung. Created by Bernd Bestel.">

<link rel="canonical" href="https://grocy.info/de">
<link rel="alternate" hreflang="en" href="https://grocy.info">
@stop

@section('navAdditional')
<div class="collapse navbar-collapse" id="languageNavbar">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="https://grocy.info">This page is also available in English</a>
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
					<p>
						<a class="btn btn-primary btn-lg" href="https://releases.grocy.info/latest" target="_blank">Download</a>
						<a class="btn btn-success btn-lg" href="https://demo-de.grocy.info" target="_blank">Demo</a>
					</p>
					<p>
						<a class="btn btn-secondary btn-sm" href="/changelog"><i class="fas fa-exchange-alt"></i> Changelog</a>
						<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
					</p>
					<p class="font-weight-light font-italic grandminor-info mb-lg-0">
						Ein Webserver mit PHP 7.2 und der SQLite (PDO) Erweiterung ist erforderlich.<br>
						Aktuell übersetzt in: Englisch, Deutsch, Französisch, Norwegisch, Italienisch, Spanisch und Türkisch
					</p>
				</div>

				<div class="col-xs-12 col-lg-5">
					<a class="lightbox" href="/img/stock-de.png"><img src="/img/stock-de.png" alt="grocy Dashboard" title="grocy Dashboard" class="feature-image img-fluid"></a>
				</div>

			</div>
		</div>
	</div>

	<div id="grocy-desktop" class="container alert alert-dark my-2 rounded-0">
		<div class="row align-items-center d-flex">

			<div class="col-xs-12 col-lg-6">
				<h1 class="bold">grocy-desktop</h1>
				<p class="lead major-info">Benutze grocy, ohne einen Webserver verwalten zu müssen - wie eine normale (Windows) Desktop-Anwendung.</p>
				<p>
					<a class="btn btn-primary" href="https://releases.grocy.info/latest-desktop" target="_blank">Download <span class="small">(klassische Installation)</span></a>
					oder
					<a href="https://www.microsoft.com/store/apps/9nwb1trnnksf?cid=storebadge&ocid=badge" target="_blank">
						<img src="/img/microsoft-store-badge.png" class="img-fluid w-25" alt="grocy-desktop im Microsoft Store">
					</a>
				</p>
				<p>
					<a class="btn btn-secondary" href="https://github.com/grocy/grocy-desktop" target="_blank"><i class="fab fa-github"></i> Source on GitHub</a>
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
</header>

<div class="container mt-5">

	<section id="getting-in-touch" class="row">
		<div class="col">
			<h2 class="bold sketch-underline">Mach mit / Kontakt</h2>
			<p class="lead major-info">
				Unterhalte dich mit anderen grocy Benutzern im subreddit oder melde Fehler / schlage neue Ideen im Issue Tracker auf GitHub vor.
			</p>
			<p class="lead major-info">
				<a class="btn btn-danger" href="https://www.reddit.com/r/grocy" target="_blank"><i class="fab fa-reddit"></i> r/grocy</a>
				<a class="btn btn-dark" href="https://github.com/grocy/grocy" target="_blank"><i class="fab fa-github"></i> grocy/grocy</a>
			</p>
		</div>
	</section>

	<section class="row">
		<div id="getting-in-touch" class="col-xs-12 col-lg-6">
			<h2 class="bold sketch-underline">Mach mit / Kontakt</h2>
			<p class="lead major-info">
				Unterhalte dich mit anderen grocy Benutzern im subreddit oder melde Fehler / schlage neue Ideen im Issue Tracker auf GitHub vor.
			</p>
			<p class="lead major-info">
				<a class="btn btn-danger" href="https://www.reddit.com/r/grocy" target="_blank"><i class="fab fa-reddit"></i> r/grocy</a>
				<a class="btn btn-dark" href="https://github.com/grocy/grocy" target="_blank"><i class="fab fa-github"></i> grocy/grocy</a>
			</p>
		</div>
		<div id="addons-intro" class="col-xs-12 col-lg-6">
			<h2 class="bold sketch-underline">Add-ons / Tools</h2>
			<p class="lead major-info">
				Siehe unten für weitere von der Community beigesteuerte Tools, Integrationen und andere nützliche Helferlein, die grocy noch besser und produktiver machen.
			</p>
			<p class="lead major-info">
				<a class="btn btn-info" href="#addons">Community contributions</a>
			</p>
		</div>
	</section>

	<hr>

	<section id="purchase-form" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/purchase-de.png"><img src="/img/purchase-de.png" alt="grocy Einkaufs-Erfassungsformular" title="grocy Einkaufs-Erfassungsformular" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Einkäufe erfassen</h3>
			<p class="lead major-info">Eine für Barcodescanner vorbereitete Oberfläche macht es einfach, Einkäufe einfach und vor allem schnell zu erfassen. Damit weißt du immer, was gerade Zuhause vorrätig ist.</p>
		</div>
	</section>

	<hr>

	<section id="shopping-list" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/shoppinglist-de.png"><img src="/img/shoppinglist-de.png" alt="grocy Einkausfzettel" title="grocy Einkausfzettel" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Automatisiere & Optimiere deinen Einkaufszettel</h3>
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
			<h3 class="bold sketch-underline">Wirf weniger weg</h3>
			<p class="lead major-info">Behalte immer im Überblick, was als nächstes abläuft.</p>
		</div>
	</section>

	<hr>

	<section id="input-productivity" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/dateinput-de.gif"><img src="/img/dateinput-de.gif" alt="grocy Eingabeformular" title="grocy Eingabeformular" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Durchdachte Eingeformulare</h3>
			<p class="lead major-info">Eine Hand, 3 Sekunden, kein Problem - Eingabefehler ausgeschlossen.</p>
		</div>
	</section>

	<hr>

	<section id="recipes" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/recipes-de.png"><img src="/img/recipes-de.png" alt="grocy Rezeptliste" title="grocy Rezeptliste" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Rezepte mit Intelligenz</h3>
			<p class="lead major-info">Pflege deine Rezepte und sehe auf einen Blick, ob alles Benötigte Zuhause vorrätig ist. Natürlich kann alles nicht vorhandene auch automatisch auf den Einkaufszettel übernommen werden.</p>
		</div>
	</section>
	
	<hr>
	
	<section id="recipe-details" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/recipedetail-de.png"><img src="/img/recipedetail-de.png" alt="grocy Rezeptansicht" title="grocy Rezeptansicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Kochbuch ist so 2016</h3>
			<p class="lead major-info">Rezepte übersichtlich und klar.</p>
		</div>
	</section>

	<hr>

	<section id="equipment" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/equipment-de.png"><img src="/img/equipment-de.png" alt="grocy Ausstattungsübersicht" title="grocy Ausstattungsübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Verwalte deine Haushaltsgeräte/-Ausstattung</h3>
			<p class="lead major-info">Habe Bedienungsanleitungen und wichtige Informationen zur Hand, wenn sie benötigt werden - nie mehr vergeblich suchen.</p>
		</div>
	</section>
	
	<hr>

	<section id="chores" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/chores-de.png"><img src="/img/chores-de.png" alt="grocy Hausarbeitenübersicht" title="grocy Hausarbeitenübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Erfasse deine Hausarbeiten</h3>
			<p class="lead major-info">Mache dir keinen Kopf mehr über "oh, wann hab ich zuletzt ... gemacht?", schaue einfach nach.</p>
		</div>
	</section>

	<hr>

	<section id="tasks" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/tasks-de.png"><img src="/img/tasks-de.png" alt="grocy Aufgabenübersicht" title="grocy Aufgabenübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Behalte den Überblick über deine Aufgaben</h3>
			<p class="lead major-info">Nur eine ganz normale To-Do Liste.<br>So wie ich sowas (und evtl. auch du) mag.</p>
		</div>
	</section>

	<hr>

	<section id="batteries" class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/batteries-de.png"><img src="/img/batteries-de.png" alt="grocy Batterieübersicht" title="grocy Batterieübersicht" class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Verwalte deine Akkus</h3>
			<p class="lead major-info">Benutze aufladbare Batterien für alles im Haushalt und halte sie fit, weil du weißt, wo welcher Akku gerade im Einsatz ist und wann und wie oft er zuletzt aufgeladen wurde.</p>
		</div>
	</section>

	<hr>

	<section id="night-mode" class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox" href="/img/nightmode-de.png"><img src="/img/nightmode-de.png" alt="grocy im Night-Mode" title="grocy im Night-Mode" class="feature-image img-fluid mt-1"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Night-Mode inklusive</h3>
			<p class="lead major-info">Weil wir alle auch manchmal eine dunkle Seite haben, oder weil das für die Nacht einfach augenschonender und angenehmer ist. Natürlich kann der Nachtmodus auch automatisch bei Sonnenuntergang aktiviert werden (konfigurierbarer Zeitbereich).</p>
		</div>
	</section>

	<hr>

	<section id="devices" class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox" href="/img/smartphone-shopping-list-de.jpg"><img src="/img/smartphone-shopping-list-de.jpg" alt="grocy Einkaufszettel auf einem Smartphone" title="grocy Einkaufszettel auf einem Smartphone" class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-md-0">
			<h3 class="bold sketch-underline">Läuft auf jedem Gerät</h3>
			<p class="lead major-info">Egal ob auf dem Smartphone oder jedem anderem Gerät, nur ein Browser wird benötigt - baue dir z. B. ein günstiges und sparsames Tablet in die Küche und du hast ein super komfortables 24/7 grocy Terminal.</p>
		</div>
		<div class="col">
			<a class="lightbox" href="/img/kitchen-terminal-de.jpg"><img src="/img/kitchen-terminal-de.jpg" alt="grocy Terminal in der Küche" title="grocy Terminal in der Küche" class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
	</section>

	<hr>

	<section id="addons" class="row">
		<div class="col">
			<h2 class="bold sketch-underline">Community contributions</h2>
			<p class="lead major-info">
				<h6 class="mb-0">addon-grocy</h6>
				grocy community Hass.io Add-on for Home Assistant<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/hassio-addons/addon-grocy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>
			<p class="lead major-info">
				<h6 class="mb-0">Barcode Buddy for grocy</h6>
				A barcode scanning helper / lookup tool for grocy<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/Forceu/barcodebuddy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>
			<p class="lead major-info">
				<h6 class="mb-0">grocy-pyscanner</h6>
				A python based barcode scanning helper<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy-pyscanner" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>
		</div>
	</section>

	<hr>

	<section id="more" class="row">
		<div class="col">
			<h2 class="bold sketch-underline">Und noch vieles mehr</h2>
			<p class="lead major-info">grocy wird ständig weiterentwickelt täglich von mir und vielen anderen benutzt.</p>
			<p class="lead major-info">Wenn dir etwas fehlt, erstelle gerne einfach einen <a href="https://github.com/grocy/grocy/issues/new?title=Feature%20Request%3A%20" target="_blank">Feature Request</a> auf GitHub - evtl. wird es innerhalb von Stunden umgesetzt, denn deine Ideen sind meine Motiviation. :)</p>
		</div>
	</section>

</div>
@stop
