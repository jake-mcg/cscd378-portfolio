<?php require_once 'db-connect.php';
$pdo = new DBConnect();
$conn = $pdo->connect();

if ($conn) {
    echo '<h5 class="m-5"><span class="badge bg-success">Database connected!</span></h5>';
} else {
    echo '<h5 class="m-5"><span class="badge bg-danger">Error! Connection to database failed!</span></h5>';
}

if ($conn) {

    $sample_query = $conn->prepare('SELECT `email`, `fname`, `lname`,`company`,`message` FROM `contact`');
    $sample_query->execute();
    $result = $sample_query->fetchAll();;

    if ($result) {
        foreach ($result as $result) {
            $email = $result[0];
            $fname = $result[1];
            $lname = $result[2];
            $company = $result[3];
            $message = $result[4];


            echo "<tr>
                                <td>
                                    {$email}
                                </td>
                                <td>
                                    {$fname}
                                </td>
                                <td>
                                    {$lname}
                                </td>
                                <td>
                                    {$company}
                                </td>
                                <td>
                                    {$message}
                                </td>
                        </tr>";
        }
    } else {
        echo '<h5 class="m-5"><span class="badge bg-warning">Cannot get values from sample query</span></h5>';
    }
}
