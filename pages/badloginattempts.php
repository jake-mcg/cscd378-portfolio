<?php require_once 'db-connect.php'; 
$pdo = new DBConnect();
$conn = $pdo->connect();

                if ( $conn ) {
                    echo '<h5 class="m-5"><span class="badge bg-success">Database connected!</span></h5>';
                } else {
                    echo '<h5 class="m-5"><span class="badge bg-danger">Error! Connection to database failed!</span></h5>';
                }

                if ( $conn ) {

                    $sample_query = $conn->prepare( 'SELECT `id`, `ip`, `expiredate` FROM `phpauth_attempts` ORDER BY `phpauth_attempts`.`expiredate` ASC' );
                    $sample_query->execute();
                    $result = $sample_query->fetchAll();;

                    if ( $result ) {
                        foreach ( $result as $result ) {
                            $id = $result[0];
                            $ip = $result[1];
                            $time = $result[2];
                            

                            echo "<tr>
                                <td>
                                    {$id}
                                </td>
                                <td>
                                    {$ip}
                                </td>
                                <td>
                                    {$time}
                                </td>
                        </tr>";

                        }
                        
                    } else {
                        echo '<h5 class="m-5"><span class="badge bg-warning">Cannot get values from sample query</span></h5>';
                    }}