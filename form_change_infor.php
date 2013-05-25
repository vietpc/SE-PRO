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
		<font face="Bodoni" size="5" color="red">
		<center><h1> BẢNG THÊM MÔN HỌC</h1></center>
		<center>
		<form action = "check_change_infor.php" method = "post">
			<table align="centre" border="0"  id="table" 
				style="margin-left-"150px";
				border-collapse:collapse; width:100%; ">

				<tr>                                    
					<td >
						<strong>Nhập mã số sinh viên</strong>  
						<br />
						<input name="mssv" value="" type="text" />
					</td>
				</tr>

				<tr>                                    
					<td >
						<strong>Nhập tên mới</strong>  
						<br />
						<input name="newname" value="" type="text" />
					</td>
				</tr>

				<tr>                                    
					<td >
						<strong>Nhập mật khẩu mới</strong>  
						<br />
						<input name="newpass" value="" type="text" />
					</td>
				</tr>
								
				<tr>                                    
					<td >
						<input name="change" value="Change" type="submit" />
					</td>
				</tr>

			</table>
			<br/>
			<p><a href='stuindex.php'>Nhấp vào đây để quay lại trang chủ</a></p>
		</form>
	</body>
</html>
