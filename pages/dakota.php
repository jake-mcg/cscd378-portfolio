<?php require_once "header.php"; ?>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-3">
                <img src="images/dakota.webp" alt="Dakota Profile Picture" class="img-fluid rounded-start" />
            </div>
            <div class="col-9">
                <h1>Dakota Condos</h1>
                <h3>EWU Computer Science - Senior</h3>
                <h5>Graduation Winter 2022</h5>
                <p class="text-muted">- The stock photos were too good not to keep.</p>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <!-- email -->
            <div class="col-4">
                <i class="fas fa-envelope fa-fw me-2"></i><a href="mailto:dcondos@ewu.edu">dcondos@ewu.edu</a>
            </div>
            <!-- github -->
            <div class="col-4">
                <i class="fab fa-github fa-fw me-2"></i><a
                    href="https://github.com/dakotacondos">github.com/dakotacondos</a>
            </div>
        </div>
        <hr>
        <!-- content cards group -->
        <div class="row row-cols-1 row-cols-md-3 g-3">

            <!-- Experience -->
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h5 class="card-title">Work Experience</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Work Experience content goes here.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h5 class="card-title">Languages</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col"><i class="fab fa-2x fa-java"></i>Java</div>
                            <div class="col">C#</div>
                            <div class="col"><i class="fab fa-2x fa-python"></i>Python</div>
                            <div class="col"><i class="fab fa-2x fa-html5"></i>HTML</div>
                            <div class="col"><i class="fab fa-2x fa-php"></i>PHP</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Certifications -->
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h5 class="card-title">Certifications</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Certifications content goes here.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>



</body>
<?php require_once "footer.php"; ?>