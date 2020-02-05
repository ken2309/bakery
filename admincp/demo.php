<?php
include "connect.php";
$stm=$obj->query("select * from products");
$n = $stm->rowCount();
$data = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
</head>
<body>
	

	<hr>
	<table border="1">
		<tr>
			<td>STT</td>
			<td>Mã</td>
			<td>Tên bánh</td>
			<td>Phân loại</td>
			<td>Mô tả</td>
			<td>Giá</td>
			<td>Image</td>
			<td>new	</td>
			<td>Created</td>
			<td>Update</td>
			<td colspan="2">Thao tac</td>
		</tr>
		<?php
		foreach($data as $key =>$value)
		{
			?>
		<tr>
			<td><?php echo $key+1;?></td>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['name']?></td>
			<td><?php echo $value['id_type']?></td>
			<td><?php echo $value['description']?></td>
			<td><?php echo $value['unit_price']?></td>
			<td><?php echo $value['image']?></td>
			<td><?php echo $value['new']?></td>
			<td><?php echo $value['created_at']?></td>
			<td><?php echo $value['updated_at']?></td>
			<td>
				<a href="category_sua.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="category_xoa.php?id=<?php echo $value['id']?>"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <!---<a href="category_them1.php" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
				
			</td>
			
		</tr>
		<?php
	}
	?>
	</table>
</body>
</html>