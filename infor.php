<html>
 <head>
		<title>WEBSITE QUẢN LÝ ĐÀO TẠO</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			body {background: url(bg_2cwebvn.png);color:#00FF00; font-size:16px;}
			h2{margin:50px 0px 30px;}
		</style>
	</head>
	<body>
		<div id="containt" align="center">
		<font face="Bodoni" size="5" color="red">
		<center><h1>Thông Tin Cá Nhân Sinh Viên</h1></center>
		<table border=1>

			<tr>
				<td>
					<strong>Mã Sinh Viên</strong>
				</td>
				<td>
					<strong>Tên Sinh Viên</strong>
				</td>
				<td>
					<strong>Mật khẩu</strong>
				</td>
			</tr>
	
		<?php
			session_start();
			require_once("stuconnect.php");
			$query = "SELECT * FROM sinh_vien 
				WHERE ma_sinh_vien = '{$_SESSION['user_id']}'";
			$result = mysql_query($query);
			$data = mysql_fetch_array($result);
		?>

			<tr>
				<td>
					<?php echo $data['ma_sinh_vien'];?>
				</td>
				<td>
					<?php echo $data['ten_sinh_vien'];?>
				</td>
				<td>
					<?php echo $data['password'];?>
				</td>
			</tr>
	
		</table>
		<br/>
			<?php echo "<p><a href='stuindex.php'>
				Nhấp vào đây để quay trở lại trang chủ</a></p>";?>
	</body>
</html>
