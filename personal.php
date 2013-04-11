<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<tr> 
         
         
                    <td  valign="top" bgcolor="white" style="padding-left:20px; padding-right:20px;" >     
       
         <h3 align='center'><p>:: THÔNG TIN SINH VIÊN ::</h3> 
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
		// username và password được gửi từ form đăng nhập 
		//$myusername=$_POST['myusername']; 
        $sql_select = "SELECT * FROM $tbl_name WHERE username='$myusername'"; 
        $query = mysql_query($sql_select); 
        $result = mysql_fetch_assoc($query); 
       ?> 
           <table border="0" align="center" cellpadding="5"  style="border-bottom:#0e6ea0 solid 1px; border-top:#0e6ea0 solid 1px; border-left:#0e6ea0 solid 1px; border-right:#0e6ea0 solid 1px;"> 
             <tr> 
               <td  width='40%'><b>MSV:</b></td> 
               <td  ><?php echo $result['MSV']; ?></td> 
          </tr> 
             <tr> 
               <td  ><b>Full Name:</b></td> 
               <td  ><?php echo $result['HoTen']; ?></td> 
          </tr> 
             <tr> 
               <td ><b>Email:</b></td> 
               <td ><?php echo $result['email']; ?></td> 
          </tr> 
          <tr> 
			<td ><a href='Logout.php'>Logout</a></td>
             <td colspan='2' align='center'><a href="action.php">Setting accout</a></td> 
            </tr> 
        </table> 
         
    
</td>  
</tr> 
               