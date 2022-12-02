<?php require_once "header.php";

#if the user isn't logged in, tell them that they can't be here.
if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";
    exit();
}

#if they tried to register a new user and there was an error, set $warning variable and unset the session variable.
$warning = isset($_SESSION["registerAttempt"]) ? $_SESSION["registerAttempt"]["message"] : "";
unset($_SESSION["registerAttempt"]);
?>
<div class="card text-center container mt-5 mb-5">
    <h1 class="card-header">Admin Features</h1>
    <div class="card-body">
        <!-- All the tab stuff -->
        <!-- Tabs navs -->
        <ul class="nav nav-tabs justify-content-center mb-3" id="ex-with-icons" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1"
                    role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i
                        class="far fa-address-card fa-fw me-2"></i>Register Account</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3"
                    role="tab" aria-controls="ex-with-icons-tabs-3 " aria-selected="false"><i
                        class="far fa-list-alt  fa-fw me-2"></i>Check Logs</a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex-with-icons-content">
            <!-- Register Tab -->
            <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                aria-labelledby="ex-with-icons-tab-1">

                    <?php
                    #display the warning text if it's not empty.
                    echo !empty($warning)?'<p class="text-danger">'.$warning.'</p>':"";?>

                <form method = "post" action = "register.php">
                    <!-- Email input -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" class="form-control" name = "email" placeholder="email address"/>
                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"  for="password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" class="form-control" name = "pass" placeholder="password"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="confirm">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="confirm" class="form-control" name = "confPass" placeholder="confirm password"/>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Register</button>
                </form>
            </div>


            <!-- Logs Tab -->
            <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">



                <!-- logs Table -->
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>IP</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require_once "badloginattempts.php" ?>
                    </tbody>

                </table>


            </div>
        </div>
        <!-- Tabs content -->

    </div>



</div>

<?php require_once "footer.php";?>