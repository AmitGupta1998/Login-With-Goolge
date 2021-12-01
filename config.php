<?php
require_once('vendor/autoload.php');

$google_client = new Google_Client();

$google_client->setClientId('YOUR_CLIENT_ID');

$google_client->setClientSecret('YOUR SECRET KEY');

$google_client->setRedirectUri('YOUR Redirect URL EX- http://localhost/google_login/');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>