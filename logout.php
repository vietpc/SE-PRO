<html>
<head>
  <title>WEBSITE DANG KI MON HOC</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
</head>
	<style>
	body {background: url(bg_2cwebvn.png);color:#00FF00; font-size:16px;}
	h2{margin:50px 0px 30px;}
	</style>
<body>
		<font face="Bodoni" size="5" color="red">
		<center><h1> BẢNG ĐĂNG KÍ MÔN HỌC </h1></center>
	<center>

<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('không thể kết nối tới database: ' . mysql_error());
	}

	mysql_select_db("subject",$con) or  die ("không chọn được database");
	$result = mysql_query("SELECT * FROM subject");
	if(mysql_num_rows($result)){
		echo "<table boder = '1' cellpadding = '5px'>
		<tr> <th>STT</th>	<th>Ma Mon Hoc</th>  <th>Mon Hoc</th><th>So Tin Chi</th></tr>";
		
		while($row = mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row['STT']."</td>";
			echo "<td>".$row['Ma Mon Hoc']."</td>";
			echo "<td>".$row['Mon Hoc']."</td>";
			echo "<td>".$row['So Tin Chi']."</td>";
			echo "<tr>";
		}
		echo "</table>";
		}
	
	
?>

	



<p align style ="margin-left: 10; margin-right: 5; margin-top: 20; margin-bottom: 0"><a href='subject.php'><strong>Thêm Môn Học</strong></p>
</center>
</body>
</html>
