<?php
$ma = isset($_POST['id'])?$_POST['id']:'';
$ten = isset($_POST['name'])?$_POST['name']:'';
$gender = isset($_POST['gender'])?$_POST['gender']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$address = isset($_POST['address'])?$_POST['address']:'';
$phone = isset($_POST['phone'])?$_POST['phone']:'';

$note = isset($_POST['note'])?$_POST['note']:'';
$cre = isset($_POST['created_at'])?$_POST['created_at']:'';
$upd = isset($_POST['updated_at'])?$_POST['updated_at']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

$sql="update customer set name=?,gender=?, email=?,address=?,phone_number=?, note=?, created_at=?, updated_at=? where id=? ";
$stm = $obj->prepare($sql);
$arr = array($ten,$gender,$email,$address,$phone,$note,$cre,$upd,$ma);
$stm->execute($arr);

header("location:index.php");exit;

