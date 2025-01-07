@extends('layout')

@section('title', 'Datenschutz | Grocy')
@section('lang', 'de')

@section('headerAdditional')
<link rel="canonical"
	href="https://grocy.info/datenschutz">
@stop

@section('content')
<div class="container pt-3">

	<section class="row align-items-center">
		<div class="col">
			<h1 class="pb-3">Datenschutz</h1>

			<div class="lead fs-3 pb-3">
				<section id="allgemein"
					class="fs-2">
					<p>
						Die Nutzung dieser Seite ist generell ohne Angabe von personenbezogenen Daten möglich.
						Teilweise technisch bedingt können personenbezogene Daten verarbeitet werden.
						IT, Open Source, #ownyourdata und alles was dazu gehört ist meine Leidenschaft, ein verantwortungsbewusster Umgang mit (nicht nur) personenbezogenen Daten ist für mich schon immer selbstverständlich.
					</p>
				</section>
				<section id="anbieter">
					<h3>Anbieter, Ansprechpartner für Datenschutz</h3>
					<p>
						Anbieterinformationen und Kontaktmöglichkeiten kannst du dem <a href="/impressum"
							title="Impressum">Impressum</a> entnehmen.
					</p>
				</section>
				<section id="tls">
					<h3>Transportverschlüsselung</h3>
					<p>
						Die Auslieferung dieser Seite erfolgt ausschließlich über eine TLS gesicherte Verbindung (HTTPS).
						Die technischen Parameter entsprechen immer den aktuellsten Standards.
						Veraltete oder als unsicher geltende Versionen werden prinzipiell nicht unterstützt,
						auch nicht aus Gründen von Kompromissen bzgl. Browserkompatibilität.
					</p>
				</section>
				<section id="technisch">
					<h3>Technisch automatisch erhobene Daten</h3>
					<p>
						Beim Besuch dieser Seite werden zur Absicherung und Sicherstellung des technischen Betriebs (Abwehr
						von potentiellen Angriffen, etc.) u. a. Daten wie z. B. die IP-Adresse, der Zeitpunkt
						des Zugriffs oder die Quell-URL (Referrer, sofern vom verwendeten Browser gesendet) protokolliert.
						Diese Daten werden 7 Tage gespeichert und täglich automatisiert gelöscht.
					</p>
				</section>
				<section id="serverstandort">
					<h3>Serverstandort</h3>
					<p>
						Diese Seite wird auf eigener, selbst betriebener bzw. angemieteter, Infrastruktur in Deutschland betrieben.
					</p>
				</section>
				<section id="drittanbieter">
					<h3>Eingebundene externe Inhalte von Drittanbietern</h3>
					<p>
						Auf dieser Seite sind keinerlei Inhalte von Drittanbietern eingebunden.
					</p>
				</section>
				<section id="cookies">
					<h3>Cookies</h3>
					<p>
						Diese Seite selbst benutzt keinerlei Cookies, Ausnahme ist die statistische
						Auswertung von Besucherzugriffen, siehe nachfolgender Punkt.
					</p>
				</section>
				<section id="analytics">
					<h3>Statistische Auswertung von Besucherzugriffen</h3>
					<p>
						Diese Seite benutzt <a href="https://matomo.org"
							target="_blank"
							rel="noopener noreferrer"
							title="Matomo">Matomo</a>, eine Open Source Software
						zur statistischen Auswertung von Besucherzugriffen, die ebenfalls selbst betrieben wird.
						Auch hierbei werden selbstverständlich keinerlei Daten extern weitergegeben. Technisch bedingt werden hierbei zur
						Erkennung wiederkehrender Besuche Cookies eingesetzt. Es werden keinerlei personenbezogene Daten gespeichert,
						auch keine IP-Adressen. Der Zweck dient ausschließlich der üblichen statistischen Auswertung,
						ich möchte schließlich schon wissen, wie bzw. wie oft meine Seite so aufgerufen wird.
						Durch entsprechende Browsereinstellungen (blockieren von Cookies, "Do Not Track", etc.) kann diese anonyme Erfassung
						selbstverständlich auch verhindert werden.
					</p>
				</section>
			</div>
		</div>
	</section>

</div>
@stop
