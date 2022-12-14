<?php 
// Redirect to our actual project root 
header("Location: pages/index.php"); ?>

<?php require_once 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="assets/img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
</head>

<body>
    <!-- Start your project here-->
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="text-center">
                <img class="mb-4" src="https://mdbootstrap.com/img/logo/mdb-transparent-250px.png"
                    style="width: 250px; height: 90px;" />
                <h5 class="mb-3">Thank you for using our product. We're glad you're with us.</h5>
                <p class="mb-3">MDB Team</p>
                <a class="btn btn-primary btn-lg" href="https://mdbootstrap.com/docs/standard/getting-started/"
                    target="_blank" role="button">Start MDB tutorial</a>
                <div class="mt-5 mb-5 p-3 border border-1 border-dark">
                    <p class="font-weight-bold">This is an example PHP + PDO project starter.</p>
                    <div class="text-start">
                        <p>It assumes you have a local database named <code>sample-db</code> served at
                            <code>127.0.0.1:3306</code> and one table named <code>sample_table</code>.
                        </p>
                        <p>You can change the configuration in <code>db-connect.php</code> and <code>index.php</code>
                            files.</p>
                        <p>If you don't have a database locally, you can create it using the following MDB CLI command:
                        </p>
                        <pre style="background-color: #c7c7c7; color: #343434;"
                            class="py-1 ps-1"><code>$ mdb database init -db mysql8</code></pre>
                        <p>... and then provide the configuration that has been displayed in your terminal.</p>
                    </div>
                </div>
                <hr>
                <div>
                    <p class="font-weight-bold">Demo:</p>
                    <?php
                $pdo = new DBConnect();
                $conn = $pdo->connect();

                if ( $conn ) {
                    echo '<h5 class="m-5"><span class="badge bg-success">Database connected!</span></h5>';
                } else {
                    echo '<h5 class="m-5"><span class="badge bg-danger">Error! Connection to database failed!</span></h5>';
                }

                if ( $conn ) {

                    $sample_query = $conn->prepare( 'SELECT testid, testvalue, testtime, testmessage FROM testdata' );
                    $sample_query->execute();
                    $result = $sample_query->fetchAll();;

                    if ( $result ) {
                        foreach ( $result as $result ) {
                            $testid = $result[0];
                            $testvalue = $result[1];
                            $testtime = $result[2];
                            $testmessage = $result[3];

                            echo "testid: {$testid}, testvalue: {$testvalue}, testtime: {$testtime}, testmessage: {$testmessage} <br>";
                        }
                        
                    } else {
                        echo '<h5 class="m-5"><span class="badge bg-warning">Cannot get values from sample query</span></h5>';
                    }

                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>