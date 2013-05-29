<?php
	require_once("connect.php");
	$msmh = $_POST['msmh'];
	if( ! $msmh) {
		echo "Xin vui lòng nhập mã số môn học cần xóa.";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='index.php'>
			Nhấp vào đây để quay trở lại trang chủ</a></p>";
        exit;
	}else{
		$sql = "SELECT * FROM mon_hoc WHERE	 ma_mon_hoc = '{$msmh}'";
		$check = @mysql_query($sql);
		$result = @mysql_num_rows($check);
		if( $result <= 0 ){
			echo "Mã số môn học này không tồn tại";
			echo "<p><a href='javascript:history.go(-1)'>
				Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='index.php'>
				Nhấp vào đây để quay trở lại trang chủ</a></p>";
			exit;
		}else{
			$query = "DELETE FROM mon_hoc WHERE ma_mon_hoc = '{$msmh}'";
			$effect = @mysql_query($query);
			if($effect){
				echo "Đã xóa thành công";
                echo "<p><a href='list_subject.php'>
					Nhấp vào đây để xem danh sách các môn học</a></p>";
                echo "<p><a href='index.php'>
					Nhấp vào đây để quay trở lại trang chủ</a></p>";
			}else{
				echo "Có lỗi xảy ra trong quá trình thao tác vói CSDL.";
				echo "<p><a href='javascript:history.go(-1)'>
					Nhấp vào đây để quay trở lại</a></p>";
                echo "<p><a href='index.php'>
					Nhấp vào đây để quay trở lại trang chủ</a></p>";
                exit;
			}
		}
	}
?>
