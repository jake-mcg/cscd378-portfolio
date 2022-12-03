<?php
require_once "php-head.php";
#if the user are already logged in send them to the main page.
if($auth->isLogged())
{
    header('location:index.php');
    exit();
}
#Check to see if the user tried to log in.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    #if so try to log them in
    $loginAttempt = $auth->login($_POST["inputemail"], $_POST["inputpass"]);

    #if there's not an error send them back to the main page
    if(!$loginAttempt["error"])
    {
        header('location:index.php');
        exit();
    }
}
require_once "header.php";
?>




<div class="container mt-5">
    <div class = "container">
        <p class="text-danger"><?php echo isset($loginAttempt)?$loginAttempt["message"]:""; ?></p>
    </div>
    <form method="post" action="login.php">
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="inputemail" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPass" name="inputpass" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-primary" value="Sign in">
            </div>
        </div>
    </form>
</div>

<?php require_once "footer.php";?>