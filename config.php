<?php
require_once 'vendor/autoload.php';

// init configuration
$clientID = '992273143373-ml4kbfa9c5kem75pd8pt1brb4vq441gr.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/gmail-login/index.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


?>