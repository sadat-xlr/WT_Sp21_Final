
<?php
require_once 'models/db_config.php';
$name="";
$err_name="";
if(isset($_POST['btn_addCategory'])){
	if(empty($_POST['name'])){
		$err_name="insert category name";
	}
	else{

		$name=htmlspecialchars($_POST['name']);
		insertCategory($name);
	}
}
 function insertCategory($name){
 	$query="insert into categories values(NULL,'$name')";
 	execute($query);
 	header("Location:allcategories.php");

 }
  function getCategory($id){
 	$query="SELECT * FROM 'categories' where id=$id)";
 	$result=get_data($query);
 	if(count($result)>0){
 		return $result[0];
 	}
 	return false;

 }
 function getAllCategory(){
 	$query="SELECT * FROM categories";
 	$result=get_data($query);
 
 	return $result;
 	


 }
   


?>