<html>
<body>
<?php
function spamcheck($field)
 {
 //filter_var() sanitizes the e-mail
 //address using FILTER_SANITIZE_EMAIL
 $field=filter_var($field, FILTER_SANITIZE_EMAIL);

 //filter_var() validates the e-mail
 //address using FILTER_VALIDATE_EMAIL
 if(filter_var($field, FILTER_VALIDATE_EMAIL))
   {
   return TRUE;
   }
 else
   {
   return FALSE;
   }
 }

if (isset($_REQUEST['email']))
 {//if "email" is filled out, proceed

 //check if the email address is invalid
 $mailcheck = spamcheck($_REQUEST['email']);
 if ($mailcheck==FALSE)
   {
   echo "Invalid input";
   }
 else
   {//send email
   $email = $_REQUEST['email'] ;
   $subject = $_REQUEST['subject'] ;
   $message = $_REQUEST['message'] ;
   mail("taxicalc@gmail.com", "Subject: $subject",
   $message, "From: $email" );
   echo "Takk for din tilbakemelding!";
   }
 }
else
 {//if "email" is not filled out, display the form
 echo "<form method='post' action='mailform.php'>
 Din Epost: <input name='email' type='text'><br>
 Emne: <input name='subject' type='text'><br>
 Melding:<br>
 <textarea name='message' rows='15' cols='40'>
 </textarea><br>
 <input type='submit'>
 </form>";
 }
?>

</body>
</html>