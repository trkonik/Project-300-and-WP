<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/login/css/style.css">
	<link href="<?=base_url()?>assets/admin/login/https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="<?=base_url()?>assets/admin/login/https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?=base_url()?>assets/admin/login/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?=base_url()?>assets/admin/login/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
			<?=$this->session->flashdata('message')?>
				<img src="<?=base_url()?>assets/admin/login/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="EMAIL">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="PASSWORD">
            	   </div>
            	</div>
            	<!--<a href="#">Forgot Password?</a>-->
            	<input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/login/js/main.js"></script>
</body>
</html>
