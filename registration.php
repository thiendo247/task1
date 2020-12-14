<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>THIENDO241 </title>
</head>

<body>
	<div class="form">
		<h1>ĐĂNG KÝ</h1>
		<form name="registration" action="" method="post">
		<input type="text" name="username" placeholder="Nhập tên đăng nhập" required />
		<input type="email" name="email" placeholder="Nhập email" required />
		<input type="password" name="password" placeholder="Nhập mật khẩu" required />
		<input type="submit" name="submit" value="Đăng ký" 	/>
		
		</form>
	</div>
	<?php
		require('db.php');
	if(isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn, $username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($conn, $email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);
		
		$trn_date = date("Y-m-d H:i:s");
		$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')"; //truy vấn csdl
		$result = mysqli_query($conn, $query);
		if($result){
			echo "<div class = 'form'><h3>Bạn đã đăng kí thành công</h3> <br/>Click để<a href = 'login.php' >Đăng nhập</a> </div>";
		}
		
	}
	else{
		
	}
	
	?>
</body>
</html>