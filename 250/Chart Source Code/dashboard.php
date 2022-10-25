
<!doctype html>
  <head>
    <?php
      include 'head.php';
      include 'newhead.php';
      $owner = $first. ' '. $last;

      if (isset($first)){
    ?>
     <link rel="stylesheet" href="main.css">
  </head>
  <body>
 
   <section class="" style="background-color:white;min-height:60vh;margin-top:100px;margin-bottom:10px;">
 
<br>
<br>
<br>
<br>

<div class="kay" style="justify-content:center;min-height:60vh">

    <div class="inside" >
        <a href="pie.php">
        <img class="pic1" style="padding-bottom:10px;"src="pictures/pie.png">   
    <h5 style="color:white;">Creat Pie Chart</h5>
  
    </a>
    </div>
    <a href="bar.php">
    <div class="inside" >
    <img class="pic1" style="padding-bottom:10px;"src="pictures/bar.png">   
    <h5 style="color:white;">Create Bar Chart</h5>
      </a>
    </div>
      </div>

    </section>


    <footer class="footer">
        <p><a href="#">Abuja, Nigeria</a></p>
        <p><a href="#">Feranmi Adeoye (c) 2022</a></p>
    </footer>
</body>
</html>
  
<?php 
      } else {
        header('Location: index.php');
      }
?>