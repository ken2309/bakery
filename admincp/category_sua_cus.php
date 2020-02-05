<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

$sql="select * from customer where id= ? ";
$stm = $obj->prepare($sql);
$arr = array($ma);
$stm->execute($arr);


$row = $stm->fetch();//lay ra 1 dong
//print_r($row);
?>
<form action="category_sua2_cus.php" method="post">
	ID<br><input type="text" name="id" value="<?php echo $row['id'] ?>"><br> 
	Name<br><input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
	Gender<br><input type="text" name="gender" value="<?php echo $row['gender'] ?>"><br>
	Email<br><input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
	Address<br><input type="text" name="address" value="<?php echo $row['address'] ?>"><br>
	Phone<br><input type="text" name="phone" value="<?php echo $row['phone_number'] ?>"><br>
	Note<br><input type="text" name="note" value="<?php echo $row['note'] ?>"><br>
	
	
	Created<br><input type="text" name="created_at" value="<?php echo $row['created_at'] ?>"><br>
	Updated<br><input type="text" name="updated_at" value="<?php echo $row['updated_at'] ?>"><br>
	<input type="submit" value="Sua">
</form>

