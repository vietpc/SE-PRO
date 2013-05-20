<?php
  session_start();
	// Tải file connect.php lên
	require_once("connect.php");
    // Dùng hàm addslashes() để tránh SQL injection
    $username =  addslashes($_POST['username']) ;
    $password =  addslashes($_POST['password']) ;
    // Lấy thông tin của username đã nhập trong table
    $sql_query = @mysql_query("SELECT * FROM admin WHERE name='{$username}'");
    $data = @mysql_fetch_array( $sql_query );
    // Nếu username này không tồn tại thì....
    if ( @mysql_num_rows( $sql_query ) < 1 )
    {
        echo "Tên truy nhập không tồn tại";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a>"<p/>;
        exit;
    }
    // Nếu username này tồn tại thì tiếp tục kiểm tra mật khẩu
    if ( $password != $data['password'] )
    {
        echo "Nhập sai mật khẩu";
		echo "<p><a href='javascript:history.go(-1)'>
			Nhấp vào đây để quay trở lại</a><p/>";
        exit;
    }
    // Khởi động phiên làm việc (session)
    $_SESSION['id_admin'] = $data['id'];
    // Thông báo đăng nhập thành công
    echo "Bạn đã đăng nhập thành công";
    header('location:index.php');
?>
