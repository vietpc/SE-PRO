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
		<div id="containt" align="center">
		<font face="Bodoni" size="5" color="red">
		<center><h1>TRANG ĐĂNG NHẬP</h1></center>
		<form action ="stucheck_login.php" method="post" >
			<table>
             
				<tr>
					<td>Mã số sinh viên:</td>
					<td> <input type="text" name="mssv" size="20"></td>
				</tr>
             
				<tr>
					<td>Mật khẩu:</td>
					<td><input type="password" name="password" size="20"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Đăng nhập"></td>
				</tr>

			</table>
		</form>
		<p><a href='form_take_pass.php'>Quên mật khẩu</a></p>
		</div>
	</body>
</html>
