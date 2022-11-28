<?php require_once "header.php";


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "setting up cookies";
        setcookie("firstName",$_POST["firstName"]);
        setcookie("lastName",$_POST["lastName"]);
        setcookie("companyName",$_POST["companyName"]);
        setcookie("timestamp", date("Y-m-d h:i:s a"));
        header('location:CookieTest.php'); ;
    }
?>
    <div class="container mt-5">
    <div class = "container">

    </div>
    <form method="post" action="cookieForm.php">
        <div class="form-group row">
            <label for="firstNameBox" class="col-sm-2 col-form-label">first name</label>
            <div class="col-2">
                <input type="text" class="form-control" id="firstNameBox" name="firstName" placeholder="first name">
            </div>

            <label for="lastNameBox" class="col-sm-2 col-form-label">last name</label>
            <div class="col-2">
                <input type="text" class="form-control" id="lastNameBox" name="lastName" placeholder="last name">
            </div>

        </div>

        <div class="form-group row">
            <label for="emailBox" class="col-sm-2 col-form-label">Email</label>
            <div class="col-7">
                <input type="text" class="form-control" id="emailBox" name="Email" placeholder="Enter Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="companyNameBox" class="col-sm-2 col-form-label">Company</label>
            <div class="col-7">
                <input type="text" class="form-control" id="companyNameBox" name="companyName" placeholder="Enter Company name">
            </div>
        </div>

        <div class="form-group row">
            <label for="companyNameBox" class="col-sm-2 col-form-label">Company</label>
            <div class="col-7">
                <textarea cols="90" rows="10"></textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-primary" value="submit">

            </div>
        </div>
    </form>
</div>
<?php require_once "footer.php"; ?>