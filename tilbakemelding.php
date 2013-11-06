<html dir="ltr" lang="en-US">
<head>
  <meta charset="UTF-8" />
  <title>TaxiCalc - Tilbakemelding</title>
  <link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>


<?php

// Contact subject
$subject ="$subject"; 

// Details
// From 
$header="from: $navn <$mail_from>";

// Enter your email address
$to ='taxicalx@live.no';
$message="$tilbakemelding";

// Mail of sender
$mail_from="$customer_mail"; 

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Din melding er sendt. Tak :)";
}
else {
echo "ERROR";
}
<?php include("header.php");?>

</html>

?>