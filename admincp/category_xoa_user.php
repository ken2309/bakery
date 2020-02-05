<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
echo "$id";
if ($ma=='') {
	header("location:index.php"); exit;
}

include "connect.php";
//$sql="delete from loai where maloai='$ma'";
//$obj->query($sql);//xoa
$sql="delete from users where id=?";
$stm = $obj->prepare($sql);
$arr=array($ma);
$stm->execute($arr);	
header("location:index.php"); exit;
echo "Xoa loai co ma la $ma";