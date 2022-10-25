<?php


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password1 = $_POST['password'];
//$_POST['password'];




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

$query ="INSERT INTO power (Firstname, Lastname, Email, Password)
        VALUES ('$fname', '$lname', '$email', '$password1')";

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