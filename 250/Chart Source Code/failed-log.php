<?php
session_start();
$cook = $_SESSION['count'];

if (isset($_POST['submit'])) {
    $user_email = ($_POST['email_sign']);
    $user_password = ($_POST['password_sign']);

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

    $query = "SELECT * FROM users WHERE Email='$user_email' AND Password='$user_password'";
    $result = mysqli_query($connection, $query);


    if ($result){
        header("location:dashboard.php");
    }
    
}

include 'head.php';
include 'header.php';
?>
<div class="main">
</div>
  <div class="container">
  <div class="row">
      <div class="col-lg-6 top">
      <h4>Enter your details to log in</h4>
      <hr>
      <form action = "redirect.php" method = "POST">
           <div class="form-group">
               <label for="email">Email address<i class="fas fa-user"></i></label>
               <input type="email" class="form-control"  class="form-control" name = "email_sign" placeholder="Enter your email"> 
           </div> 
           <div class="form-group">
              <label for="password">Password <i class="fas fa-unlock-alt"></i></label>
              <input type="password" class="form-control"  name = "password_sign" placeholder="Enter your password" id="password"> 
           </div>
           <div class="form-check">
              <label class="form-check-label" for="check">
              <input type="checkbox" class="form-check-input" id="check" name="check" value="check">Remember Me
              </label>
          </div> 
          <br>
          <div class="form-group">
              <input type="submit" id="submit" class="btn btn-info" value="Sign in" />
          </div> 
          <hr>   
      </form>
      <p style="color:red; display: inline;" class="warn"> Username or password invalid, try again! </p>
      </div>
  </div>
</div>
<br>
<?php echo  $cook; ?>
</div>
