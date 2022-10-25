<?php
    session_start();


    $useremail = $_POST['email_sign'];
    $userpassword = $_POST['password_sign'];

    $_SESSION['logmail'] = $_POST['email_sign'];
    $_SESSION['logpass'] = $_POST['password_sign'];


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


$query = "SELECT * FROM users WHERE Email='$useremail' AND Password='$userpassword' ";

    $result = mysqli_query($connection, $query);
    $sql = "SELECT Name FROM users  WHERE Email='$useremail' AND Password='$userpassword'";
    $name_fetch =   mysqli_query($connection, $sql);
    $name_fetched = mysqli_fetch_array($name_fetch, MYSQLI_ASSOC);
    $_SESSION['userin'] = $name_fetched['Name'];
    if (mysqli_num_rows($result) > 0){ 
        header("location:dashboard.php");
    }
    else {
        header("location:failed-log.php");
      }
   
?>