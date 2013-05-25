<?php
	session_start();
	// Tải file stuconnect.php dùng để liên kết đến CSDL
	require_once("stuconnect.php");
	// Lưu thông tin người dùng nhập vào từ form
	$mssv = $_POST['mssv'];
	$newname = $_POST['newname'];
	$newpass = $_POST['newpass'];
	if( ! $mssv ) {
		echo "Xin vui lòng nhập mã số sinh viên của bạn ";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='stuindex.php'>
			Nhấp vào đây để quay trở lại trang chu</a></p>";
		exit;
	}else{
		// Kiểm tra xem người dùng có nhập thông tin để thay đổi không
		if( !$newname && !$newpass ){
			echo "Hãy nhập tên mới hoặc mật khẩu mới bạn muốn thay vào form";
			echo "<p><a href='javascript:history.go(-1)'>
				Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='stuindex.php'>
				Nhấp vào đây để quay trở lại trang chu</a></p>";
			exit;
		}
		else 
		{
			// Kiểm tra xem người dùng có nhập đúng mssv không
			if ( $mssv != $_SESSION['user_id'] )
			{
				echo "Ma sô sinh viên bạn nhâp vào không đúng ";
				echo "<p><a href='javascript:history.go(-1)'>
					Nhấp vào đây để quay trở lại</a></p>";
				echo "<p><a href='stuindex.php'>
					Nhấp vào đây để quay trở lại trang chu</a></p>";
			}
			else{
				if( $newname && $newpass )
				{
					// Thay đổi thông tin trong CSDL
					$change = ("UPDATE sinh_vien 	
						SET ten_sinh_vien = '{$newname}',password = '{$newpass}'
						WHERE ma_sinh_vien = '{$mssv}'");
					$result = mysql_query($change);
					if ($result) {
						echo "Thay doi thanh cong.";
						echo "<p><a href='infor.php'>
							Nhấp vào đây để xem thông tin mới của bạn</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
					else {
						echo "Noi ket noi den co so duy lieu ";
						echo "<p><a href='javascript:history.go(-1)'>
							Nhấp vào đây để quay trở lại</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
				}else if( $newname && !$newpass ) 
				{
					// Thay đổi thông tin trong CSDL
					$change = ("UPDATE sinh_vien 
						SET ten_sinh_vien = '{$newname}' 
						WHERE ma_sinh_vien = '{$mssv}'");
					$result = mysql_query($change);
					if ($result) {
						echo "Thay doi thanh cong.";
						echo "<p><a href='infor.php'>
							Nhấp vào đây để xem thông tin mới của bạn</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
					else {
						echo "Noi ket noi den co so duy lieu ";
						echo "<p><a href='javascript:history.go(-1)'>
							Nhấp vào đây để quay trở lại</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
				}else 
				{
					// Thay đổi thông tin trong CSDL
					$change = ("UPDATE sinh_vien 
						SET password = '{$newpass}' 
						WHERE ma_sinh_vien = '{$mssv}'");
					$result = mysql_query($change);
					if ($result) {
						echo "Thay doi thanh cong.";
						echo "<p><a href='infor.php'>
							Nhấp vào đây để xem thông tin mới của bạn</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
					else {
						echo "Noi ket noi den co so duy lieu ";
						echo "<p><a href='javascript:history.go(-1)'>
							Nhấp vào đây để quay trở lại</a></p>";
						echo "<p><a href='stuindex.php'>
							Nhấp vào đây để quay trở lại trang chu</a></p>";
					}
				}
			}
		}
	}					
?>
