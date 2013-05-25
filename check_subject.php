1<?php
  // Tải file connect.php dùng để liên kết đến CSDL
	require_once("connect.php");
	// Lưu thông tin người dùng nhập vào từ form
	$monhoc = $_POST['monhoc'];
	$msmh = $_POST['msmh'];
	$tinchi = $_POST['tinchi'];
	// Kiểm tra xem người dùng có nhập đầy đủ thông tin không
	if( !$monhoc || !$msmh || !$tinchi ) {
		echo "Xin vui lòng nhập đầy đủ các thông tin. ";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='index.php'>
			Nhấp vào đây để quay trở lại trang chủ</a></p>";
	}else {
		$sql = "SELECT * FROM mon_hoc WHERE ma_mon_hoc = '{$msmh}'";
		// Tạo liên kết vào CSDL để lấy dữ liệu
		$check = @mysql_query($sql);
		// Kiểm tra xem thông tin người dùng nhập vào có trong CSDL không
		$result = @mysql_num_rows($check);
		if( $result > 0 ){
			echo "Môn học đã tồn tại";
			echo "<p><a href='javascript:history.go(-1)'>
				Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='index.php'>
				Nhấp vào đây để quay trở lại trang chủ</a></p>";
			exit;
		}else{
			$query ="INSERT INTO mon_hoc (ma_mon_hoc , ten_mon_hoc , so_tin_chi)
					VALUES ('{$msmh}' , '{$monhoc}' , '{$tinchi}')";
			// Bổ sung thông tin vào CSDL
			$result = @mysql_query($query);
			if($result){
				echo "Đã thêm thành công";
                echo "<p><a href='list_subject.php'>
					Nhấp vào đây để xem danh sach cac mon hoc</a></p>";
                echo "<p><a href='index.php'>
					Nhấp vào đây để quay trở lại trang chu</a></p>";
			}else{
				echo "Co loi xay ra trong qua trinh thao tac voi CSDL.";
				echo "<p><a href='javascript:history.go(-1)'>
					Nhấp vào đây để quay trở lại</a></p>";
                echo "<p><a href='index.php'>
					Nhấp vào đây để quay trở lại trang chu</a></p>";
				exit;
			}
		}
	}
?>
