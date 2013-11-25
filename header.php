<!-- Denne filen inneholder bare navigasjonsmenyen -->
<div id="innhold">
	<img src="img/PNG/Header.png" />
<ul align="center" id="meny_ul">
if side=Forside 
{
<li id="meny_li"><a id="meny_a" class="markert" href="index.php">Forside</a></li>
else

<li id="meny_li"><a id="meny_a" href="index.php">Forside</a></li>
}
if side= Taxi informasjon
{
<li id="meny_li"><a id="meny_a" class="markert" href="taxi-informasjonside.php">Taxi informasjon</a></li>
else

<li id="meny_li"><a id="meny_a" href="taxi-informasjonside.php">Taxi informasjon</a></li>
}

if side= Om oss
{
<li id="meny_li"><a id="meny_a" class="markert" href="omoss.php">Om oss</a></li>
else

<li id="meny_li"><a id="meny_a" href="omoss.php">Om oss</a></li>
}
if side= Tilbakemelding
{
<li id="meny_li"><a id="meny_a" class="markert" href="tilbakemelding.php">Tilbakemelding</a><li>
else

<li id="meny_li"><a id="meny_a" href="tilbakemelding.php">Tilbakemelding</a><li>
} 
<?

</ul> 