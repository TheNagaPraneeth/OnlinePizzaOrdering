<?php
parse_str(urldecode($_POST['data']),$data);
$con=mysqli_connect("localhost","root","","pizza");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
  $newstate=$data['state']+1;
  $orderid=$data['orderid'];
  switch ($newstate) {
    case '2':
    mysqli_query($con,"update pizzaorder set state='".$newstate."',cooked=NOW() ")or die(mysqli_connect_errno());
    echo "success";
    break;
    case '3':
    mysqli_query($con,"update pizzaorder set state='".$newstate."',delivered=NOW() ")or die(mysqli_connect_errno());
    echo "success";
    break;
  }
}
?>
