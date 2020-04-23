<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "workout";

    $connection = mysqli_connect($server,$user,$password,$dbname);
    if(!$connection){
        die("Connection error!!!");
    }
?>