<?php
$con=mysqli_connect("localhost","root","","pizza");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Naga Praneeth's Pizza Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body >
  <div class="header-nightsky">
    <nav class="navbar navbar-default">
      <div class="container">
        <a class="navbar-brand" href="#">Naga Praneeth's Pizza Shop</a>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li>
              <a href="aboutus.php">ABOUT US</a>
            </li>
            <li>
              <a href="contactus.php">CONTACT US</a>
            </li>
            <li class="dropdown">
              <a href="locations.php">LOCATIONS</a>
            </li>
          </ul>
        </div>
        <div class="container1" >

          <div class="charts">
            <div class="chart">
              <div id="piechart" style="width: 600px; height: 300px;"></div>
            </div>
            <div class="chart">
              <div  id="bar" style="width: 600px; height: 300px;"></div>
            </div>
            <div class="chart">
              <div  id="doughnut" style="width: 600px; height: 300px;"></div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="footer1">
      <h3>Naga Praneeth Dunnala &nbsp; &nbsp; 700656346</h3></div>
    </body>
    <!-- <script type="text/javascript" src="myscripts.js"></script> -->

    <!-- <script src="jquery.min.js" charset="utf-8"></script> -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', { 'packages': ['table'] });
    google.charts.load('current', { 'packages': ['bar'] });
    google.charts.load('current', { 'packages': ['line'] });
    // google.charts.load('current', { 'packages': ['pie'] });  // <-- 'pie' package does not exist
    google.charts.load('current', { 'packages': ['corechart'] });
    // google.charts.load('current', {'packages':['corechart','Bar']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawLineChart);
    google.charts.setOnLoadCallback(drawDoughNutChart);

    function drawChart() {
      var options = {
        title: 'Day wise pizza orders'
      };
      var data = google.visualization.arrayToDataTable([
        ['Day', 'Number of pizza orders'],
        <?php
        $sql = "SELECT count(pizzaorder.orderId) as count, dayName(pizzaorder.created) as day FROM `pizzaorder` GROUP BY dayname(pizzaorder.created)";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "['".$row['day']."',".$row['count']."],";
          }
        }
        ?>
      ]);
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
    function drawLineChart() {

      var data = google.visualization.arrayToDataTable([
        ['Year', 'Toppings'],
        <?php
        $sql = "select toppings from pizzaorderinfo ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $data=$row['toppings'];
            $tmp_data=explode("<br>",$data);
            $count[$tmp_data[1]][]=$tmp_data[1];
            $count[$tmp_data[2]][]=$tmp_data[2];
            // echo "['".$row['day']."',".$row['count']."],";
          }
          foreach ($count as $key => $value) {
            echo "['".$key."',".count($value)."],";
          }
          // echo "//";print_r($count);
        }
        ?>
      ]);
      var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
      };
      var chart = new  google.charts.Bar(document.getElementById('bar'));
      chart.draw(data, options);

    }
    function drawDoughNutChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Minutes'],
        <?php
        $sql = "select * from pizzaorder where created !='' and cooked != '' and delivered != '' ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $to_time = strtotime($row['cooked']);
            $from_time = strtotime($row['created']);
            $cooking[]=round(abs($to_time - $from_time) / 60,2);
            $from_time = strtotime($row['delivered']);
            $to_time = strtotime($row['cooked']);
            $delivered[]=round(abs($to_time - $from_time) / 60,2);
          }
          echo "['Cooking',".(array_sum($cooking) / count($cooking))."],";
          echo "['Delivering',".(array_sum($delivered) / count($delivered))."],";
        }
        ?>
      ]);

      var options = {
        title: 'Cooking vs Delivering Time [Minutes]',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('doughnut'));
      chart.draw(data, options);
    }
    </script>
    </html>
