<?php
  require_once 'models/db_config.php';
  $name="";
  $err_name="";
  $email="";
  $err_email="";
  $username="";
  $err_username="";
  $password="";
  $err_password="";
  
  $hasError=false;
  if(isset($_POST['sign_up'])){
  	if(empty($_POST['name'])||empty($_POST['username']) ||empty($_POST['email']) ||empty($_POST['password'])){
  		$hasError=true;
  		$err_name="field can not be empty ";
  		$err_username="field can not be empty";
  		$err_email="field can not be empty";
  		$err_password="field can not be empty";
  	}else{
  		
  		$name=htmlspecialchars($_POST['name']) ;
  		$username=htmlspecialchars($_POST['username']) ;
  		$email=htmlspecialchars($_POST['email']) ;
  		$password=htmlspecialchars($_POST['password']) ;
  	}
    if(!$hasError){
     insertUser($name,$username,$password,$email);

    }
   
  }
  if(isset($_POST['btn_login'])){
     if (authenticateUser($_POST['username'],$_POST['password'])) {
       header("Location:dashboard.php");
     }
     $err_msg ="ivalid username or password";
  }

   function insertUser($name,$username,$password,$email){
      $query="INSERT INTO users VALUES(NULL,'$name','$username','$password','$email')";
      execute($query);

    }
     function authenticateUser($username,$password){
      $query="SELECT * FROM users where username='$username' and password='$password'";
      $result=get_data($query);
      if(count($result)>0)
      {
        return $result[0];
      }else{
        return false;
      }
     }
?>