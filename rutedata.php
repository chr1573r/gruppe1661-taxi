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
					$antall_km = 44.8;
					$reisetid_min = 42;
					$reisetid_tekst = "0t 42min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.250741,8.290359&amp;sspn=0.190052,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.120693,7.754974&amp;spn=0.348135,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.250741,8.290359&amp;sspn=0.190052,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.120693,7.754974&amp;spn=0.348135,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uikven':	//Hvis rute er identifisert som uikven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 16.9;
					$reisetid_min = 20;
					$reisetid_tekst = "0t 20min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=University+of+Agder,+Kristiansand,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsby&amp;sll=58.096244,7.73878&amp;sspn=0.204304,0.607681&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;ll=58.213408,7.971268&amp;spn=0.112799,0.081679&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=University+of+Agder,+Kristiansand,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsby&amp;sll=58.096244,7.73878&amp;sspn=0.204304,0.607681&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;ll=58.213408,7.971268&amp;spn=0.112799,0.081679" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uiksog':	//Hvis rute er identifisert som uiksog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 18.3;
					$reisetid_min = 19;
					$reisetid_tekst = "0t 19min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Tangvall,+S%C3%B8gne,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=0&amp;oq=tangvall+s%C3%B8gne&amp;sll=58.096388,7.738495&amp;sspn=0.190878,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.133021,7.915649&amp;spn=0.087003,0.219727&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=UiA,+Kristiansand,+Norway&amp;daddr=Tangvall,+S%C3%B8gne,+Norway&amp;hl=en&amp;geocode=FXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=0&amp;oq=tangvall+s%C3%B8gne&amp;sll=58.096388,7.738495&amp;sspn=0.190878,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.133021,7.915649&amp;spn=0.087003,0.219727&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uiguik':	//Hvis rute er identifisert som uiguik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 44.4;
					$reisetid_min = 33;
					$reisetid_tekst = "0t 33min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=University+of+Agder,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w&amp;aq=0&amp;oq=Uia&amp;sll=58.130506,7.916719&amp;sspn=0.095348,0.303841&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.251727,8.290558&amp;spn=0.346853,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=University+of+Agder,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w&amp;aq=0&amp;oq=Uia&amp;sll=58.130506,7.916719&amp;sspn=0.095348,0.303841&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.251727,8.290558&amp;spn=0.346853,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uigkrs':	//Hvis rute er identifisert som uigkrs

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 46.3;
					$reisetid_min = 33;
					$reisetid_tekst = "0t 33min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Markens+gate,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFeg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA&amp;aq=0&amp;oq=marken&amp;sll=58.251405,8.290359&amp;sspn=0.190048,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.273399,8.271332&amp;spn=0.346641,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Markens+gate,+Kristiansand,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFeg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA&amp;aq=0&amp;oq=marken&amp;sll=58.251405,8.290359&amp;sspn=0.190048,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.273399,8.271332&amp;spn=0.346641,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uigman':	//Hvis rute er identifisert som uigman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 86.6;
					$reisetid_min = 68;
					$reisetid_tekst = "1t 8min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.243328,8.282288&amp;sspn=0.380187,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.198214,8.118896&amp;spn=0.694759,1.757813&amp;z=9&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.243328,8.282288&amp;sspn=0.380187,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.198214,8.118896&amp;spn=0.694759,1.757813&amp;z=9" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uigven':	//Hvis rute er identifisert som uigven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 59.7;
					$reisetid_min = 48;
					$reisetid_tekst = "0t 48min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsbyve&amp;sll=58.185185,8.017273&amp;sspn=0.380807,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.237272,8.278198&amp;spn=0.346995,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsbyve&amp;sll=58.185185,8.017273&amp;sspn=0.380807,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.237272,8.278198&amp;spn=0.346995,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'uigsog':	//Hvis rute er identifisert som uigsog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 60.1;
					$reisetid_min = 46;
					$reisetid_tekst = "0t 46min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Tangvall,+S%C3%B8gne,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=0&amp;oq=tangvall+s%C3%B8gne&amp;sll=58.248837,8.253479&amp;sspn=0.380125,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.223534,8.205414&amp;spn=0.347129,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;daddr=Tangvall,+S%C3%B8gne,+Norway&amp;hl=en&amp;geocode=FTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=0&amp;oq=tangvall+s%C3%B8gne&amp;sll=58.248837,8.253479&amp;sspn=0.380125,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.223534,8.205414&amp;spn=0.347129,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'krsuik':	//Hvis rute er identifisert som krsuik

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 3.9;
					$reisetid_min = 7;
					$reisetid_tekst = "0t 7min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=University+of+Agder,+Kristiansand,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w&amp;aq=0&amp;oq=Markens&amp;sll=58.130506,7.916988&amp;sspn=0.095348,0.303841&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.154539,8.002338&amp;spn=0.021738,0.054932&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=University+of+Agder,+Kristiansand,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFXqBdwMdfh96ACFS4kYnqS4Y7ymTrJWFUwI4RjFS4kYnqS4Y7w&amp;aq=0&amp;oq=Markens&amp;sll=58.130506,7.916988&amp;sspn=0.095348,0.303841&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.154539,8.002338&amp;spn=0.021738,0.054932&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'krsuig':	//Hvis rute er identifisert som krsuig

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 46.3;
					$reisetid_min = 33;
					$reisetid_tekst = "0t 33min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg&amp;aq=0&amp;oq=markens&amp;sll=58.219195,8.195801&amp;sspn=0.380443,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.261842,8.313904&amp;spn=0.346755,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Jon+Lilletuns+Vei+9,+Grimstad,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFTAdegMdLd6CACnfMs5jQu5HRjH97pt28_XKIg&amp;aq=0&amp;oq=markens&amp;sll=58.219195,8.195801&amp;sspn=0.380443,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.261842,8.313904&amp;spn=0.346755,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'krsman':	//Hvis rute er identifisert som krsman

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 41.7;
					$reisetid_min = 40;
					$reisetid_tekst = "0t 40min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.242332,8.282318&amp;sspn=0.380195,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.088041,7.726135&amp;spn=0.348453,0.878906&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Store+Elvegate,+Mandal,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFTRxdQMd-c1xAClBBcfSkY43RjGOBR8C5JptpQ&amp;aq=0&amp;oq=store+elve&amp;sll=58.242332,8.282318&amp;sspn=0.380195,1.215363&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.088041,7.726135&amp;spn=0.348453,0.878906&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'krsven':	//Hvis rute er identifisert som krsven

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 17.7;
					$reisetid_min = 21;
					$reisetid_tekst = "0t 21min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsbyvege&amp;sll=58.087908,7.726512&amp;sspn=0.190923,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.207621,7.974701&amp;spn=0.173642,0.439453&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Torsbyvegen,+Vennesla,+Norway&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFZYgeQMdiaB5ACkvApFSLgU4RjHIR8i6YbLu9Q&amp;aq=0&amp;oq=torsbyvege&amp;sll=58.087908,7.726512&amp;sspn=0.190923,0.607681&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=58.207621,7.974701&amp;spn=0.173642,0.439453&amp;z=11" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<?php
					break;
			}
		break;

		case 'krssog':	//Hvis rute er identifisert som krssog

			switch ("$parameter") {
				case 'hentinfo':	//Sett variabler for reisen
					$antall_km = 15.3;
					$reisetid_min = 17;
					$reisetid_tekst = "0t 17min";
					break;

				case 'viskart':		//Vis HTML kart
					?>
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Tangvall+s%C3%B8gne&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=&amp;sll=58.12217,7.90445&amp;sspn=0.102079,0.303841&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;ll=58.12217,7.90445&amp;spn=0.050587,0.180594&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Markens+gate,+Kristiansand,+Norway&amp;daddr=Tangvall+s%C3%B8gne&amp;hl=en&amp;geocode=Feg3dwMde_15ACn1skoXXgI4RjEsgAcRW5R5yA%3BFRl9dgMdmD13ACn9RYM-W_Y3RjGlJpHp_aoFhg&amp;aq=&amp;sll=58.12217,7.90445&amp;sspn=0.102079,0.303841&amp;t=m&amp;mra=ls&amp;ie=UTF8&amp;ll=58.12217,7.90445&amp;spn=0.050587,0.180594" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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