<?php 
$errors = '';
$myemail = 'jkammar12@gmail.com';// <----- Sæt din emailadresse her.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['tel']))
{
    $errors .= "\n Error: Alle felter skal udfyldes";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$tel = $_POST['tel']; 
$cvr = $_POST['cvr']; 
$macbookpro = $_POST['macbookpro']; 
$ipad = $_POST['ipad']; 
$macbookair = $_POST['macbookair']; 
$iphone = $_POST['iphone']; 
$imac = $_POST['imac']; 
$tilbehor = $_POST['tilbehor']; 
$message = $_POST['message']; 



if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Ugyldig emailadresse";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Kontakt formular indsendelse: $name";
	$email_body = "Du har modtaget en ny besked. ".
	" Her er detaljerne:\n Name: $name \n Email: $email_address \n Telefonnummer: $tel \n CVR: $cvr \n Du har valgt: $macbookpro, $ipad, $macbookair, $iphone, $imac, $tilbehor, \n Kommentar \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	// omdirigere til siden 'tak'
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8" /> 
	<title>Kontaktformularhåndterer</title>
</head>

<body>
<!-- Denne side vises kun, hvis der er en fejl -->
<?php
echo nl2br($errors);
?>


</body>
</html>