<?php include 'main_header.php';?>
<?php require_once 'controllers/ValidationController.php';?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input name="name"type="text" class="form-control" value="<?php echo $name;?>">
			<span style="color: red;"><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input name="username" type="text" class="form-control" value="<?php echo $username;?>">
			<span style="color: red;"><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input name="email" type="text" class="form-control" value="<?php echo $email;?>">
			<span style="color: red;"><?php echo $err_email;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input name="password" type="password" class="form-control" value="<?php echo $password;?>">
			<span style="color: red;"><?php echo $err_password;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Sign Up" class="form-control" name="sign_up">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>