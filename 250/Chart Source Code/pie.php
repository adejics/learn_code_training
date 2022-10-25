
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
  <section class="next" style="position:relative;background-color:white">
 
    <div class="col-md-5">
    <div class="form-group">
                <label for="password">Label</label>
                <input type="text" class="form-control" id="entry" placeholder="enter the label..." required>
                </div>
                <div class="form-group">
                <label for="password">Value</label>
                <input type="tel" class="form-control" id="value" placeholder="enter the value..." required>
                </div>
                <button class="btn btn-success" id="hey" onclick="myFunction()">Generate Bar Chart</button>
                <button id="yea" class="btn btn-danger" style="display:none;" onclick="myFunction()">Add more</button>                </div>
      </div>
    
    <div class="beans">
        <canvas id="myChart"></canvas>
    </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    </section>


    <footer class="footer">
        <p><a href="#">Abuja, Nigeria</a></p>
        <p><a href="#">Feranmi Adeoye (c) 2022</a></p>
    </footer>

    

<script>
    const labels = [];
    const data = [];
    var type = ['pie'];
   
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
    type,
    data: {
        labels, 
        datasets: [{
            label: 'Values Entered by User',
            data, 
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 12, 0.2)',
                'rgba(153, 102, 255)',
                'rgba(255, 255, 64)',
                'rgba(265, 99, 12, 0.2)',
                'rgba(74, 162, 235, 0.2)',
                'rgba(225, 206, 86, 0.2)',
                'rgba(85, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 92, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(265, 99, 132, 0.2)',
                'rgba(74, 162, 265, 0.2)',
                'rgba(225, 206, 86, 0.2)',
                'rgba(85, 192, 192, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
function myFunction() {
       var one = document.getElementById("entry").value;
       var two = document.getElementById("value").value;    
       labels.push(one);
       data.push(two);
       console.log(data);
       console.log(type);
       myChart.update();
       document.getElementById("hey").style.display = "none";
       document.getElementById("yea").style.display = "block";
       document.getElementById("entry").value = '';
       document.getElementById("value").value = '';
      
}

</script>
</body>
</html>
  
<?php 
      } else {
        header('Location: index.php');
      }
?>