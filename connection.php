<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'medicaldesk';

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if($conn == false){
        die ("Error" .mysqli_connect_error());
    }
?>