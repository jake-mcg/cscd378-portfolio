<?php require_once "header.php";

    if(isset($_COOKIE["name"])) {
        header('location:CookieTest.php');
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "setting up cookies";
        setcookie("name",$_POST["name"]);
        setcookie("timestamp", date("Y-m-d h:i:sa"));
        header('location:CookieTest.php'); ;
    }
?>
    <div class="container mt-5">
    <div class = "container">

    </div>
    <form method="post" action="cookieForm.php">
        <div class="form-group row">
            <label for="nameBox" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nameBox" name="name" placeholder="Enter name">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-primary" value="Sign in">
            </div>
        </div>
    </form>
</div>
<?php require_once "footer.php"; ?>