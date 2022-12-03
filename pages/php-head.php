<?php
#load in libraries
require_once __DIR__ . "/../vendor/autoload.php";

use PHPAuth\Auth;
use PHPAuth\Config;

session_start();

#redirect to https if needed

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit();
}


#Create authentication object with database connection
$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");
$config = new Config($dbh);
$auth   = new Auth($dbh, $config);