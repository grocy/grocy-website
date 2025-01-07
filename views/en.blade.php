@extends('layout')

@section('title', 'Grocy - ERP beyond your fridge')
@section('lang', 'en')

@section('headerAdditional')
<meta name="description"
	content="Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion. Created by Bernd Bestel.">

<link rel="canonical"
	href="https://grocy.info">
<link rel="alternate"
	hreflang="de"
	href="https://grocy.info/de">

<meta property="og:type"
	content="website">
<meta property="og:title"
	content="@yield('title')">
<meta property="og:description"
	content="Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.">
<meta property="og:site_name"
	content="Grocy">
<meta property="og:image"
	content="https://grocy.info/img/screenshot.png?v={{ $version }}">

<meta name="twitter:card"
	content="summary">
<meta name="twitter:title"
	content="@yield('title')">
<meta name="twitter:description"
	content="Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.">
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
			"@id": "https://grocy.info/",
			"url": "https://grocy.info/",
			"name": "Grocy - ERP beyond your fridge",
			"description": "Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.",
			"inLanguage": "en",
			"isPartOf": {
				"@id": "https://grocy.info/#/schema/WebSite"
			},
			"breadcrumb": {
				"@type": "BreadcrumbList",
				"@id": "https://grocy.info/#/schema/BreadcrumbList",
				"itemListElement": {
					"@type": "ListItem",
					"position": 1,
					"name": "Grocy"
				}
			},
			"about": {
				"@type": "SoftwareApplication",
				"@id": "https://grocy.info/#/schema/Organization",
				"name": "Grocy",
				"description": "Grocy is a web-based self-hosted groceries & household management solution for your home. Open Source. Built with passion.",
				"applicationCategory": "ERP",
				"screenshot": "https://grocy.info/img/screenshot.png?v={{ $version }}",
				"inLanguage": "en",
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
				data-toggle="dropdown"><i class="fi fi-us"></i> English</a>

			<div class="dropdown-menu">
				<a class="dropdown-item"
					href="/de"><i class="fi fi-de"></i> German</a>
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
					<h1>ERP beyond your fridge</h1>
					<p class="lead fs-1 mb-2">Grocy is a web-based self-hosted groceries & household management solution for your home.</p>
					<p class="lead fs-2">Open Source. Built with passion.</p>
					<p class="mb-2">
						<a class="btn btn-primary btn-lg"
							href="https://releases.grocy.info/latest"
							target="_blank"><i class="fas fa-download"></i> Download</a>
						<a class="btn btn-success btn-lg"
							href="https://en.demo.grocy.info"
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

					<div id="grocy-desktop"
						class="carousel-item active">
						<div class="row align-items-center d-flex">
							<div class="col-xs-12 col-lg-6">
								<h1>Grocy Desktop</h1>
								<p class="lead fs-2">Run Grocy without having to manage a webserver, just like a normal (Windows) desktop application.</p>
								<p class="mb-2">
									<a class="btn btn-primary"
										href="https://releases.grocy.info/latest-desktop"
										target="_blank"><i class="fas fa-download"></i> Download <span class="small">(classic installer)</span></a>
									or
									<a href="https://apps.microsoft.com/detail/9NWB1TRNNKSF?launch=true&mode=full&hl=en-us&gl=US"
										target="_blank">
										<img src="/img/badges/microsoft-store-badge-en.svg?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Desktop on the Microsoft Store">
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
								<h1>Grocy Android</h1>
								<p class="lead fs-2">Grocy on your smartphone - with barcode scanning and batch processing.</p>
								<p class="mb-2">
									<a href="https://play.google.com/store/apps/details?id=xyz.zedler.patrick.grocy&hl=en"
										target="_blank">
										<img src="/img/badges/google-play-badge-en.png?v={{ $version }}"
											class="img-fluid w-25"
											alt="Grocy Android on Google Play">
									</a>
									<a href="https://f-droid.org/de/packages/xyz.zedler.patrick.grocy/"
										target="_blank">
										<img src="/img/badges/f-droid-badge-en.svg?v={{ $version }}"
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
									<a href="https://apps.apple.com/us/app/id1567803209"
										target="_blank">
										<img src="/img/badges/app-store-badge-en.svg?v={{ $version }}"
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
									<a href="https://play.google.com/store/apps/details?id=de.bulling.barcodebuddyscanner&hl=en"
										target="_blank">
										<img src="/img/badges/google-play-badge-en.png?v={{ $version }}"
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
			<h2>Getting in touch</h2>
			<p class="lead fs-2">
				Connect with other Grocy users on Reddit or report something that does not work / new ideas on the GitHub issue tracker.
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
				Community contributed tools, integrations, install/troubleshooting guides and other useful Add-ons to make Grocy even better and more productive.
			</p>
			<p class="lead fs-2">
				<a class="btn btn-info mb-2 mb-sm-0"
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
				href="/img/purchase-en.png?v={{ $version }}"><img src="/img/__thumbs/purchase-en.png?v={{ $version }}"
					alt="Grocy purchase tracking form"
					title="Grocy purchase tracking form"
					class="feature-image img-fluid"></a>
		</div>
		<div class="col-xs-12 col-lg-5 pt-4 pt-lg-0">
			<h3>Track your purchases</h3>
			<p class="lead fs-2">A barcode reader ready interface makes this a easy and quick task and you always know what you currently have at home.</p>
			<p class="lead fs-2">
				It's also possible to scan barcodes directly in the web browser using the device camera (<i class="fab fa-youtube"></i> <a href="https://www.youtube.com/watch?v=Y5YH6IJFnfc"
					target="_blank">Quick video demo</a>).
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
		<div class="col pt-4 pt-lg-0">
			<h3>Automate & optimize your shopping list</h3>
			<p class="lead fs-2">Define minimum stock amounts of your loved products and never think about "do I need noodles or are there enough at home?".</p>
			<p class="lead fs-2">Group products by assortments to optimize your way in the supermarket - never jump from one end to the other again and again.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Waste less</h3>
			<p class="lead fs-2">Always know what's due next.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Input forms made for productivity</h3>
			<p class="lead fs-2">One hand, 3 seconds, no problem - errors impossible.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Recipes with intelligence</h3>
			<p class="lead fs-2">Maintain your recipes and see at a glance whether everything you need is in stock at home. Of course, everything that is not available can also be automatically added to the shopping list.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Cookbook is so 2016</h3>
			<p class="lead fs-2">Recipes clear and concise.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Meal planning like a Pro</h3>
			<p class="lead fs-2">Plan your daily meals based on your recipes and put everything needed and not at home with one click on the shopping list.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Manage your household equipment/devices</h3>
			<p class="lead fs-2">Keep all the instruction manuals and important information about your devices in one place to have them at hand when needed.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Track your household chores</h3>
			<p class="lead fs-2">Think less about "oh, when have I done last..." and stay organized easier.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Keep track of your tasks</h3>
			<p class="lead fs-2">Just another to do list.<br>How I (and maybe also you) like it.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Manage your batteries</h3>
			<p class="lead fs-2">Nowadays we have countless batteries in our home. Keep them in a good shape by knowing when you charged them last.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Custom fields/objects/lists</h3>
			<p class="lead fs-2">To any entity (like products or chores) any custom fields can be attached. Ultimately, you can create completely own objects/lists to keep track of everything in one place.</p>
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
		<div class="col pt-4 pt-lg-0">
			<h3>Night mode</h3>
			<p class="lead fs-2">Night mode is automatically used when your device prefers that by default and can be alternatively also activated automatically when the sun sets (configurable time range).</p>
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
		<div class="col-xs-12 col-lg-5 pt-4 pt-lg-0">
			<h3>Made for every device</h3>
			<p class="lead fs-2">Whether on a smartphone or any other device, only a Browser is needed - e.g. install any low-cost-low-power device in your kitchen and you have a very comfortable 24/7 Grocy terminal.</p>
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
			<h3>Integration and customization</h3>
			<p class="lead fs-2">A (RESTful) API for everything, see the <a href="https://demo.grocy.info/api"
					target="_blank">integrated Swagger UI on /api</a>.</p>
			<p class="lead fs-2">Feature Flags to disable/hide things you don't need (e.g. hide chores, everything related to price tracking, etc.).</p>
			<p class="lead fs-2"><a href="https://github.com/grocy/grocy#adding-your-own-css-or-js-without-to-have-to-modify-the-application-itself"
					target="_blank">Custom CSS and JS</a> to ultimately customize everything down to the smallest detail while maintaining updateability.</p>
		</div>
	</section>

	<hr class="small">

	<section id="more"
		class="row">
		<div class="col">
			<h2>And so much more</h2>
			<p class="lead fs-2">Grocy is constantly evolving and daily used by me and many others.</p>
			<p class="lead fs-2">When you miss something, feel free to <a href="https://github.com/grocy/grocy/issues/new?labels=enhancement&template=feature-request.md&title=Feature+Request%3A+"
					target="_blank">open a Feature Request</a> on GitHub - maybe it'll be added within hours, because your ideas are my motivation. 😄</p>
		</div>
	</section>

	<hr class="small">

	<section id="say-thanks"
		class="row">
		<div class="col">
			<h2>Say thanks</h2>
			<p class="lead fs-2">
				Grocy is one of my hobbies and I enjoy working on it. But since it's a hobby, development depends on (my) free time and desire - means it can sometimes take a while.
			</p>
			<p class="lead fs-2 mb-0">
				So contributing to the project would be the thing which helps Grocy most.
			</p>
			<p class="lead fs-3">
				This doesn't have to be code - creating documentation / tutorials for Grocy, helping translate Grocy into your language (can be done on <a href="https://www.transifex.com/grocy/grocy"
					target="_blank">Transifex</a>) or helping spread the word (e.g. by writing an article about it) is just as helpful.
			</p>
			<p class="lead fs-2 mb-0">
				If you still want to say thanks by inviting me for a coffee, a beer or a pizza instead, you're welcome to do so - here are some options:
			<ul class="fs-2 list-unstyled">
				<li class="my-2">
					<a class="btn btn-primary"
						href="https://www.paypal.com/donate/?hosted_button_id=VPYJD5SL488PS"
						target="_blank"
						rel="nofollow">
						<i class="fab fa-paypal"></i> PayPal
					</a>
				</li>
			</ul>
			</p>
			<p class="lead fs-2">
				Thank you! <i class="fas fa-heart"></i>
			</p>
		</div>
	</section>

</div>
@stop
