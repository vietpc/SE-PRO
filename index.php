<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Website đăng kí môn học cho sinh viên</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="2cwebvn" />
	<link type="text/css" href="style.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="localization/messages_vi.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			// Validate form
			$("#tutorial").validate({
				errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
				submitHandler: function(form) {
				
					// Validate thành công sẽ lấy dữ liệu từ form và gởi đến test.php
					var name        = $('#username').attr('value');
					var email       = $('#email').attr('value');
				 
					$.ajax({
						type: "POST", // phương thức gởi đi
						url: "test.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
						data: "username="+ name +"&email="+ email, // giá trị post
						success: function(answer){ // if everything goes well
							$('form#tutorial').hide(); // ẩn form đi
							$('div.success').fadeIn(); // hiển thị thẻ div success
							$('div.success').html(answer); // đặt kết quả trả về từ test.php vào thẻ div success
						}
					});
					return false;  // Form sẽ không chuyển đến trang test.php
					 
				 }
			});
		});
</script>
</head>
<body>
<center>

	<table width="500"  border="1" cellspacing="2" cellpadding="1" bgcolor = "white" bordercolor="green" style="border-width:medium" >
	   <tr><td><div align="center" id="dangnhap" ><h2>Đăng nhập vào hệ thống</h2></div><td></tr>
           <tr><td>
<form id="tutorial" action="test.php" method="post">
<fieldset><legend> Student login </legend>
    
    Username:<input placeholder = "enter username" type = "text" name" = "username"><p>
    
    Password:<input placeholder = "enter password" type = "password" name "password"><p>
    <p class="submit"><input id="submit" type="submit" value="Send" /></p>
</fieldset>
</center>
</form>
<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
</body>
</html>



