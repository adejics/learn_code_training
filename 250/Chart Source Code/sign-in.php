<?php

        include 'head.php';
        include 'header.php';
?>
      <br>
      <style>
      *{

-webkit-user-select: none; /* Safari */
-ms-user-select: none; /* IE 10 and IE 11 */
user-select: none; /* Standard syntax */

}
</style>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 top">
                <h4>Enter your details to log in</h4>
                <br>
                
                 <form action="logindb.php" method="POST">
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" name="email" required> 
                     </div> 
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required> 
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
                </div>
            </div>
        </div>
        <br>
  
  <?php
        include 'foot.php';
?>
