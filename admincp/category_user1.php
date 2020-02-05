<pre><?php
include "connect.php";
$ma = isset($_POST['id'])?$_POST['id']:'';
$ten =isset($_POST['full_name'])?$_POST['full_name']:'';
$email =isset($_POST['email'])?$_POST['email']:'';
$password =isset($_POST['password'])?$_POST['password']:'';
$phone =isset($_POST['phone'])?$_POST['phone']:'';
$address =isset($_POST['address'])?$_POST['address']:'';
$remember =isset($_POST['remember'])?$_POST['remember']:'';
$cre =isset($_POST['cre'])?$_POST['cre']:'';
$upd =isset($_POST['upd'])?$_POST['upd']:'';


if ($ma=='') {
	header("location:quanli_user.php"); exit;
}



$sql="insert into users (id, full_name, email, password, phone, address, remember_token, created_at, updated_at) values (?,?,?,?,?,?,?,?,?)";
$stm = $obj->prepare($sql);
$arr=array($ma,$ten,$email,$password,$phone,$address,$remember,$cre,$upd);
$stm->execute($arr);	
print_r($arr);
header("location:quanli_user.php"); exit;

