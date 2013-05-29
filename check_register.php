<?php
	session_start();
	require_once("stuconnect.php");
	$number = $_POST['group'];
	if(empty($number)) 
	{
		echo "Ban đã không đăng ký môn học nào";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để đăng ký lại</a></p>";
		echo "<p><a href='stuindex.php'>
			Nhấp vào đây để quay trở lại trang chủ</a></p>";
	} 
	else
	{
		$N = count($number);
		for($i=0; $i < $N; $i++)
		{
			
		}
	}
?>
