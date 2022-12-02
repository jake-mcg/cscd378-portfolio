<?php require_once "header.php" ?>

<div class="row my-5">
    <div class="d-flex justify-content-center align-items-center ">
        <h1>Welcome to the Clean Code Enthusiasts Portfolio Website!</h5>
    </div>
</div>

<div class="container mt-1">
    <!-- Background image -->
    <div class="bg-image" style="
    background-image: url('images/codecode.webp');
    height: 50vh;
  ">

        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-mdb-toggle="modal"
                    data-mdb-target="#cookieconsent2">
                    Test a Cookie?
                </button>

                <!-- Modal -->
                <div class="modal fade" id="cookieconsent2" tabindex="-1" aria-labelledby="cookieconsentLabel2"
                    aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="cookieconsentLabel2">Cookies & Privacy</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-cookie-bite fa-4x text-primary"></i>
                                    </div>

                                    <div class="col-9">
                                        <p>This link checks your browser to see if a contact cookie exists. If one is
                                            available it will be displayed on the page, otherwise you may enter
                                            information to create your own cookie!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-primary" data-mdb-dismiss="modal">No
                                    Thanks</button>
                                <a type="button" class="btn btn-primary" href="CookieTest.php">
                                    Lets Try it
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
            </div>
        </div>
    </div>
    <!-- Background image -->

</div>
<?php require_once "footer.php"; ?>