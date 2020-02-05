<?php
$ma = isset($_POST['id'])?$_POST['id']:'';
$ten = isset($_POST['name'])?$_POST['name']:'';
$loai = isset($_POST['id_type'])?$_POST['id_type']:'';
$mota = isset($_POST['description'])?$_POST['description']:'';
$gia = isset($_POST['unit_price'])?$_POST['unit_price']:'';
$image = isset($_POST['image'])?$_POST['image']:'';
$new = isset($_POST['new'])?$_POST['new']:'';
$cre = isset($_POST['created_at'])?$_POST['created_at']:'';
$upd = isset($_POST['updated_at'])?$_POST['updated_at']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

print_r($_FILES);
if($_FILES['image']['error']==0)//kg loi
{
	$tenfilehinh=$_FILES['image']['name'];
	
	move_uploaded_file($tenfiletam, "img/".$tenfilehinh);
	echo "<img src='image/product/$tenfilehinh'>";
}
else echo "no picture";

$sql="update products set name=?, id_type=?, description=?,unit_price=?,image=?, new=?, created_at=?, updated_at=? where id=? ";
$stm = $obj->prepare($sql);
$arr = array($ten,$loai,$mota,$gia,$image,$new,$cre,$upd,$ma);
$stm->execute($arr);

header("location:index.php");exit;

