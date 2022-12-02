<?php
require_once "header.php";


if(isset($_COOKIE["firstName"]) && isset($_COOKIE["lastName"]) && isset($_COOKIE["companyName"])) {
    echo "welcome " . $_COOKIE["firstName"].  " " . $_COOKIE["lastName"]."<br>" ;
    echo "from ".$_COOKIE["companyName"]."<br>" ;
    echo "your cookie was created on ";
    echo $_COOKIE["timestamp"];
}
else{
    header('location:cookieForm.php');
    exit();
}

require_once "footer.php"; ?>