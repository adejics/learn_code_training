<?php
 
      include 'head.php';
      include 'header.php';
?>
      <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 top">
                     <h4>Create an account</h4>
                    <form action="saveuser.php" method="POST">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="First name" name="fname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name" name="lname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required> 
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control" placeholder="Password" id="p1" name="password" required> 
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="verify-password" placeholder="Confirm password" id ="p2" onkeyup='check();' required> 
                        </div>
                        <p><span id='message'></span></p>
                       
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info" value="Sign up!" />
                        </div>   
                    </form>
                </div>
            </div>
        </div>
        <br>
        <script>
            var check = function() {
            if (document.getElementById('p1').value ==
                document.getElementById('p2').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'The password entries match, Great!';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'The password entries not matching, correct before submitting!';
            }
            }
        </script>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
        <br>
        <script>
            var check = function() {
            if (document.getElementById('p1').value ==
                document.getElementById('p2').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'The password entries match, Great!';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'The password entries not matching, correct before submitting!';
            }
            }
        </script>
      <?php
      include 'foot.php';
?>
