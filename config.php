<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('62213104147-8k4ndcnm63kkmal03eq51sno9od5jd96.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('O3nSPAYrH3VrJTAK-2YrBioY');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/pu/id.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>