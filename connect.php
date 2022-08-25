<?php

// $dbhost = "localhost:8889";
// $dbuser = "root";
// $dbpass = "root";
// $dbname = "Term2_week8Project";

$dbhost = "137.184.41.11";
$dbuser = "myadmin";
$dbpass = "MYSQL@dmin!12345";
$dbname = "Vancouver_Flower";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
    die("failed to connect to database");
}

?>