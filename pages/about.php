<?php require_once "header.php"; ?>
<div class="container mt-5" style="padding-bottom:100px;">
    <!-- style="padding-bottom:100px;" mb-5 add 3rem to bottom but we need more added t allow for the footer -->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    1. You must use a javascript library (jquery is a great choice) (10%)
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    To fulfill this requirement, we used the Bootstrap Framework to handle our styling. Bootstrap
                    implements the JQuery Javascript library to handle several of its features, such as animations.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. You must use a stylesheet to style your site (10%)
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Similar to requirement 1, this is fulfilled with the Bootstrap Framework. Bootstrap is a custom CSS
                    library that makes a site responsive to all screen dimensions.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. You must have a database with data, you will need (10%) to provide a creation script with
                    instructions so I can run your final project on my local machine
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    The instructions for the database initialization are included in the readme of the project. The
                    script is named [SCRIPTNAME] and can be found in the repository.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4. You must provide a login functionality with admin (10%) features
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    To log in, press the "Log in" button on the header of the site. Use the following credentials to log
                    in:
                    <br></br>
                    <ul>
                        <li>Username: hello@goodbye.com</li>
                        <li>Password: password</li>
                    </ul>
                    
                    

                    When signed on, navigate to the Admin.php page by clicking the "Admin" button on the header. Here
                    you will find all admin features.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    5. You will need to use cookies to manage state and visits (10%) and present a different
                    page/message for returning users vs. new
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Navigate to the cookieForm.php by clicking the "Contact us" button on the header of the site.
                    Completing the form will store a cookie on your machine and its contents will be displayed upon
                    future visits to the page.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    6. You must implement logging and write logs to your database (10%) this will be used for error
                    management and site usage and any thing else you deem neccesary
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    When signed on, navigate to the Admin.php page by clicking the "Admin" button on the header. There
                    you can find logs and admin tools.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    7. You are required to use git and provide your repo info so I (10%) can view check in's etc
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    See our github repository <a href="https://github.com/jake-mcg/cscd378-portfolio">here</a>.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    8. You will need to provide a writeup at the end with the following information (20%) <br><br>


                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Our write-up is included in the readme of our repository, as well as with the submission on Canvas.
                </div>
            </div>
        </div>



    </div>
</div>
<?php require_once "footer.php"; ?>