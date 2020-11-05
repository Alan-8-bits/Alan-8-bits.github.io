<?php

$errors = '';

empty($_POST['email']) || empty($_POST['message']))
{
$errors .= "\n Error: all fields are required";
}


if (!preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $_POST['email']))
{
$errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$email_body = "You have received a new message.\n".
" Here are the details: \n".
" Name: $_POST['name'] \n".
" Email: $_POST['email'] \n".
" Message: \n $_POST['message']";

$headers = "From: 'alanoel21@gmail.com'\n";
$headers .= "Reply-To: $_POST['email']";

mail('alanoel21@gmail.com' , "De pagina GitHub: $_POST['subject']", $email_body,$headers);

//redirect to the 'thank you' page

header('Location: index.html');

}

?>