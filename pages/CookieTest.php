<?php require_once "header.php"; ?>


    <div id="container">
        <div id="row">
            <div id="col">
                <p>
                    <?php
                        if(isset($_COOKIE["name"])) {
                            echo $_COOKIE["name"]."<br>";
                            echo "cookie created ";
                            echo $_COOKIE["timestamp"];
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
<?php require_once "footer.php"; ?>