@extends('layout')

@section('title', 'Add-ons | grocy')
@section('lang', 'en')

@section('headerAdditional')
<link rel="canonical" href="https://grocy.info/addons">
@stop

@section('content')
<header class="container pt-3 pb-3">
	<div class="row align-items-center">

		<div class="col">
			<h1 class="bold d-inline-block sketch-underline">Add-ons</h1>
			<h5 class="text-muted pt-3">A list of community contributed add-ons, integrations and other tools for grocy</h5>
		</div>

	</div>
</header>

<div class="container pb-3">
	<div class="row align-items-center">

		<div class="col-xs-12 col-lg-10 offset-lg-1">

			<p>
				<h5>grocy-docker</h5>
				ERP beyond your fridge - now containerized<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy-docker" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>linuxserver/docker-grocy (LinuxServer.io)</h5>
				A container for grocy - the ERP application for your kitchen<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/linuxserver/docker-grocy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>k8s-grocy</h5>
				Run grocy on a Kubernetes Cluster<br>
				<a class="btn btn-secondary btn-sm" href="https://git.sr.ht/~johnhamelink/k8s-grocy/" target="_blank"><i class="fas fa-external-link-alt"></i> Source</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>grocy-android</h5>
				grocy on your smartphone - with barcode scanning and batch processing<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/patzly/grocy-android" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Pantry Party</h5>
				grocy on your smartphone - multiple barcode lookup sources, text-to-speech and more<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/PantryParty/pantry_party" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Barcode Buddy</h5>
				A barcode scanning helper / lookup tool for grocy<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/Forceu/barcodebuddy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>Home Assistant Add-On</h5>
				 Home Assistant add-on for grocy<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/hassio-addons/addon-grocy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>pygrocy</h5>
				A grocy Python API client<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/SebRut/pygrocy" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>pygrocydm</h5>
				A python client for grocy (data management only) <br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/BlueBlueBlob/pygrocydm" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

			<hr class="mt-0 pb-0">

			<p>
				<h5>grocy-pyscanner</h5>
				A python based barcode scanning helper<br>
				<a class="btn btn-secondary btn-sm" href="https://github.com/grocy/grocy-pyscanner" target="_blank"><i class="fab fa-github"></i> GitHub</a>
			</p>

		</div>

	</div>	
</div>
@stop
