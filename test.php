<?php
  require_once("connect.php");
	$monhoc = $_POST['monhoc'];
	$msmh = $_POST['msmh'];
	$tinchi = $_POST['tinchi'];
	if( !$monhoc || !$msmh || !$tinchi ) {
		echo "Xin vui lòng nhập đầy đủ các thông tin. ";
		echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
		echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chủ</a></p>";
	}else {
		$sql = "SELECT * FROM mon_hoc WHERE ma_mon_hoc = '{$msmh}'";
		$check = @mysql_query($sql);
		$result = @mysql_num_rows($check);
		if( $result > 0 ){
			echo "Môn học đã tồn tại";
			echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
			echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chủ</a></p>";
			exit;
		}else{
			$query ="INSERT INTO mon_hoc (ma_mon_hoc , ten_mon_hoc , so_tin_chi)
					VALUES ('{$msmh}' , '{$monhoc}' , '{$tinchi}')";
			$result = @mysql_query($query);
			if($result){
				echo "Đã thêm thành công";
                echo "<p><a href='list_subject.php'>Nhấp vào đây để xem danh sach cac mon hoc</a></p>";
                echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
			}else{
				echo "Co loi xay ra trong qua trinh thao tac voi CSDL.";
				echo "<p><a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a></p>";
                echo "<p><a href='index.php'>Nhấp vào đây để quay trở lại trang chu</a></p>";
				exit;
			}
		}
	}
?>
