<?php
	session_start();
	// Tải file stuconnect.php lên
	require_once("stuconnect.php");
	$mssv = $_POST['mssv'];
	$newname = $_POST['newname'];
	$newpass = $_POST['newpass'];
	if( ! $mssv ) {
		echo "Xin vui lòng nhập mã số sinh viên của bạn ";
		echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='stuindex.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
		exit;
	}else{
		if( !$newname || !$newpass ){
			echo "Hãy nhập tên mới bạn muốn thay hoặc mật khẩu mới bạn muốn thay vào form";
			echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='stuindex.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
			exit;
		}
		else 
		{
			$sql_query = @mysql_query("SELECT* FROM sinh_vien WHERE ma_sinh_vien ='{$mssv}'");
			if ( @mysql_num_rows( $sql_query ) <= 0 )
			{
				echo "Ma so sinh vien ban nhập không tồn tại.";
				echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
				echo "<p><a href='stuindex.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
			}
			else{
				$result = @mysql_query("UPDATE sinh_vien SET ten_sinh_vien = '{$newname}',password = '{$password}' WHERE ma_sinh_vien = '{$mssv}'");
				if ($result) {
					echo "Thay doi thanh cong.";
					echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
					echo "<p><a href='stuindex.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
				}
				else {
					echo "Noi ket noi den co so duy lieu ";
					echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
					echo "<p><a href='stuindex.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
				}
			}
		}
	}					
?>
