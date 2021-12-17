<?php
$username = "root";
$pass = "";
$server = "localhost";
$dbname = "sted";

$con = mysqli_connect($server,$username,$pass,$dbname);

if(!$con){
    echo "DB Connection Error";
}


?>