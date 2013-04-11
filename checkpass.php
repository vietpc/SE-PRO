<?php 

session_start();
$host="localhost"; // luôn luôn là localhost 
$username="root"; // user của mysql 
$password=""; // Mysql password 
$db_name="test"; // tên database 
$tbl_name="member"; // tên table 
// kết nối cơ sở dữ liệu 
mysql_connect("$host", "$username", "$password")or die("Error connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$myusername=$_POST['myusername']; 
$myusername = stripslashes($myusername); 
$myusername = mysql_real_escape_string($myusername); 
$myemail=$_POST['myemail']; 
$myemail = stripslashes($myemail); 
$myemail = mysql_real_escape_string($myemail); 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' AND email ='$myemail' "; 
$result=mysql_query($sql); 
$count=mysql_num_rows($result); 
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count 
if($count==1){
	$from = 'admin@gmail.com';
	$to = '$myemail';
	$subject = 'New password';
	$message = '123456';
	$header = "From: $from\r\nReply-to: $from";
  
	echo "Please check your email , to get your password";
} 
else {
	echo "Are you $myusername ?";
} 	

?>
