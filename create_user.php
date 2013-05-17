<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	require_once("connect.php");
	$mssv = $_POST['mssv'];
	$fullname = $_POST['fullname'];
	$password = $_POST['password'];
	if( ! $mssv || ! $fullname  || ! $password ) {
		echo "Xin vui lòng nhập đầy đủ các thông tin. ";
		echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
		exit;
	}else{
		$sql = "SELECT * FROM sinh_vien WHERE ma_sinh_vien = '{$mssv}'";
		$check= @mysql_query($sql);
		if( @mysql_num_rows($check) > 0){
			echo "Mã sinh viên này đã tồn tại";
			echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chủ</a></p>";
			exit;
		}else{
			$query = "INSERT INTO sinh_vien ( ma_sinh_vien, ten_sinh_vien, password )
					VALUES ( '{$mssv}', '{$fullname}', '{$password}' )";
			$result = @mysql_query($query);
			if($result){
				echo "Đã thêm thành công";
				echo "<p><a href='list_student.php'>Nhấp vào đây để xem danh sách sinh viên</a></p>";
				echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chủ</a></p>";
			}else{
				echo "Có lỗi xảy ra trong quá trình thao tác với CSDL.";
				echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
				echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chủ</a></p>";
				exit;
			}
		}
	}
?>
