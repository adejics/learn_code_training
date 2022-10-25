<?php
session_start();
include 'head.php';

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$gender = $_SESSION['gender'];
$picture = $_SESSION['picture'];
$phone = $_SESSION['phone'];
$password_new = $_SESSION['password_new'];

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


mysqli_autocommit($connection, FALSE);

$query ="INSERT INTO users (Name, Email, Date, Time_Registered, Gender, Profile_Picture, Phone, Password)
        VALUES ('$name', '$email', '$date', '$time', '$gender', '$picture', '$phone', '$password_new')";

if (mysqli_query($connection, $query)) {
    header("location:sign-in.php");
}
else {

// Query fails because the apostrophe in
// the string interferes with the query
printf("An error occurred!");
}

mysqli_commit($connection);
mysqli_rollback($connection);
mysqli_close($connection);

?>