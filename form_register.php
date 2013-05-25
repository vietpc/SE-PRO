<html>
    <head>
		<title>WEBSITE QUAN LƯ ĐÀO TAO</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			body {background: url(bg_2cwebvn.png);color:#00FF00; font-size:16px;}
			h2{margin:50px 0px 30px;}
		</style>
	</head>
	<body>
		<form action = "check_register.php" method = "post">
			<div id="containt" align="center">
			<font face="Bodoni" size="5" color="red">
			<center><h1>Bang Đang Kư Môn Hoc </h1></center>
			<table border=1>
	
				<tr>
					<td>
					</td>
					<td>
						<strong>Mă Môn Hoc</strong>
					</td>
					<td>
						<strong>Tên Môn Hoc</strong>
					</td>
					<td>
						<strong>So Tín Chi</strong>
					</td>
				</tr>
	
			<?php
				require_once("stuconnect.php");
				$query = "SELECT * FROM mon_hoc";
				$result = mysql_query($query);
				$i = 0;
				while( $data = mysql_fetch_array($result))
				{
			?>

				<tr>
					<td>
						<input type = "checkbox" name = "group[$i++]" 
							value = <?php $data['ma_mon_hoc']?> >
					</td>
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
			<br/>
			<input type="submit" name="submit" value="Dang ky" />
			<br/>
			<p><a href='stuindex.php'>
			Nhap vào dây de quay lai trang chu</a></p>
		</form>
	</body>
</html>
