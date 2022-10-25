<?php
 
$name = $_GET['name'];
$postid = $_GET['postid'];
$like = $_POST['like'];


$host = "localhost:3306";
$username = "mantisco";
$password = "Jicsamuel1#";
$database = "mantisco_mantis";

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
   
  
$query = "INSERT INTO ratings (post_id, user, rating_action)
VALUES ('$postid', '$name', '$like')";

if (mysqli_query($connection, $query)) {
   header("Location: posts.php");  
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
