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
<body background="pizza.jpg"   >
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
					<center>
						<h2>Payment Information</h2>
						<input type="text" name="name" placeholder="name" value="" required>
						<br>
						<br>
						<input type="text" name="phone" placeholder="phone" value="" required>
						<br>
						<br>
						<!-- <input type="text" name="address" placeholder="address" value="" required pattern="[789][0-9]{9}"> -->
						<textarea name="address" rows="8" cols="40" placeholder="Address" required></textarea>
						<br>
						<br>
						<button class="button2" type="submit" > Submit Order</button>
					</center>
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
	<div class="footer1">
		<h3>Naga Praneeth Dunnala &nbsp; &nbsp; 700656346</h3></div>
	</body>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	$("form").submit(function(e) {
		$.ajax({
			url:"createorder.php",
			data:{"data":$("form").serialize()},
			type:"post",
			success:function(data){
				console.log(data);
				if(data=="success"){
					alert("order placed succesfully");
					window.location = "index.php";

					// window.location.href="checkout.php";
				}
			}});
			return false;
		});
		</script>
		</html>
