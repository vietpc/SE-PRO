<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
  $host="localhost"; // luôn luôn là localhost 
	$username="root"; // user của mysql 
	$password=""; // Mysql password 
	$db_name="test"; // tên database 
	$tbl_name="member"; // tên table 
	// kết nối cơ sở dữ liệu 
	mysql_connect("$host", "$username", "$password")or die("Error connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	if(isset($_POST['Create'])){
		$msv = $_POST['msv'];
		$fullname = $_POST['fullname'];
		$newusername = $_POST['newusername'];
		$newuseremail = $_POST['newuseremail'];
		$newuserpass = $_POST['newuserpass'];
		$result =  "INSERT INTO member (MSV, username, password,email,HoTen)
		VALUES 
		('$msv', '$fullname', '$newusername','$newuseremail','newuserpass')";
		$query = mysql_query($result);
		if($query){
			echo "Đã thêm thành công";
		}
		else{
			echo "Error";
		}
	}
	else{
		echo "Error";
	}
?>
