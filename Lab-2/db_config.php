<?php
  
  $server="localhost";
  $user="root";
  $pass="";
  $db_name="practice";
  $con=mysqli_connect($server,$user,$pass,$db_name);
  
  function crud($query){
	  global $serever,$user,$pass,$db_name;
	  $con=mysqli_connect($serever,$user,$pass,$db_name);
	  mysqli_query($conn,$query);
  }
  function get_data($query){
	  global $serever,$user,$pass,$db_name;
	  $con=mysqli_connect($serever,$user,$pass,$db_name);
	  $result=mysqli_query($con,$query);
	  $data=[];
	  if(mysqli_num_rows($result)>0){
		  while($row=mysqli_fetch_assoc($result)){
			  $data[]=$row;
		  }
	  }
	  return $data;
  }


?>