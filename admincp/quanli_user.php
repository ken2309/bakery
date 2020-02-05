<?php
include "connect.php";
$stm=$obj->query("select * from users");
$n = $stm->rowCount();
$data = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>quản lí</title>
</head>
<body>
	<table  border="1">
	<tr>
		<td>STT</td>
		<td>ID</td>
		<td>FULL NAME</td>
		<td>Email</td>
		<td>Password</td>
		<td>phone</td>
		<td>Address</td>
		<td>remember_token</td>
		<td>created_at</td>
		<td>updated_at</td>
		<td>Chức năng</td>
	</tr>
	<tr>
		<?php
		foreach($data as $key =>$value)
		{
			?>
		<tr>
			<td><?php echo $key+1;?></td>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['full_name']?></td>
			<td><?php echo $value['email']?></td>
			<td><?php echo md5($value['password'])?></td>
			<td><?php echo $value['phone']?></td>
			<td><?php echo $value['address']?></td>
			<td><?php echo $value['remember_token']?></td>
			<td><?php echo $value['created_at']?></td>
			<td><?php echo $value['updated_at']?></td>
			<td>
				<a href="category_sua_user.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="category_xoa_user.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <!--<a href="category_user.php" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
				
			</td>
	</tr>
		<?php
	}
	?>
</table>
</body>
</html>