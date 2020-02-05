
<?php 

$conn;
function connect(){
	$conn = mysqli_connect('localhost','root','','banhang') or die('Không thể kết nối!');
	return $conn;
}
function disconnect($conn){
	mysqli_close($conn);
}

// function hien_sanpham($m){
// 	$_GET['masp'] = $m;
// 	require_once 'sanpham.php';
// }

function get_3_newest(){
	$conn = connect();
	mysqli_set_charset($conn, 'utf8');
	$sql = "SELECT * FROM products ORDER BY created_at desc LIMIT 4";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	while ($row = mysqli_fetch_assoc($result)) {
		if($i == 3){ ?>
		<div class='item active'>
			<img src="<?php echo $row['image'] ?>">
			<div class='container'>
				<div class='carousel-caption'>
					<p><a class='btn btn-md btn-primary' href='order.php?masp=<?php echo $row['id'] ?>' role='button'>Mua ngay</a></p>
				</div>
			</div>
		</div>
		<?php } else { ?>
		<div class='item'>
			<img src="<?php echo $row['image'] ?>">
			<div class='container'>
				<div class='carousel-caption'>
					<p><a class='btn btn-md btn-primary' href='order.php?masp=<?php echo $row['id'] ?>' role='button'>Mua ngay</a></p>
				</div>
			</div>
		</div>
		<?php }
		$i++;
	}
	disconnect($conn);
}



?>

