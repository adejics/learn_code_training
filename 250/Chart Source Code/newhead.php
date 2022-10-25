<?php

include 'head.php';

session_start();

$first = $_SESSION['first'];
$last = $_SESSION['last'];



?>
<header>
        <div class="inner">
        <h2 class="logo"><a href="dashboard.php" style="color:gold;"><i class="fas fa-chart-line"></i>  Jics-Chart</a></h2>
            <h6 style="color: white;">Welcome <?php echo $first .' '. $last; ?></h6>
            <ul class="navigation">
                <li><a href="out.php"><i class="fas fa-sign-out-alt"></i> Sign out</a>          
            </ul>
        </div>
    </header>

