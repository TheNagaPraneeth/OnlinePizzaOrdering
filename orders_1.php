<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  div.id1
  {
    text-align:center;
    font-family:"Times New Roman", Times, sans-serif;
    color: red;
  }
  div.nav
  {
    margin-left:520px;
    text-decoration:none;
  }
  img.mySlides
  {
    margin-left:410px;
  }
  body.body1
  {
    background-color:white;
  }
  .button1
  {
    background-color:red;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer
  }
  a.id2
  {
    text-align:left;
    margin-left:430px;
    color:red;
    font-size:20px;
    text-decoration:none;
  }
  a.id3
  {
    color:white;
    text-decoration:none;
  }
  a.id4
  {
    text-decoration:none;
  }
  div.but1
  {
    margin-left:580px;
  }
  footer.footer1
  {
    margin-top: 50vh;
    text-align:center;
  }
  </style>
  <title>Melocious</title>
</head>
<body class="body1">
  <div class="header">
    <div class="id1">
      <center>
        <h1>Melocious Pizza</h1>
        <div class="s">
          <a class="id4" href="index.php">Home</a> | <a class="id4" href="orders.php">orders</a> | <a class="id4" href="menu.php">Menu</a> | <a class="id4"href="loc.php">Locations</a> | <a class="id4" href="about.php">About Us</a>
        </div>
      </center>
    </div>
    <div> <br></br></div>
    <?php
    $con=mysqli_connect("localhost","root","","ujwalpizza");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else {
      $sql = "SELECT * FROM `pizzaorder` inner join customerinfo on customerinfo.userid=pizzaorder.userId inner join pizzaorderinfo on pizzaorderinfo.orderId=pizzaorder.orderId WHERE 1";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $state='';
        while($row = mysqli_fetch_assoc($result)) {
          switch ($row['state']) {
            case '1':
            $state='cooked';
            break;
            case '2':
            $state='delivered';
            break;
            case '3':
            $state='success';
            break;
            default:
            $state='cooked';
            break;
          }
          echo '
          <table style="width:100%">
          <tr>
          <th colspan="3">Customer Info</th>
          <th colspan="5">Order Info</th>
          </tr>
          <tr>
          <th>Customer Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Cost</th>
          <th>Sauce</th>
          <th>Cheese</th>
          <th>Topping</th>
          <th>Status</th>
          </tr>';
          echo " <tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td> $".$row['cost']."</td><td>".$row['sauce']."</td><td>".$row['cheese']."</td><td>".$row['toppings']."</td>
          <td><button onClick='changeToNextState(".'"'.$row['state'].'"'.",".'"'.$row['orderId'].'"'.")'>".$state."</button></td>
          </tr>";
          echo '</table>';
        }
      } else {
        echo "0 results";
      }

    }
    ?>
    <div><br><br></div>
    <div class="but1">
      <!-- <a class="id3 button1" href="order.php"> Order Online </a> -->
    </div>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script>
    function changeToNextState(state,orderid) {
      $.ajax({
        url:"changeeOrderState.php",
        data:{"data":"orderid="+orderid+"&state="+state},
        type:"post",
        success:function(data){
          console.log(data);
          if(data=="success"){
            alert("updated succesfully");
            window.location = "orders.php";

            // window.location.href="checkout.php";
          }
        }});
    }
    </script>
    <footer class="footer1">
      <p>This Page is created by [Uzwal Chandra Danam] [700658276]</p>
    </footer>
  </body>
  </html>
