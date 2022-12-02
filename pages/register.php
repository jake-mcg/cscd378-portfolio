<?php
#load in libraries
require_once __DIR__ . "/../vendor/autoload.php";
use PHPAuth\Auth;
use PHPAuth\Config;




#Create authentication object with database connection
$dbh = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");
$config = new Config($dbh);
$auth = new Auth($dbh, $config);
#check that we got all the required variables, and that the user is logged in.
if(!isset($_POST["email"]) || !isset($_POST["pass"]) || !isset($_POST["confPass"]) ||!$auth->isLogged()) {
    #if not go back to admin page
    header("location:admin.php");
    exit();
}
#attempt to register, and send the results of the registration attempt back to admin page
session_start();
$_SESSION["registerAttempt"]= $auth->register($_POST["email"],$_POST["pass"],$_POST["confPass"]);
header("location:admin.php");
