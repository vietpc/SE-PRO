<?php
	require_once("stuconnect.php");
	$mssv = $_POST['mssv'];
	$password = $_POST['password'];
	$query = "SELECT * FROM sinh_vien WHERE ma_sinh_vien = $mssv";
	// Truy vấn đến CSDL 
	$result = mysql_query ($query);
	if ( @mysql_num_rows( $result ) < 1 )
    {
		echo "Mã sinh viên bạn nhập không tồn tại";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a></p>";
	} else 
	{
		$change = ("UPDATE sinh_vien 	
					SET password = '{$password}'
					WHERE ma_sinh_vien = '{$mssv}'");
		$result = mysql_query($change);
		if ($result) {
			echo "Thay doi thanh cong.";
			echo "<p><a href='stuform_login.php'>
				Nhấp vào đây để quay trở lại đăng nhập</a></p>";
		} else
		{
			echo "Có lỗi trong quá trình truy cập CSDL";
			echo "Hệ thống chưa thể cấp lại mật khẩu mới cho bạn";
			echo "<p><a href='javascript:history.go(-1)'>
				Nhấp vào đây để quay trở lại</a></p>";
		}
	}
?>
