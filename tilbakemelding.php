<html>
<head>
	<div align="left">
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>
<body>
	<div align="left">
<?php 
$side="tilbakemelding";
include("header.php");?>

<div align="left">

<h1> Skriv en tilbakemelding på TaxiCalc sin Facebookside! </h1>	

<br>
<div align="left">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1&appId=1390598977846946";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>

<div align="left">
<div class="fb-comments" data-href="http://www.facebook.com/pages/Taxicalc/325718240901463" data-colorscheme="dark" data-numposts="20" data-width="600"></div>
<br>
<br>
<br>
<h1>Ønsker du og kontakte oss direkte? Bruk mailformen vår nedenfor!</h1>
<br>

<?php include("Epost.php");?>

</body>

<?php include("footer.php");?>
</html>

