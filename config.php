<?php

require_once 'vendor/autoload.php';

const APP_ID= '';
const APP_SECRET = '';

const LOGIN_CALLBACK_URL = '';

$google_client = new Google_Client();
$google_client->setClientId('');
$google_client->setClientSecret('');
$google_client->setRedirectUri('');
$google_client->addScope('email');
$google_client->addScope('profile');

const DB_HOST = 'localhost';
const DB_DATABASE = '';
const DB_USERNAME = '';
const DB_PASSWORD = '';
 const CURRENCY = 'CZK';




?>