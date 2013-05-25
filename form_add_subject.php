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
		<form action="check_subject.php" method="post">                    
			<table align="centre" border="0"  id="table"
				style="margin-left-"150px";
				border-collapse:collapse; width:100%; ">

				<tr>                                    
					<td >
						<strong>Tên môn học</strong>  
						<br />
						<input name="monhoc" value="" type="text" />
					</td>
				</tr>
                               
				<tr>  
					<td>
						<strong>Mã số môn học</strong>
						<br />
						<input name="msmh" value="" type="text">
					</td>
				</tr>

				<tr>
					<td>
						<strong>Số tín chỉ</strong>
						<br />
						<input name="tinchi" value="" type="text">
					</td>
				</tr>
				
				<tr>
					<td>
						<input name="Them" value="Add" type="submit">
					</td>
				</tr>
                                
			</table>               
		</form>
		<p><a href='index.php'>Nhấp vào đây để quay lại trang chủ</a></p>
		</center>
	</body>
</html>

