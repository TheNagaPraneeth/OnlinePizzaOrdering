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
<body background="pizza.jpg"  >
	<div class="header-nightsky">
		<nav class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="#">Naga Praneeth's Pizza Shop</a>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">HOME</a></li>



<li>						<a href="orders.php">ORDERS</a>
						</li>
						<li>
							<a href="sales.php">SALES</a>
						</li>
						<li>
							<a href="aboutus.php">ABOUT US</a>
						</li>


<li>
							

						<li>
							<a href="contactus.php">CONTACT US</a>
						</li>
						<li class="dropdown">
							<a href="locations.php">LOCATIONS</a>
						</li>
					</ul>
				</div>
				<div class="container1" >
					<form class="" action="" method="post">
					<div class="pizasize1"  align="left" >
						<h3> Pizza Size
						</h3>
						<select class="dropdownsize" id="size1" name="size" onchange="price()">
							<option value="1" >Small</option>
							<option value="2" >Medium</option>
							<option value="3">Large</option>
						</select>
					</div>
					<div class="=Sauce" align="left">
						<h3>Sauce</h3>
						<select class="dropdownsauce" id="Sauce1" name="sauce" onchange="price()">
							<option value="1" >Hearty Marinara Sauce</option>
							<option value="2" >BBQ Sauce</option>
							<option value="3">Garlic Parmesan White Sauce</option>
							<option value="3">Alfredo Sauce</option>
						</select>
					</div>
					<div class="Cheese" align="left">
						<h3>Cheese</h3>
						<select class="dropdowncheese"  name="cheese" id="cheese1" onchange="price1()">
							<option	value="1">Light</option>
							<option value="2">Normal</option>
							<option value="3">Extra</option>
							<option	value="4">Double</option>
						</select>
					</div>
					<div class="Toppings" align="left">
						<br>
						<h3>Toppings</h3>
						<input type="checkbox" onchange="price()" name="toppings1" value="Chicken"> Chicken<br>
						<input type="checkbox" onchange="price()" name="toppings2" value="Bacon" > Bacon<br>
						<input type="checkbox" onchange="price()" name="toppings3" value="Cheddar Cheese"> Cheddar Cheese<br>
						<input type="checkbox" onchange="price()" name="toppings4" value="Banana Peppers"> Banana Peppers<br>
						<input type="checkbox" onchange="price()" name="toppings5" value="Green Peppers"> Green Peppers<br>
						<input type="checkbox" onchange="price()" name="toppings6" value="Onions"> Onions<br>
					</div>
					<div class="pricefont">
						
					</div >
					<div class=buttonsubmit>
						<button class="but1"  type="submit">Add to Cart </button>
					</div>
				</form>
			</div>
		</nav>
	</div>
	<div class="footer1">
		<h3>Naga Praneeth Dunnala &nbsp; &nbsp; 700656346</h3></div>
	</body>
	<script type="text/javascript" src="myscripts.js"></script>

	<script src="jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript">

	</script>
	<script type="text/javascript">
	total=$("#value").text();
	$("form").on("submit",function(e) {
		console.log($("form").serialize());
		$.ajax({
			url:"checksession.php",
			data:{"data":$("form").serialize()+"&total="+total},
			type:"post",
			success:function(data){
				if(data=="success"){
					window.location.href="payment.php";
				}
				console.log(data);
			}});
		return false;
	});
	</script>
	</html>
