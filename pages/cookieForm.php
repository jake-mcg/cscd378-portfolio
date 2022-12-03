<?php
require_once "php-head.php";

#if they sent a message handle storing the message.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["email"]) or empty($_POST["firstName"]) or empty($_POST["lastName"]) or empty($_POST["companyName"]) or empty($_POST["message"])) {
        header('location:/');
        exit();
    }

    #echo "setting up cookies";
    setcookie("firstName", $_POST["firstName"]);
    setcookie("lastName", $_POST["lastName"]);
    setcookie("companyName", $_POST["companyName"]);
    setcookie("timestamp", date("Y-m-d h:i:s a"));
    $query = "insert into contact (email, fname, lname, company,message) values(?,?,?,?,?)";

    #grab and escape the values for the message
    $email = htmlspecialchars($_POST["email"]);
    $fname = htmlspecialchars($_POST["firstName"]);
    $lname = htmlspecialchars($_POST["lastName"]);
    $company = htmlspecialchars($_POST["companyName"]);
    $message = htmlspecialchars(substr($_POST["message"], 0, 1999));
    $stmt = $dbh->prepare($query);

    #bind the parameters
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $fname);
    $stmt->bindParam(3, $lname);
    $stmt->bindParam(4, $company);
    $stmt->bindParam(5, $message);

    #store the message
    $stmt->execute();
    #redirect back to contact form
    header('location:cookieForm.php');
    exit();
}
#load in site content
require_once "header.php";

#if they have the cookies, send them a welcome back message.
if (isset($_COOKIE["firstName"]) && isset($_COOKIE["lastName"]) && isset($_COOKIE["companyName"])) {
    echo '<div class="row d-flex justify-content-center">
            <div class="card col-6 border border-primary shadow-0 mt-1">
                <div class="card-body">
                    <p class="card-text">
                        Welcome back to our site '
        . $_COOKIE["firstName"]
        . ' '
        . $_COOKIE["lastName"]
        . '! <br>We are glad you are here! Please feel free to send us another message. <br> You last sent a message on <em>'
        . $_COOKIE["timestamp"]
        . '
                    <em></p>
                </div>
            </div>
        </div>
    ';
}

?>



<div class="container mt-5">
    <div class="container">

    </div>
    <form method="post" action="cookieForm.php">
        <div class="form-group row">
            <label for="firstNameBox" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-2">
                <input type="text" class="form-control" id="firstNameBox" name="firstName" placeholder="first name">
            </div>
            <!-- spacer column -->
            <div class="col-1"></div>
            <label for="lastNameBox" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-2">
                <input type="text" class="form-control" id="lastNameBox" name="lastName" placeholder="last name">
            </div>

        </div>

        <div class="form-group row">
            <label for="emailBox" class="col-sm-2 col-form-label">Email</label>
            <div class="col-7">
                <input type="text" class="form-control" id="emailBox" name="email" placeholder="Enter Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="companyNameBox" class="col-sm-2 col-form-label">Company</label>
            <div class="col-7">
                <input type="text" class="form-control" id="companyNameBox" name="companyName" placeholder="Enter Company name">
            </div>
        </div>

        <div class="form-group row">
            <label for="messageBox" class="col-sm-2 col-form-label">Message</label>
            <div class="col-7">
                <textarea class="form-control" id="messageBox" name="message" maxlength="2000" cols="90" rows="10"></textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2 mt-3">
                <input type="submit" class="btn btn-primary" value="submit">

            </div>
        </div>
    </form>
</div>
<?php require_once "footer.php"; ?>