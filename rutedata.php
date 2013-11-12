<?php

function identifiserRute()
// identifiserRute()
//
// Funksjon som kontrollerer at "fra" og "til" ikke er like.
// Hvis "fra" og "til" er forskjellig, setter den sammen verdiene til en såkalt rutekode
// Rutekoden er en unik identifikator som brukes når vi skal laste inn rett kart for reisen.
{
	global $fra, $til, $rutekode;		//Sørg for at fra, til og rutekode manipuleres globalt
	if ( "$fra" != "$til" )
		{
			$rutekode= $fra . $til;		// Setter sammen fra og til, f.eks. krsman for "kristiansand -> mandal"
		}
	else
		{
			return "feil";			// Returnerer verdien "feil". Dette skjer hvis fra og til har samme verdi.
		}
}

function rutedata($parameter)
// rutedata()
//
// Denne funksjonen henter enten informasjon om reisen (antall km, antall min, total reisetid)
// eller viser HTML koden for google maps for den reisen som er valgt.
//
// Bruksanvisning:
// rutedata("hentinfo") - Angir $antall_km, $reisetid_min, $reisetid_tekst.
// rutedata("viskart") - Injecter HTML koden hentet fra google maps.
//
// rutedata() trenger variabelen $rutekode for å fungere. Dette blir satt av identifiserRute()
{
	global $rutekode, $antall_km, $reisetid_min, $reisetid_tekst;
// Case statements laget automatisk med lag_ruter.sh
	switch ("$rutekode") {

		case 'uikuig':	//Hvis rute er identifisert som uikuig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 44.4;
					$reisetid_min = 33;
					$reisetid_tekst = "0t 33min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg&amp;aq=0&amp;oq=Jon+Lilletuns+vei+9&amp;sll=37.0625,-95.677068&amp;sspn=36.589577,77.783203&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.250282,8.290558&amp;spn=0.346868,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg&amp;aq=0&amp;oq=Jon+Lilletuns+vei+9&amp;sll=37.0625,-95.677068&amp;sspn=36.589577,77.783203&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.250282,8.290558&amp;spn=0.346868,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uikkrs':	//Hvis rute er identifisert som uikkrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 3.9;
					$reisetid_min = 7;
					$reisetid_tekst = "0t 7min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=University+of+Agder,+Kristiansand,+Norway&amp;daddr=58.1581955,8.0052379+to:Markens+gate,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFXNsdwMddSZ6AClLDNqrUQI4RjGV4CAlnO3JlA%3BFeg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA&amp;aq=0&amp;oq=markens&amp;sll=58.269788,8.285751&amp;sspn=0.20331,0.607681&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;via=1&amp;ll=58.15444,8.003386&amp;spn=0.019392,0.031796&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=University+of+Agder,+Kristiansand,+Norway&amp;daddr=58.1581955,8.0052379+to:Markens+gate,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFXNsdwMddSZ6AClLDNqrUQI4RjGV4CAlnO3JlA%3BFeg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA&amp;aq=0&amp;oq=markens&amp;sll=58.269788,8.285751&amp;sspn=0.20331,0.607681&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;via=1&amp;ll=58.15444,8.003386&amp;spn=0.019392,0.031796" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uikman':	//Hvis rute er identifisert som uikman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uik-man HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uik-man PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uikven':	//Hvis rute er identifisert som uikven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uik-ven HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uik-ven PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uiksog':	//Hvis rute er identifisert som uiksog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uik-sog HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uik-sog PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uiguik':	//Hvis rute er identifisert som uiguik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uig-uik HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uig-uik PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uigkrs':	//Hvis rute er identifisert som uigkrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uig-krs HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uig-krs PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uigman':	//Hvis rute er identifisert som uigman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uig-man HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uig-man PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uigven':	//Hvis rute er identifisert som uigven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uig-ven HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uig-ven PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'uigsog':	//Hvis rute er identifisert som uigsog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR uig-sog HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR uig-sog PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'krsuik':	//Hvis rute er identifisert som krsuik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR krs-uik HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR krs-uik PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'krsuig':	//Hvis rute er identifisert som krsuig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR krs-uig HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR krs-uig PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'krsman':	//Hvis rute er identifisert som krsman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR krs-man HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR krs-man PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'krsven':	//Hvis rute er identifisert som krsven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR krs-ven HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR krs-ven PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'krssog':	//Hvis rute er identifisert som krssog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR krs-sog HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR krs-sog PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'manuik':	//Hvis rute er identifisert som manuik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR man-uik HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR man-uik PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'manuig':	//Hvis rute er identifisert som manuig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR man-uig HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR man-uig PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'mankrs':	//Hvis rute er identifisert som mankrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR man-krs HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR man-krs PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'manven':	//Hvis rute er identifisert som manven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR man-ven HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR man-ven PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'mansog':	//Hvis rute er identifisert som mansog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR man-sog HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR man-sog PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'venuik':	//Hvis rute er identifisert som venuik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR ven-uik HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR ven-uik PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'venuig':	//Hvis rute er identifisert som venuig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR ven-uig HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR ven-uig PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'venkrs':	//Hvis rute er identifisert som venkrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR ven-krs HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR ven-krs PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'venman':	//Hvis rute er identifisert som venman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR ven-man HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR ven-man PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'vensog':	//Hvis rute er identifisert som vensog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR ven-sog HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR ven-sog PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'soguik':	//Hvis rute er identifisert som soguik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR sog-uik HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR sog-uik PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'soguig':	//Hvis rute er identifisert som soguig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR sog-uig HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR sog-uig PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'sogkrs':	//Hvis rute er identifisert som sogkrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR sog-krs HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR sog-krs PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'sogman':	//Hvis rute er identifisert som sogman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR sog-man HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR sog-man PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'sogven':	//Hvis rute er identifisert som sogven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					//SETT INN VARIABLER FOR sog-ven HER
					break;

				case 'viskart':		//Vis HTML kart
					?>
					SETT INN KART FOR sog-ven PÅ DENNE LINJEN
					<?php
					break;
			}
		break;

		case 'feil': //Hvis rute er ikke identifisert
		break;

	}
//echo "Rutedata funksjon kjørt! Variabler: $rutekode, $parameter, $antall_km, $reisetid_min, $reisetid_tekst<br>";
}


?>