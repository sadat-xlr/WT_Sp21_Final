<html lang="en">
<head>
    <title>Insert Student</title>
</head>
<body>
    <?php
       
        include"db_config.php";
       
  	    $dname="";
		$did="";
		$err_id="";
        $err_name="";
		
		
		$notification="";
       
    

      

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["dname"])||empty($_POST["did"])){
                $err_name="Required";
               
				$err_id="ID required";
				
            }
            
            else if(isset($_POST["submit"])){
               
			    $dname=htmlspecialchars($_POST["dname"]);
				
				$did=htmlspecialchars($_POST["did"]);
				
				$query="INSERT INTO `department`(`Name`, `Depat.ID`) VALUES ('$dname','$did')";
		        crud($query);
				$notification="Department added";
            }
			
              
            
            
            
            
          



        
           
        }
    ?>
         <style>
		 fieldset{
        
         margin-left: 600px;
         margin-right: 600px;
	     border: 2px groove (internal value);
 
           }
		
		   
		   
 </style>
    
    <fieldset>
        <legend align="center"><h1>Department</h1></legend>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" placeholder="Name" name="dname"><br> 
                    <span style="color:red;"><?php echo $err_name; ?></span></td>
               
				 <tr>
                    <td><Span>Id</Span></td>
                    <td>: <input type="text" placeholder="Id" name="did"><br> 
                    <span style="color:red;"><?php echo $err_id; ?></span></td>
               
            </tr>


            </table>
			<span style="color:Blue;"><?php echo $notification; ?></span></td>
			<input type="submit" name="submit" value="Add" style="margin-left:auto;margin-right:auto;display:block;margin-top:auto%;">
        </form>
        
    </fieldset>
   

</body>
</html>
