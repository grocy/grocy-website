@extends('layout')

@section('title', 'Impressum | Grocy')
@section('lang', 'de')

@section('headerAdditional')
<link rel="canonical"
	href="https://grocy.info/impressum">
@stop

@section('content')
<div class="container pt-3">

	<section class="row align-items-center">
		<div class="col">
			<h1 class="pb-3">Impressum</h1>

			<p class="lead fs-2">
				Angaben gemäß § 5 TMG für die Webseiten unter den folgenden Domains:<br>
				grocy.info<br>
				demo.grocy.info<br>
				*.demo.grocy.info<br>
				demo-prerelease.grocy.info<br>
				*.demo-prerelease.grocy.info
				<br>
				<br>
				Bernd Bestel
				<br>
				Poststraße 23
				<br>
				86399 Bobingen
				<br>
				<br>
				E-Mail: bernd@berrnd.de
				<br>
				Telefon: 08234/8071060
			</p>

		</div>
	</section>

</div>
@stop
