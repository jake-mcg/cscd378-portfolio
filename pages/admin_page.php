<?php

use PHPAuth\Auth;
use PHPAuth\Config;

require_once __DIR__ . '/../vendor/autoload.php';

$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");

$config = new Config($dbh);
$auth   = new Auth($dbh, $config);

if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();
}
