<?php
 include 'inc/header.php';
 include 'db_config.php';
 include 'database.php' ;     
 ?>

<?php
  $db=new Database();
  
 if(isset($_POST['submit']))
 {
 	$Name=mysqli_real_escape_string($db->link,$_POST['Name']);
 	$Email=mysqli_real_escape_string($db->link,$_POST['Email']);
 	$Skill=mysqli_real_escape_string($db->link,$_POST['Skill']);
 	if($Name==''|| $Email==''||$Skill==''){
 		$error="Field Can Not Be Empty ";
 	
 	}
 	else{
 		$query="INSERT INTO user(Name,Email,Skill) values('$Name','$Email','$Skill')";
 		$create=$db->insert($query);
 	}

 }
 
?>

<div>
	<a href="index.php"> Go Back </a>
	
	<form action="create.php"class="frm" method="post">
		
		<span>Name:</span><input type="text" name="Name" placeholder="input name"><br>
		<?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
		<span>Email:</span><input type="text" name="Email" placeholder="input email"><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>

		<span>Skill :</span><input type="text" name="Skill" placeholder="input skils"><br><?php
      if(isset($error))
      {
      	echo"<span style='color:red;'>".$error."</span>";
      }
	?><br>
       <span><input type="submit" name="submit" value="insert">  </span> <span><input type="reset" name="submit" value="clear"></span> 
	
    </form>
    
</div>

	




<?php include 'inc/footer.php' ?>