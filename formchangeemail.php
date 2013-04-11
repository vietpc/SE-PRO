
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<td><strong>
<html>
<body >
<p align ="center" style ="margin-left: 10; margin-right: 5; margin-top: 10; margin-bottom: 1">THAY ĐỔI THÔNG TIN CÁ NHÂN</p>
</body>
</html>
 </strong></td>
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
$sql_select = "SELECT * FROM $tbl_name WHERE username='$myusername'"; 
$query = mysql_query($sql_select); 
$result = mysql_fetch_assoc($query); 
?>
<table width="0%" border ="0"  align="center"  style ="margin-top:30; margin-bottom: 30 "cellpadding="4" cellspacing ="4" bgcolor ="#FFFFFF">
<form name ="form1" method="post" action="changename.php">
<tr>
<td width ="70" align="center"><b>Full Name</b></td>
<td width = "2">:</td>
<td width ="70" ><?php echo $result['HoTen']; ?></td>
<td><input type ="submit" name="Change1" value ="Change"></td>
</tr>
</form>
<form>
<td width ="70" align="center"><b>Email</b></td>
<td width = "2">:</td>
<td width ="70"  ><?php echo $result['email']; ?></td>
</form>
<form name ="form2" method="post" action="changeemail.php">
<tr>
<td width ="70" align="center"><b>New Email</b></td>
<td width = "">:</td>
<td width ="294" ><input name= "myemail" type="text" id="myemail"></td>
<td><input type ="submit" name="Change2" value ="Submit"></td>
</tr>
</form>
<form name ="form3" method="post" action="changepass.php">
<tr>
<td width ="70" align="center"><b>Password</b></td>
<td width = "2">:</td>
<td width ="70" ><?php echo $result['password']; ?></td>

<td><input type ="submit" name="Change3" value ="Change"></td>
</tr>
</form>
</table>