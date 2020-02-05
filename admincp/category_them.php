<pre><?php
include "connect.php";
$ma = isset($_POST['id'])?$_POST['id']:'';
$ten =isset($_POST['name'])?$_POST['name']:'';
$loai =isset($_POST['loai'])?$_POST['loai']:'';
$mota =isset($_POST['mota'])?$_POST['mota']:'';
$gia =isset($_POST['gia'])?$_POST['gia']:'';
$image =isset($_POST['image'])?$_POST['image']:'';
$new =isset($_POST['new'])?$_POST['new']:'';
$cre =isset($_POST['cre'])?$_POST['cre']:'';
$upd =isset($_POST['upd'])?$_POST['upd']:'';


if ($ma=='') {
	header("location:index.php"); exit;
}


if($_FILES['image']['error']==0)//kg loi
{
	$tenfilehinh=$_FILES['image']['name'];
	
	move_uploaded_file($tenfiletam, "img/".$tenfilehinh);
	echo "<img src='image/product/$tenfilehinh'>";
}
else echo "no picture";

$sql="insert into products (id, name, id_type, description, unit_price, image, new, created_at, updated_at) values (?,?,?,?,?,?,?,?,?)";
$stm = $obj->prepare($sql);
$arr=array($ma,$ten,$loai,$mota,$gia,$image,$new,$cre,$upd);
$stm->execute($arr);	
header("location:index.php"); exit;

