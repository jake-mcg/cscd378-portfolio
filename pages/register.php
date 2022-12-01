<?php
#load in libraries
require_once __DIR__ . "/../vendor/autoload.php";
use PHPAuth\Auth;
use PHPAuth\Config;




#Create authentication object with database connection
$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");
$config = new Config($dbh);
$auth = new Auth($dbh, $config);
echo "hello"."<br>";
var_dump($_POST);
echo $auth->isLogged()."<br>";
echo (!isset($_POST["email"]) || !isset($_POST["pass"]) || !isset($_POST["confPass"]) ||!$auth->isLogged())?"yes":"no";
if(!isset($_POST["email"]) || !isset($_POST["pass"]) || !isset($_POST["confPass"]) ||!$auth->isLogged()) {
    header("location:admin.php");
    exit();
}
session_start();
$_SESSION["registerAttempt"]= $auth->register($_POST["email"],$_POST["pass"],$_POST["confPass"]);
header("location:admin.php");