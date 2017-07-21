<?php
session_start();
parse_str(urldecode($_POST['data']),$data);
$con=mysqli_connect("localhost","root","","pizza");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
  $userid=uniqid();
  $orderid=uniqid();
  $orderinfoid=uniqid();
  $toppings='';
  $countOfToppings=0;
  // print_r($_SESSION['data']);
  // print_r($data);
  foreach ($_SESSION['data'] as $key => $value) {
    switch ($key) {
      case 'toppings1':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
      case 'toppings2':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
      case 'toppings3':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
      case 'toppings4':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
      case 'toppings5':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
      case 'toppings6':
      $toppings=$toppings."<br>".$value;
      $countOfToppings++;
      break;
    }
  }
  mysqli_query($con,"INSERT INTO `customerinfo`(`userid`, `name`, `address`, `phone`) VALUES ('".$userid."','".$data['name']."','".$data['address']."','".$data['phone']."')")or die(mysqli_connect_errno());
  mysqli_query($con,"INSERT INTO `pizzaorder`(`orderId`, `userId`, `cost`, `state`, `created`, `cooked`, `delivered`) VALUES ('".$orderid."','".$userid."','".$_SESSION['data']['total']."','1',NOW(),'','')")or die(mysqli_connect_errno());
  mysqli_query($con,"INSERT INTO `pizzaorderinfo`(`id`, `orderId`, `sauce`, `cheese`, `toppings`, `countOfToppings`) VALUES ('".$orderinfoid."','".$orderid."','".$_SESSION['data']['sauce']."','".$_SESSION['data']['cheese']."','".$toppings."',$countOfToppings)")or die(mysqli_connect_errno());
  echo "success";
}
?>
