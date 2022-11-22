<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPAuth\Auth;
use PHPAuth\Config;


$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");
$config = new Config($dbh);
$auth   = new Auth($dbh, $config);

$return = $auth->register("hello@goodbye.com","password","password");
var_dump($return);