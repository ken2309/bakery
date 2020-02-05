
	<?php
include "connect.php";?>
<form action="category_them.php" method="post">
		Mã      <br><input type="text" name="id"><br>
		Tên bánh<br><input type="text" name="name"><br>
		Phân loại<br><input type="text" name="loai"><br>
		Mô tả<br><input type="text" name="mota"><br>
		Giá<br><input type="text" name="gia"><br>
		Image<br><input type="file" name="image"><br>
		New<br><input type="text" name="new"><br>
		Created<br><input type="text" name="cre"><br>
		Update<br><input type="text" name="upd"><br>
		<input type="submit" name="sm" value="Insert">
	</form>

