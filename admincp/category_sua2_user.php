<?php
$ma = isset($_POST['id'])?$_POST['id']:'';
$ten = isset($_POST['full_name'])?$_POST['full_name']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$pass = isset($_POST['pass'])?$_POST['pass']:'';
$phone = isset($_POST['phone'])?$_POST['phone']:'';
$address = isset($_POST['address'])?$_POST['address']:'';
$remember = isset($_POST['remember'])?$_POST['remember']:'';
$cre = isset($_POST['created_at'])?$_POST['created_at']:'';
$upd = isset($_POST['updated_at'])?$_POST['updated_at']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

$sql="update users set full_name=?, email=?, password=?,phone=?, address=?,
remember_token=?, created_at=?, updated_at=? where id=? ";
$stm = $obj->prepare($sql);
$arr = array($ten,$email,$pass,$phone,$address,$remember,$cre,$upd,$ma);
$stm->execute($arr);

header("location:index.php");exit;

