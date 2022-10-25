<?php

$host = "localhost";
$username = "store_admin";
$password = "password1#";
$database = "store_data";
$connection = mysqli_connect($host, $username, $password);
if (mysqli_connect_errno()){
    echo(mysqli_connect_error());
    die();
    }
    mysqli_select_db($connection, $database);
    if ((mysqli_errno($connection))){
    echo(mysqli_error($connection));
    die();
    }

?>