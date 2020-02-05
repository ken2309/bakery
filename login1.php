<pre><?php
$email = isset($_POST['email'])?$_POST['email']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
if ($email=='') {
	header('location:login.php');exit;
}
include 'connect.php';

$sql="SELECT * FROM users";
$stm= $obj->query($sql);
$value = $stm->fetch();
$em=$value['email'];
$pw=$value['password'];
print_r($em);
print_r($pw);
print_r($_POST);
//if($email==$em && $password==$pw){
    //header('location:admincp/index.php');exit;
//}
//header("location:login.php");
//echo("dang nhap khong thanh cong");
//exit;

