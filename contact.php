<?php
$from = "arnaskarciauskas@gmail.com";
$to = "arnaskarciauskas@gmail"
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$telephone = Trim(stripslashes($_POST['telephone']));
$message = Trim(stripslashes($_POST['message']));
$cbox = Trim(stripslashes($_POST['cbox']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="/n";
$body .="Email: ";
$body .=$email;
$body .="/n";
$body .="Telephone: ";
$body .=$telephone;
$body .="/n";
$body .="Message: ";
$body .=$message;
$body .="/n";
$body .="Promotional content? ";
$body .=$cbox;
$body .="/n";



$go = mail($to,$subject,$body, "From:<$from>");

if($go){
	print("Success!");
}
else{
	print("Unable to send!");
}
?>