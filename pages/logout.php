<?php
require_once __DIR__ . "/../vendor/autoload.php";
use PHPAuth\Auth;
use PHPAuth\Config;


$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");
$config = new Config($dbh);
$auth   = new Auth($dbh, $config);
$hash = $auth->getCurrentSessionHash();
$logoutAtt = $auth->logout($hash);

header("location:index.php");