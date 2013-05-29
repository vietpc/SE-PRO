<html>
	<head>
		<title>WEBSITE QUẢN LÝ ĐÀO TẠO</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
			body {background: url(bg_2cwebvn.png);color:#00FF00; font-size:16px;}
			h2{margin:50px 0px 30px;}
		</style>
	</head>
	<body>
		<center>
		<fieldset>
			<legend>Danh Sách Các Môn Học</legend>
			<table border=1>
	
				<tr>
					<td>
						<strong>Mã Môn Học</strong>
					</td>
					<td>
						<strong>Tên Môn Học</strong>
					</td>
					<td>
						<strong>Số Tín Chỉ</strong>
					</td>
				</tr>
	
				<?php
					require_once("connect.php");
					$query = "SELECT * FROM mon_hoc";
					// Truy vấn vào CSDL
					$result = mysql_query($query);
					while( $data = mysql_fetch_array($result))
					{
				?>

				<tr>
					<td>
						<?php echo $data['ma_mon_hoc'];?>
					</td>
					<td>
						<?php echo $data['ten_mon_hoc'];?>
					</td>
					<td>
						<?php echo $data['so_tin_chi'];?>
					</td>
				</tr>
		
				<?php
				}
				?>
	
			</table>
			<p><a href='index.php'>
				Nhấp vào đây để quay lại trang chủ</a></p>
		</fieldset>
		</center>
	</body>
</html>
