<?php
include"db_config.php";
$db_con=mysqli_connect($db_server,$db_user,$db_pass,$db_name);	

$username="";
$username_err="";
$password="";
$password_err="";
$login_err="";
     
	 
        if($_SERVER['REQUEST_METHOD']=='POST')
		{
            
            if(empty($_POST["username"])||empty($_POST["password"])){
                $username_err="Username Required";
                $password_err="password Required";
            }
            
           
			
               
		    else if(isset($_POST["submit"]))
				{
			         $username=htmlspecialchars($_POST["username"]);
			         $password=htmlspecialchars($_POST["password"]);
			         $query="select UserName,Password from admin where UserName='".$username."' and Password='".$password."'";
			         $result= mysqli_query($db_con,$query);
			         if(mysqli_num_rows($result)==0)
					 {
						  $login_err="Invaild entry";
					
				    
					 }
					 else{
				       header("Location:Dashboard.php");
					 
					 exit();
			         }
		
				}	 
			
			
		}
            
            
		
	
  
  
?>

<html>
   <div>
      <form action="" method="POST"style="text-align:center; padding-top:300px" >
          <h2>LOGIN</h2>   	    
		<span>Usename: <input type="text" name="username"  placeholder="username">
		 <br><span style="color:red;"><?php echo "$username_err"?></span><br>
         <span>Password: <input type="password" name="password" placeholder="password">	  
		 <br><span style="color:red;"><?php echo "$password_err"?></span><br>
		 <span><span style="color:red;"><?php echo "$login_err"?></span><br><br>
		 <input type="submit" name="submit" value="Login">
	  </form>
   </div>

</html>