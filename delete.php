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
	if(isset($_POST['Delete'])){
		$deluser = $_POST['deluser'];
		$result =  "DELETE FROM member WHERE username = '$deluser'";
		$query = mysql_query($result);
		if($query){
			header('location:admin.php');
		}
		else{
			echo "Chưa Xóa được";
		}
	}
	else{
		echo "Error connect";
	}
?>
