<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

$sql="select * from products where id= ? ";
$stm = $obj->prepare($sql);
$arr = array($ma);
$stm->execute($arr);


$row = $stm->fetch();//lay ra 1 dong
//print_r($row);
?>
<form action="category_sua2.php" method="post">
	<input type="text" name="id" value="<?php echo $row['id'] ?>"><br> 
	<input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
	<input type="text" name="id_type" value="<?php echo $row['id_type'] ?>"><br>
	<input type="text" name="description" value="<?php echo $row['description'] ?>"><br>
	<input type="text" name="unit_price" value="<?php echo $row['unit_price'] ?>"><br>
	<input type="file" name="image" value="<?php echo $row['image'] ?>"><br>
	<input type="text" name="new" value="<?php echo $row['new'] ?>"><br>
	<input type="text" name="created_at" value="<?php echo $row['created_at'] ?>"><br>
	<input type="text" name="updated_at" value="<?php echo $row['updated_at'] ?>"><br>
	<input type="submit" value="Sua">
</form>

