@extends('layout')

@section('title', 'Grocy - ERP beyond your fridge')
@section('lang', 'en')

@section('headerAdditional')
<meta name="description"
	content="ERP beyond your fridge - Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion. Created by Bernd Bestel.">

<link rel="canonical"
	href="https://grocy.info">
<link rel="alternate"
	hreflang="de"
	href="https://grocy.info/de">

<script type="application/ld+json">
	{
	"@context": "http://schema.org/",
	"@type": "SoftwareApplication",
	"applicationCategory": "ERP",
	"screenshot": "https://grocy.info/img/screenshot.png?v={{ $version }}",
	"softwareVersion": "{{ $grocyVersionInfo->Version }}",
	"author": "https://berrnd.de",
	"dateCreated": "2017-04-15",
	"dateModified": "{{ $grocyVersionInfo->ReleaseDate }}",
	"isAccessibleForFree": "true",
	"keywords": "ERP",
	"license": "https://opensource.org/licenses/MIT",
	"description": "ERP beyond your fridge",
	"image": {
		"@type": "ImageObject",
		"contentUrl": "https://grocy.info/img/screenshot.png?v={{ $version }}"
	},
	"name": "Grocy",
	"sameAs": {
		"@type": "Thing",
		"mainEntityOfPage": "https://github.com/grocy/grocy"
	}
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
				data-toggle="dropdown"><i class="flag-icon flag-icon-us"></i> English</a>

			<div class="dropdown-menu">
				<a class="dropdown-item"
					href="https://grocy.info/de"><i class="flag-icon flag-icon-de"></i> German</a>
			</div>
		</li>
	</ul>
</div>
@stop

@section('content')
<header>
	<div class="jumbotron mb-1 py-5">
		<div class="container">
			<div class="row align-items-center d-flex">

				<div class="col-xs-12 col-lg-7">
					<h1 class="bold">ERP beyond your fridge</h1>
					<p class="lead grandmajor-info">Grocy is a web-based self-hosted groceries & household management solution for your home.</p>
					<p class="lead major-info">Open Source. Built with passion.</p>
					<p class="mb-2">
						<a class="btn btn-primary btn-lg"
							href="https://releases.grocy.info/latest"
							target="_blank"><i class="fa-solid fa-download"></i> Download</a>
						<a class="btn btn-success btn-lg"
							href="https://en.demo.grocy.info"
							target="_blank"><i class="fa-solid fa-eye"></i> Demo</a>
					</p>
					<p class="mb-1">
						<a class="btn btn-secondary btn-sm"
							href="/changelog"><i class="fa-solid fa-right-left"></i> Changelog</a>
						<a class="btn btn-secondary btn-sm"
							href="https://github.com/grocy/grocy#how-to-install"
							target="_blank"><i class="fa-solid fa-info"></i> Install guide</a>
						<a class="btn btn-secondary btn-sm"
							href="https://github.com/grocy/grocy"
							target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
					</p>
					<p class="font-weight-light font-italic grandminor-info pt-1">
						Current version: {{ $grocyVersionInfo->Version }} (released on {{ date('m/d/Y', strtotime($grocyVersionInfo->ReleaseDate)) }})
					</p>
				</div>

				<div class="col-xs-12 col-lg-5 mt-3 mt-lg-0">
					<a class="lightbox"
						href="/img/stock-en.png?v={{ $version }}"><img src="/img/__thumbs/stock-en.png?v={{ $version }}"
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

					<div id="Grocy Desktop"
						class="carousel-item active">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h1 class="bold">Grocy Desktop</h1>
								<p class="lead major-info">Run Grocy without having to manage a webserver, just like a normal (Windows) desktop application.</p>
								<p class="mb-2">
									<a class="btn btn-primary"
										href="https://releases.grocy.info/latest-desktop"
										target="_blank"><i class="fa-solid fa-download"></i> Download <span class="small">(classic installer)</span></a>
									or
									<a href="https://www.microsoft.com/store/apps/9nwb1trnnksf?cid=storebadge&ocid=badge"
										target="_blank">
										<img src="/img/__thumbs/microsoft-store-badge-en.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Desktop on the Microsoft Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/grocy/grocy-desktop"
										target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
								</p>
							</div>

							<div class="col-xs-12 col-lg-6">
								<a class="lightbox"
									href="/img/grocy-desktop-en.png?v={{ $version }}"><img src="/img/__thumbs/grocy-desktop-en.png?v={{ $version }}"
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
								<h1 class="bold">Grocy Android</h1>
								<p class="lead major-info">Grocy on your smartphone - with barcode scanning and batch processing.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=xyz.zedler.patrick.grocy"
										target="_blank">
										<img src="/img/__thumbs/play-store-badge-en.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Android on Google Play">
									</a>
									<a href="https://f-droid.org/de/packages/xyz.zedler.patrick.grocy/"
										target="_blank">
										<img src="/img/__thumbs/fdroid-badge.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Android on F-Droid">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/patzly/grocy-android"
										target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
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
								<h1 class="bold">Grocy Mobile</h1>
								<p class="lead major-info">Native interface for Grocy on Apple devices (iOS, macOS).</p>
								<p class="mb-2">
									<a href="https://apps.apple.com/app/grocy-mobile/id1567803209"
										target="_blank">
										<img src="/img/__thumbs/app-store-badge-en.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Mobile on the App Store">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/supergeorg/Grocy-SwiftUI"
										target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
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
								<h1 class="bold">Barcode Buddy</h1>
								<p class="lead major-info">A barcode scanning helper / lookup tool for Grocy.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=de.bulling.barcodebuddyscanner"
										target="_blank">
										<img src="/img/__thumbs/play-store-badge-en.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Barcode Buddy on Google Play">
									</a>
								</p>
								<p>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/Forceu/barcodebuddy"
										target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
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
								<h1 class="bold">Home Assistant Add-on</h1>
								<p class="lead major-info">Use Grocy fully integrated into Home Assistant.</p>
								<p class="mb-2">
									<a class="btn btn-sm btn-secondary"
										href="https://community.home-assistant.io/t/community-hass-io-add-on-grocy/112422"
										target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Home Assistant Community Forum Thread</a>
									<a class="btn btn-sm btn-secondary"
										href="https://github.com/hassio-addons/addon-grocy/blob/master/grocy/DOCS.md"
										target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Documentation</a>
									<a class="btn btn-sm btn-secondary mt-1"
										href="https://github.com/hassio-addons/addon-grocy"
										target="_blank"><i class="fa-brands fa-github"></i> Source on GitHub</a>
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
			<h2 class="bold d-inline-block sketch-underline">Getting in touch</h2>
			<p class="lead major-info">
				Connect with other Grocy users via the subreddit or report something that does not work / new ideas in the GitHub issue tracker.
			</p>
			<p class="lead major-info">
				<a class="btn btn-danger"
					href="https://www.reddit.com/r/grocy"
					target="_blank"><i class="fa-brands fa-reddit"></i> r/grocy</a>
				<a class="btn btn-dark"
					href="https://github.com/grocy/grocy/issues"
					target="_blank"><i class="fa-brands fa-github"></i> grocy/grocy</a>
			</p>
		</div>
		<div id="addons-intro"
			class="col-xs-12 col-lg-6">
			<h2 class="bold d-inline-block sketch-underline">Add-ons / Tools / Guides</h2>
			<p class="lead major-info">
				Community contributed tools, integrations, install/troubleshooting guides and other useful Add-ons to make Grocy even better and more productive.
			</p>
			<p class="lead major-info">
				<a class="btn btn-info"
					href="https://grocy.info/addons"><i class="fa-solid fa-puzzle-piece"></i> Community contributed Add-ons and other tools</a>
				<a class="btn btn-info mt-2"
					href="https://grocy.info/links"><i class="fa-solid fa-list"></i> Community contributed help and other guides</a>
			</p>
		</div>
	</section>

	<hr>

	<section id="purchase-form"
		class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox"
				href="/img/purchase-en.png?v={{ $version }}"><img src="/img/__thumbs/purchase-en.png?v={{ $version }}"
					alt="Grocy purchase tracking form"
					title="Grocy purchase tracking form"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Track your purchases</h3>
			<p class="lead major-info">A barcode reader ready interface makes this a easy and quick task and you always know what you currently have at home.</p>
			<p class="lead major-info">
				It's also possible to scan barcodes directly in the web browser using the device camera (<a href="https://www.youtube.com/watch?v=Y5YH6IJFnfc"
					target="_blank"><i class="fa-brands fa-youtube"></i> Quick video demo</a>).
			</p>
		</div>
		<div class="col">
			<a class="lightbox"
				href="/img/browser-barcode-scanning.png?v={{ $version }}"><img src="/img/__thumbs/browser-barcode-scanning.png?v={{ $version }}"
					alt="Grocy browser barcode scanning"
					title="Grocy browser barcode scanning"
					class="feature-image img-fluid"></a>
		</div>
	</section>

	<hr>

	<section id="shopping-list"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/shoppinglist-en.png?v={{ $version }}"><img src="/img/__thumbs/shoppinglist-en.png?v={{ $version }}"
					alt="Grocy shopping list"
					title="Grocy shopping list"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Automate & optimize your shopping list</h3>
			<p class="lead major-info">Define minimum stock amounts of your loved products and never think about "do I need noodles or are there enough at home?".</p>
			<p class="lead major-info">Group products by assortments to optimize your way in the supermarket - never jump from one end to the other again and again.</p>
		</div>
	</section>

	<hr>

	<section id="products"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/products-en.png?v={{ $version }}"><img src="/img/__thumbs/products-en.png?v={{ $version }}"
					alt="Grocy stock overview"
					title="Grocy stock overview"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Waste less</h3>
			<p class="lead major-info">Always know what's due next.</p>
		</div>
	</section>

	<hr>

	<section id="input-productivity"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/dateinput-en.gif?v={{ $version }}"><img src="/img/__thumbs/dateinput-en.gif?v={{ $version }}"
					alt="Grocy input productivity"
					title="Grocy input productivity"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Input forms made for productivity</h3>
			<p class="lead major-info">One hand, 3 seconds, no problem - errors impossible.</p>
		</div>
	</section>

	<hr>

	<section id="recipes"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/recipes-en.png?v={{ $version }}"><img src="/img/__thumbs/recipes-en.png?v={{ $version }}"
					alt="Grocy recipes list"
					title="Grocy recipes list"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Recipes with intelligence</h3>
			<p class="lead major-info">Maintain your recipes and see at a glance whether everything you need is in stock at home. Of course, everything that is not available can also be automatically added to the shopping list.</p>
		</div>
	</section>

	<hr>

	<section id="recipe-details"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/recipedetail-en.png?v={{ $version }}"><img src="/img/__thumbs/recipedetail-en.png?v={{ $version }}"
					alt="Grocy recipe detail"
					title="Grocy recipe detail"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Cookbook is so 2016</h3>
			<p class="lead major-info">Recipes clear and concise.</p>
		</div>
	</section>

	<hr>

	<section id="meal-planning"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/mealplan-en.png?v={{ $version }}"><img src="/img/__thumbs/mealplan-en.png?v={{ $version }}"
					alt="Grocy meal planning"
					title="Grocy meal planning"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Meal planning like a Pro</h3>
			<p class="lead major-info">Plan your daily meals based on your recipes and put everything needed and not at home with one click on the shopping list.</p>
		</div>
	</section>

	<hr>

	<section id="equipment"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/equipment-en.png?v={{ $version }}"><img src="/img/__thumbs/equipment-en.png?v={{ $version }}"
					alt="Grocy equipment overview"
					title="Grocy equipment overview"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Manage your household equipment/devices</h3>
			<p class="lead major-info">Keep all the instruction manuals and important information about your devices in one place to have them at hand when needed.</p>
		</div>
	</section>

	<hr>

	<section id="chores"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/chores-en.png?v={{ $version }}"><img src="/img/__thumbs/chores-en.png?v={{ $version }}"
					alt="Grocy household chores overview"
					title="Grocy household chores overview"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Track your household chores</h3>
			<p class="lead major-info">Think less about "oh, when have I done last..." and stay organized easier.</p>
		</div>
	</section>

	<hr>

	<section id="tasks"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/tasks-en.png?v={{ $version }}"><img src="/img/__thumbs/tasks-en.png?v={{ $version }}"
					alt="Grocy tasks overview"
					title="Grocy tasks overview"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Keep track of your tasks</h3>
			<p class="lead major-info">Just another to do list.<br>How I (and maybe also you) like it.</p>
		</div>
	</section>

	<hr>

	<section id="batteries"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/batteries-en.png?v={{ $version }}"><img src="/img/__thumbs/batteries-en.png?v={{ $version }}"
					alt="Grocy batteries overview"
					title="Grocy batteries overview"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Manage your batteries</h3>
			<p class="lead major-info">Nowadays we have countless batteries in our home. Keep them in a good shape by knowing when you charged them last.</p>
		</div>
	</section>

	<hr>

	<section id="user-defined-fields"
		class="row align-items-center d-flex flex-row-reverse">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/userfields-en.png?v={{ $version }}"><img src="/img/__thumbs/userfields-en.png?v={{ $version }}"
					alt="Grocy user defined fields/objects/lists"
					title="Grocy user defined fields/objects/lists"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Custom fields/objects/lists</h3>
			<p class="lead major-info">To any entity (like products or chores) any custom fields can be attached. Ultimately, you can create completely own objects/lists to keep track of everything in one place.</p>
		</div>
	</section>

	<hr>

	<section id="night-mode"
		class="row align-items-center d-flex">
		<div class="col-xs-12 col-lg-6">
			<a class="lightbox"
				href="/img/nightmode-en.png?v={{ $version }}"><img src="/img/__thumbs/nightmode-en.png?v={{ $version }}"
					alt="Grocy in night mode"
					title="Grocy in night mode"
					class="feature-image img-fluid mt-1"></a>
		</div>
		<div class="col pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Night mode (of course)</h3>
			<p class="lead major-info">Night mode is automatically used when your device prefers that by default and can be alternatively also activated automatically when the sun sets (configurable time range).</p>
		</div>
	</section>

	<hr>

	<section id="devices"
		class="row align-items-center d-flex">
		<div class="col">
			<a class="lightbox"
				href="/img/smartphone-shopping-list-en.jpg?v={{ $version }}"><img src="/img/__thumbs/smartphone-shopping-list-en.jpg?v={{ $version }}"
					alt="Grocy shopping list on a smartphone"
					title="Grocy shopping list on a smartphone"
					class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-md-0">
			<h3 class="bold d-inline-block sketch-underline">Made for every device</h3>
			<p class="lead major-info">Whether on a smartphone or any other device, only a browser is needed - e.g. install any low-cost-low-power device in your kitchen and you have a very comfortable 24/7 Grocy terminal.</p>
		</div>
		<div class="col">
			<a class="lightbox"
				href="/img/kitchen-terminal-en.jpg?v={{ $version }}"><img src="/img/__thumbs/kitchen-terminal-en.jpg?v={{ $version }}"
					alt="Grocy terminal in the kitchen"
					title="Grocy terminal in the kitchen"
					class="feature-image feature-image-small img-fluid mt-1"></a>
		</div>
	</section>

	<hr>

	<section id="integration-and-customization"
		class="row align-items-center d-flex">
		<div class="col">
			<h3 class="bold d-inline-block sketch-underline">Integration and customization</h3>
			<p class="lead major-info">A (RESTful) API for everything, see the <a href="https://demo.grocy.info/api"
					target="_blank">integrated Swagger UI on /api</a>.</p>
			<p class="lead major-info">Feature flags to disable/hide things you don't need (e.g. hide chores, everything related to price tracking, etc.).</p>
			<p class="lead major-info"><a href="https://github.com/grocy/grocy#adding-your-own-css-or-js-without-to-have-to-modify-the-application-itself"
					target="_blank">Custom CSS and JS</a> to ultimately customize everything down to the smallest detail.</p>
		</div>
	</section>

	<hr>

	<section id="more"
		class="row">
		<div class="col">
			<h2 class="bold d-inline-block sketch-underline">And so much more</h2>
			<p class="lead major-info">Grocy is constantly evolving and daily used by me and many others.</p>
			<p class="lead major-info">When you miss something, feel free to <a href="https://github.com/grocy/grocy/issues/new?labels=enhancement&template=feature-request.md&title=Feature+Request%3A+"
					target="_blank">open a feature request</a> on GitHub - maybe it will be added within hours, because your ideas are my motivation. :)</p>
		</div>
	</section>

	<hr>

	<section id="say-thanks"
		class="row">
		<div class="col">
			<h2 class="bold d-inline-block sketch-underline">Say thanks</h2>
			<p class="lead major-info">
				Grocy is one of my hobbies and I enjoy working on it. But since it is a hobby, development depends on (my) free time and desire - means it can sometimes take a while.
			</p>
			<p class="lead major-info mb-0">
				So contributing to the project would be the thing which helps Grocy most.
			</p>
			<p class="lead minor-info">
				This doesn't have to be code - creating documentation / tutorials for Grocy, helping translate Grocy into your language (can be done on <a href="https://www.transifex.com/grocy/grocy"
					target="_blank">Transifex</a>) or helping spread the word (e.g. by writing an article about it) is just as helpful.
			</p>
			<p class="lead major-info mb-0">
				If you still want to say thanks by inviting me for a coffee, a beer or a pizza instead, you're welcome to do so - here are some options:
			<ul class="major-info list-unstyled">
				<li class="my-2">
					<a href="https://www.paypal.com/donate/?hosted_button_id=VPYJD5SL488PS"
						target="_blank"><i class="fa-brands fa-paypal"></i> PayPal</a>
				</li>
			</ul>
			</p>
			<p class="lead major-info">
				Thank you! <i class="fa-solid fa-heart"></i>
			</p>
		</div>
	</section>

</div>
@stop
