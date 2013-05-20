<?php
  session_start();
	// Hủy session()
	if (session_destroy()) 
		echo "Thoát thành công!";
	else
		echo "Không thể thoát được, có lỗi trong việc hủy session";
?>
