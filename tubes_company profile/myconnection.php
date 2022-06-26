<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "company_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
