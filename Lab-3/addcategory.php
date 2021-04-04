<?php include 'admin_header.php';
require_once 'controllers/CategoryController.php'?>

<!--addproduct starts -->
	<div class="center">
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control" name="name">
				<span style="color: red;"><?php echo $err_name;?></span>
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Add Category" class="form-control" name="btn_addCategory">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>