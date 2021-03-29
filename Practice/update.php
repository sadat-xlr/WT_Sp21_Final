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
  
 if(isset($_POST['update']))
 {
 	$Name=mysqli_real_escape_string($db->link,$_POST['Name']);
 	$Email=mysqli_real_escape_string($db->link,$_POST['Email']);
 	$Skill=mysqli_real_escape_string($db->link,$_POST['Skill']);
 	if($Name==''|| $Email==''||$Skill==''){
 		$error="Field Can Not Be Empty ";
 	
 	}
 	else{
 		$query="UPDATE user
                SET Name = '$Name', Email= '$Email',Skill='$Skill'
                WHERE Id = $id;";
 		$update=$db->update($query);
 	}

 }
 
?>

<div>
	<a href="index.php"> Go Back </a>
	
	<form action="update.php?id=<?php echo $id?>"class="frm" method="post">
		
		<span>Name:</span><input type="text" name="Name" value="<?php echo $getData['Name']?>"><br>
		<?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
		<span>Email:</span><input type="text" name="Email" value="<?php echo $getData['Email']?>"><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>

		<span>Skill :</span><input type="text" name="Skill" value="<?php echo $getData['Skill']?>"><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
       <span><input type="submit" name="update" value="Update">  </span> <span><input type="reset" name="submit" value="clear"></span> 
	
    </form>
    
</div>

	




<?php include 'inc/footer.php' ?>