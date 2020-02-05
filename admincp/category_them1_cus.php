<pre><?php
include "connect.php";
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
	header("location:quanli_cus.php"); exit;
}



$sql="insert into customer (id, name,gender, email, address, phone_number, note,created_at, updated_at) values (?,?,?,?,?,?,?,?,?)";
$stm = $obj->prepare($sql);
$arr=array($ma,$ten,$gender,$email,$address,$phone,$note,$cre,$upd);
$stm->execute($arr);	
print_r($arr);
header("location:quanli_cus.php"); exit;

