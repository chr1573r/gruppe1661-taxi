
// Emne tilbakemeldingen angÃ¥r
$subject =$_POST['subject'];

// Selve tilbakemeldingen
$message=$_POST['detail'];

// tekstfelt for innsender sin mail.
$mail_from=$_POST['customer_mail']; 

// Navn var
$name =$_POST['name'];

// Hvordan header i mailen skal se ut. Velger at navnet som plottes inn skal vises.
$header="from: $name <$mail_from>";

// Mottaker av tilbakemelding sammen med hvilken innhold mottaker skal fÃ¥.
$to ='taxicalx@live.no';

//$send_contact=mail($to,$subject,$message,$header);

// Sjekk, hvis tilbakemeldingen ble sendt til mail skal
// displaymelding vÃ¦re "Vi har mottatt din tilbakemelding, takk  // SocialPost. :-)", om ikke den ble sendt; "Error".

if($send_contact){
echo "Vi har mottatt din tilbakemelding, takk  :-)";
}
else {
echo "ERROR";
}
?>
</body>
</html>