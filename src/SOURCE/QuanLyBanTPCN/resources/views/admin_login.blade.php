<!DOCTYPE html>
<html>
<head>
	<title>Quản lý Admin | Login</title>
    <!-- //css -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/login-style.css')}}">
    
    <!-- //google-font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
	
    <!-- //font-awesome icons -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="public/backend/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="public/backend/images/admin-bg.svg">
		</div>
		<div class="login-content">
			<form action="{{URL::to('/admin-dashboard')}}" method="post">
                {{ csrf_field() }}

				<img src="public/backend/images/avatar.svg">
				<h2 class="title">Đăng nhập <span>Admin</span></h2>
                
                <?php
		            $message = Session::get('message');
		            if($message){
		            	echo '<span class="text-alert">',$message,'</span>';
		            	session::put('message',null);
		            }
	            ?>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Gmail</h5>
           		   		<input type="email" class="input"  name="admin_email" required="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mật khẩu</h5>
           		    	<input type="password" class="input" name="admin_password" required="">
            	   </div>
            	</div>
            	<a href="#">Quên mật khẩu</a>
            	<input type="submit" class="btn" value="Đăng nhập">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('public/backend/js/login-script.js')}}"></script>
</body>
</html>
