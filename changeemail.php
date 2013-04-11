<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
session_start();
$host="localhost"; // luôn luôn là localhost 
$username="root"; // user của mysql 
$password=""; // Mysql password 
$db_name="test"; // tên database 
$tbl_name="member"; // tên table 
// kết nối cơ sở dữ liệu 
mysql_connect("$host", "$username", "$password")or die("Eror connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 
$myusername = $_SESSION['login_user'];
if(isset($_POST['Change2'])){
$myemail = $_POST['myemail'];
//$sql = "SELECT HoTen FROM $tbl_name WHERE username='$myusername'";
$result ="UPDATE $tbl_name SET email= '$myemail' WHERE username = '$myusername'";
$query = mysql_query($result);
if($query){
	echo "Đã thay đổi thành công";
}
else{
	echo "Error";
}
}
else{
	echo "Error";
}
?>
<tr> 
			<td  align="center"><a href='Logout.php'>Logout</a></td>
</tr>
