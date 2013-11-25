<!-- Denne filen inneholder bare navigasjonsmenyen -->
<div id="innhold">
	<img src="img/PNG/Header.png" />
<ul align="center" id="meny_ul">
if side=Forside 
{
<li class="meny_li"><a class="meny_a" id="markert" href="index.php">Forside</a></li>
else

<li class="meny_li"><a class="meny_a" href="index.php">Forside</a></li>
}
if side= Taxi informasjon
{
<li class="meny_li"><a class="meny_a" id="markert" href="taxi-informasjonside.php">Taxi informasjon</a></li>
else

<li class="meny_li"><a class="meny_a" href="taxi-informasjonside.php">Taxi informasjon</a></li>
}

if side= Om oss
{
<li class="meny_li"><a class="meny_a" id="markert" href="omoss.php">Om oss</a></li>
else

<li class="meny_li"><a class="meny_a" href="omoss.php">Om oss</a></li>
}
if side= Tilbakemelding
{
<li class="meny_li"><a class="meny_a" id="markert" href="tilbakemelding.php">Tilbakemelding</a><li>
else

<li class="meny_li"><a class="meny_a" href="tilbakemelding.php">Tilbakemelding</a><li>
} 
<?

</ul> 