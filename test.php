<?php
session_start();ob_start();
require_once("dbcon.php");
  // Các giá trị dược lưu trong biến $_POST
  // Kiểm tra nếu được post
  if($_POST) {
      // Đưa dữ liệu vào các biến
  	$name 		= $_POST['username']; 
		$email 		= $_POST['email']; 
		
		$name=strip_tags(mysql_real_escape_string($name)); 
		$email=strip_tags(mysql_real_escape_string($email)); 
		
		
      // Phần xử lý 
        $sql = "SELECT * FROM user WHERE username='$name' AND email ='$email'"; 
		$member = mysql_query($sql);     
		if (mysql_num_rows($member)==1)//Thành công     
		{	
			$_SESSION['myname'] = $name; // Lưu name vào session
			echo '<p class="success">Chúc mừng bạn <span style="color:blue" >'.$_SESSION['myname'].'</span> đã đăng nhập thành công <br> 
				<a href="logout.php">Đăng xuất</a> !</p>'; 
		}
		else //Thất bại 
				echo '<p class="success">Username hoặc password không đúng !</p>';
			
					
  }
ob_end_flush();
?>
