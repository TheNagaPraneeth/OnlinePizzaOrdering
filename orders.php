<!DOCTYPE html>
<html>
<head>
	<title>Naga Praneeth's Pizza Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<style media="screen">
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body background="pizza1.jpg"   >
	<script>
	function validateForm() {
		var x = document.forms["myForm"]["fname"].value;
		if (x == "") {
		}
		var y=document.forms["myForm"]["BillingAddress"].value;
		if (y==""){
		}
		var z=document.forms["myForm"]["Cardinfo"].value;
		if (z==""){
		}
		var az=document.forms["myForm"]["cvv"].value;
		if (az==""){
			alert("All the fields should be entered");
		}
		else
		alert("Order placed successfully");
	}
	</script>
	<script>
	</script>
	<script type="text/javascript" src="myscripts.js"></script>
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
				<form name="myForm" action="" align="center" onsubmit="return validateForm()" method="post" >
					<br><br><br><br>
          <?php
          $con=mysqli_connect("localhost","root","","pizza");
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
					<!-- <div class="pricefont">
					Total: <p  id="price">$57.98</p>
				</div> -->
				<!-- Name:&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname"><br><br>
				Billing Address:&nbsp;&nbsp;<input type="textarea" name="BillingAddress"><br><br>
				Credit Card:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Cardinfo"><br><br>
				CVV: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cvv"><br><br>
				Card Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select>
				<option	value="Visa">Visa</option>
				<option value="Mastercard">Mastercard</option>
				<option value="Discover">Discover</option> -->
				<!-- <option	value="AMEX">AMEX</option>
			</select>
			<br><br>
			<div class="but1"><button class="button1" onclick="myFunction()" > Submit Order</button></div> -->
		</form>
	</div>
</nav>
</div>
<div>
</div>
<footer class="container " align="bottom">
	<div class="footer">
		
	</body>
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
		</html>
