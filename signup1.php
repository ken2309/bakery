<?php
$email = isset($_POST['email'])?$_POST['email']:'';
$name = isset($_POST['name'])?$_POST['name']:'';
$address = isset($_POST['address'])?$_POST['address']:'';
$phone = isset($_POST['phone'])?$_POST['phone']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
if ($email=='') {
	header('location:signinup.php');exit;
}
include 'connect.php';

$sql="insert into users (`full_name`, `email`,`password`,`phone`,`address`) values (?, ?, ?, ?, ?)";
$stm = $obj->prepare($sql);
$arr = array($name,$email,$password,$phone,$address);
$stm->execute($arr);
header("location:admincp/index.php");
exit;

