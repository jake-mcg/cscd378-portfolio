<?php require_once "header.php";


if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();

}
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
                <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2"
                    role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i
                        class="far fa-trash-alt fa-fw me-2"></i>Delete Account</a>
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
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" />
                        <label class="form-label" for="form3Example4">Confirm Password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Register</button>
                </form>
            </div>

            <!-- Delete Tab -->
            <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                <!-- will probably need to rename id's in this section -->
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Register</button>
                </form>
            </div>

            <!-- Logs Tab -->
            <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
                Im thinking for this section we should log login attempts to a unique table, and then display those
                here.
            </div>
        </div>
        <!-- Tabs content -->

    </div>



</div>

<?php require_once "footer.php";?>