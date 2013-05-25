<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	require_once("connect.php");
	// Lấy thông tin người dùng đã nhập từ form
	$mssv = $_POST['mssv'];
	if( ! $mssv) {
		echo "Xin vui lòng nhập mã số sinh viên của sinh viên cần xóa.";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='index.php'>
			Nhấp vào đây để quay trở lại trang chủ</a></p>";
        exit;
	}else{
		$sql = "SELECT * FROM sinh_vien WHERE ma_sinh_vien = '{$mssv}'";
		// Truy vấn đến CSDL lấythông tin về người dùng
		$check= @mysql_query($sql);
		// Kiểm tra xem dữ liệu có tồn tại trong CSDL không
		if( @mysql_num_rows($check) < 1 ){
			echo "Mã số sinh viên này không tồn tại";
			echo "<p><a href='javascript:history.go(-1)'>
				Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='index.php'>
				Nhấp vào đây để quay trở lại trang chủ</a></p>";
			exit;
		}else{
			$query ="DELETE FROM sinh_vien WHERE ma_sinh_vien = '{$mssv}'";
			// Lấy thông tin trong CSDL
			$result = @mysql_query($query);
			if($result){
				echo "Đã xóa thành công";
				echo "<p><a href='list_student.php'>
					Nhấp vào đây để xem danh sách các sinh viên</a></p>";
                echo "<p><a href='index.php'>	
					Nhấp vào đây để quay trở lại trang chủ</a></p>";
				exit;
			}else{
				echo "Có lỗi xảy ra trong quá trình thao tác với CSDL.";
				echo "<p><a href='javascript:history.go(-1)'>
					Nhấp vào đây để quay trở lại</a></p>";
                echo "<p><a href='index.php'>
					Nhấp vào đây để quay trở lại trang chu</a></p>";
				exit;
			}
		}
	}
?>
