<?php
 include 'inc/header.php';
 include 'db_config.php';
 include 'database.php' ;     
 ?>

<?php
  $id=$_GET['id'];
  $db=new Database();
   $query="SELECT * FROM user where id=$id";
   $getData= $db->select($query)->fetch_assoc();
  
 if(isset($_POST['submit']))
 {
 	$Name=mysqli_real_escape_string($db->link,$_POST['Name']);
 	$Email=mysqli_real_escape_string($db->link,$_POST['Email']);
 	$Skill=mysqli_real_escape_string($db->link,$_POST['Skill']);
 	if($Name==''|| $Email==''||$Skill==''){
 		$error="Field Can Not Be Empty ";
 	
 	}
 	else{
 		$query="DELETE FROM user WHERE Id=$id";
 		$delete=$db->delete($query);
 	}

 }
 
?>

<div>
	<a href="index.php"> Go Back </a>
	
	<form action="delete.php?id=<?php echo $id?>"class="frm" method="post">
		
		<span>Name:</span><input type="text" name="Name" value="<?php echo $getData['Name']?>" readonly><br>
		<?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
		<span>Email:</span><input type="text" name="Email" value="<?php echo $getData['Email']?>" readonly><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>

		<span>Skill :</span><input type="text" name="Skill" value="<?php echo $getData['Skill']?>" readonly><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
       <span><input style="background-color: red" type="submit" name="submit" value="Delete">  </span> 
	
    </form>
    
</div>

	




<?php include 'inc/footer.php' ?>