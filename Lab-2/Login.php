<?php

  session_start();
 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: dashboard.php");
    exit;
}

  
  require_once "db_config.php";
  $username = $password = "";
  $username_err = $password_err = $login_err = "";
  $sql = "SELECT id FROM admin WHERE UserName = '$username' and Password = '$password'";
  get_data($sql);
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	    
		if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
        }
		else{
           $username = trim($_POST["username"]);
        }
	    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
        }
	    else{
        $password = trim($_POST["password"]);
        }
    
		
	}


?>

<html>
   <div>
      <form action="" method="post"style="text-align:center; padding-top:300px" >
	     <span>Usename: <input type="text" name="username"  placeholder="username">
		 <br><span><?php echo "$username_err"?></span><br>
         <span>Password: <input type="password" name="password" placeholder="password">	  
		 <br><span><?php echo "$password_err"?></span><br>
		 <input type="submit" name="submit" value="Login" >
	  </form>
   </div>

</html>