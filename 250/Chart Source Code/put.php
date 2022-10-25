<?php

session_start();

$first = $_SESSION['first'];
$last = $_SESSION['last'];
$own = $first. ' '. $last;



if (! empty($_FILES)) {
    
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

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $real = $_FILES['file']['name'];
$title = $_POST['title'];
$name = time().'.mp3';
$tmp = $_FILES['file']['tmp_name'];
$location = "audios/".$name;
date_default_timezone_set('Africa/Lagos');
$time=  date("F jS Y, h:i a");

 // New unique file name
 $fileType = strtolower(pathinfo($real, PATHINFO_EXTENSION));
 $allowTypes = array('mp3');
 
 if (in_array($fileType, $allowTypes)){
     move_uploaded_file($tmp, $location);

$real1 = $_FILES['pic']['name'];
$tmp1 = $_FILES['pic']['tmp_name'];
$location1 = "pictures/".$real1;
move_uploaded_file($tmp1, $location1);


 $sql = "INSERT INTO `audio`(`name`, `title`,  `time`, `owner`, `picture`) 
            VALUES ('$name','$title', '$time', '$own', '$real1')";
 $res = mysqli_query($connection, $sql);


        if ($res) {
            ?>
<h5 style="color:white;">Audio Uploaded Successfully  </h5>
<?php
        } 
    }
}

mysqli_commit($connection);
mysqli_rollback($connection);
mysqli_close($connection);

}



?>
