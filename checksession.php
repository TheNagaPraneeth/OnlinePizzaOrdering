<?php
session_start();
parse_str(urldecode($_POST['data']),$data);
$_SESSION['data']=$data;
// print_r($data);
echo "success";

 ?>
