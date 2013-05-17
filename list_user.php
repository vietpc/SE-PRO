<html>
	<head>
		<title>WEBSITE QUAN LY DAO TAO</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
			body {background: url(bg_2cwebvn.png);color:#00FF00; font-size:16px;}
			h2{margin:50px 0px 30px;}
		</style>
	</head>
	<body>
		<center>
		<fieldset>
			<legend>Danh Sách Các Sinh Viên</legend>
			<table border=1>

				<tr>
					<td>
						<strong>Mã Số Sinh Viên</strong>
					</td>
					<td>
						<strong>Họ Và Tên Sinh Viên</strong>
					</td>
					<td>
						<strong>Password</strong>
					</td>
				</tr>
	
				<?php
					require_once("connect.php");
					$query = "SELECT * FROM sinh_vien";
					$result = mysql_query($query);
					while( $data = mysql_fetch_array($result))
					{
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
		
				<?php
				}
				?>
	
			</table>
			<p><a href='index.php'>Nhấp vào đây để quay lại trang chủ</a></p>
		</fieldset>
		</center>
	</body>
</html>
