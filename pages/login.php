<?php require_once "header.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $loginAttempt = $auth->login($_POST["inputemail"], $_POST["inputpass"]);
}
if(!$auth->isLogged())
    header('location:login.php');
else {
    header('location:index.php'); ;
}
?>




<div class="container mt-5">
    <div class = "container">
        <p class="text-danger"><?php echo isset($loginAttempt)?$loginAttempt["message"]:""; ?></p>
    </div>
    <form method="post" action="admin.php">
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