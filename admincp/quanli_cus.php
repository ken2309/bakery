<?php
include "connect.php";
$stm=$obj->query("select * from customer");
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
		<td> NAME</td>
		<td>Gender</td>
		<td>Email</td>
		<td>Address</td>
		<td>phone</td>
		
		<td>note</td>
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
			<td><?php echo $value['name']?></td>
			<td><?php echo $value['gender']?></td>
			<td><?php echo $value['email']?></td>
			<td><?php echo $value['address']?></td>
			<td><?php echo $value['phone_number']?></td>
			
			<td><?php echo $value['note']?></td>
			<td><?php echo $value['created_at']?></td>
			<td><?php echo $value['updated_at']?></td>
			<td>
				<a href="category_sua_cus.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="category_xoa_cus.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <!--<a href="category_them_cus.php" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
				
			</td>
	</tr>
		<?php
	}
	?>
</table>
</body>
</html>