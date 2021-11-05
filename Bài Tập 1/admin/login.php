
<?php


if(!isset($_SESSION)) session_start();
	
	

	$u=isset($_POST['u'])?$_POST['u']:'';
	$p= isset($_POST['p'])?$_POST['p']:'';
	
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		
		
		if ($u == 'admin' && $p =='123456')
		{
			$_SESSION['admin'] = $u;
			header('location:index.php');		
			exit;
		}
		else{
			header('location:login.html');		
				exit;	
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                
			}
		
?>
		