<?php
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$username=$_POST["username"];
		$password=$_POST["password"];
		if ($username == "Sadat" && $password=="123") {
			setcookie("username",$username,time()+120);
			header("Location: dashboard.php");
		}
		
	}


?>

<html>
   <div>
      <form action="" method="post"style="text-align:center; padding-top:300px" >
	     <span>Usename: <input type="text" name="username"  placeholder="username">
		 <br><br>
         <span>Password: <input type="password" name="password" placeholder="password">	  
		 <br><br>
		 <input type="submit" name="submit" value="Login" >
	  </form>
   </div>

</html>