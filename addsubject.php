<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$host="localhost"; // luôn luôn là localhost 
$username="root"; // user của mysql 
$password=""; // Mysql password 
$db_name="subject"; // tên database 
$tbl_name="subject"; // tên table 
// kết nối cơ sở dữ liệu 
mysql_connect("$host", "$username", "$password")or die("Eror connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 
if(isset($_POST['Thêm'])){
$mamonhoc = $_POST['mamonhoc'];
$tenmonhoc = $_POST['tenmonhoc'];
$sotinchi = $_POST['sotinchi']
$sql = "SELECT * FROM $tbl_name where 'Ma Mon Hoc' ='".$mamonhoc."'";
$quer= mysql_query(sql);
if(mysql_num_rows($quer)!= ""){
  echo "Môn học đã tồn tại";
}
else{
$result ="INSERT INTO subject('Ma Mon Hoc' ,'Mon Hoc' ,'So Tin Chi')
VALUES ('".$mamonhoc."', '".$tenmonhoc."', '".$sotinchi."')";
$query = mysql_query($result);
if($query){
	echo "Đã thêm thành công";
}
else{
	echo "Error";
}

}
}

?>
