<?php

use PHPAuth\Auth;
use PHPAuth\Config;

require_once __DIR__ . '/../vendor/autoload.php';

$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");

$config = new Config($dbh);
$auth   = new Auth($dbh, $config);
$return = $auth->login($_POST["inputemail"],$_POST["inputpass"]);
var_dump($return);