<?php
	include ("auth.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DANGNHAP.KMA</title>

</head>

<body>
	<div class="form">
		<p>Xin chào  <?php echo $_SESSION['username']; ?></p>
		<p>TRANG CHỦ</p>
		
		<a href="logout.php">Đăng xuất</a>
	</div>
</body>
</html>