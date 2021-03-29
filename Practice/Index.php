<?php
 include 'inc/header.php';
 include 'db_config.php';
 include 'database.php' ;     
 ?>
<?php
  $db=new Database();
  $query="SELECT * FROM user";
  $read= $db->select($query);
?>
<div>

	<a  href="create.php">Insert </a>
	<span style="font-size:25px; color: green;padding-left: 240px;"><?php
      if(isset($_GET['msg']))
      {
      	echo"<span>".$_GET['msg']."</span>";
      }
	?></span>
<table class="tmain">
 <tr>
 	<th>Name</th>
 	<th>Email</th>
 	<th>Skill</th>
 	<th>Action</th>
 	
 </tr>
 <?php if($read){?>
   <?php while($row=$read->fetch_assoc()){ ?>
 <tr>
 	<td><?php echo $row['Name'];?></td>
 	<td><?php echo $row['Email'];?></td>
 	<td><?php echo $row['Skill'];?></td>
 	<td><a class="actionlink" href="update.php?id=<?php echo urlencode($row['Id']);?>">Edit</a>  |  <a style="color: red;" class="actionlink" href="delete.php?id=<?php echo urlencode($row['Id']);?>">Delete</a>
 	</td>

 	
 </tr>
<?php }?>
<?php }
  else {
?>
<p>no data</p>
<?php }?>
 
</table>
</div>

<?php include 'inc/footer.php' ?>