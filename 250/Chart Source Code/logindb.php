<?php
session_start();

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
$query1 = "SELECT * FROM power WHERE Email = '$email' and Password = '$password1';";
   $result1= mysqli_query($connection, $query1);

   $posts = mysqli_fetch_assoc($result1);
   $_SESSION['first'] = $posts['Firstname'];
   $_SESSION['last'] = $posts['Lastname'];

 
   
  if (mysqli_num_rows($result1) > 0){
    header("location:dashboard.php");
  } else {
    header("location:signfail.php");
  }

   
mysqli_commit($connection);
mysqli_rollback($connection);
mysqli_close($connection);

?>