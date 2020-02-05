<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
if ($ma=='') {
	header('location:index.php');exit;
}
include 'connect.php';

$sql="select * from users where id= ? ";
$stm = $obj->prepare($sql);
$arr = array($ma);
$stm->execute($arr);


$row = $stm->fetch();//lay ra 1 dong
//print_r($row);
?>
<form action="category_sua2_user.php" method="post">
	<input type="text" name="id" value="<?php echo $row['id'] ?>"><br> 
	<input type="text" name="full_name" value="<?php echo $row['full_name'] ?>"><br>
	<input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
	<input type="text" name="password" value="<?php echo $row['password'] ?>"><br>
	<input type="text" name="phone" value="<?php echo $row['phone'] ?>"><br>
	<input type="text" name="address" value="<?php echo $row['address'] ?>"><br>
	<input type="text" name="remember" value="<?php echo $row['remember_token'] ?>"><br>
	<input type="text" name="created_at" value="<?php echo $row['created_at'] ?>"><br>
	<input type="text" name="updated_at" value="<?php echo $row['updated_at'] ?>"><br>
	<input type="submit" value="Sua">
</form>

