<html lang="en">
<head>
    <title>Insert Student</title>
</head>
<body>
    <?php
       
        include"db_config.php";
       
  	    $name="";
		$id="";
		$err_id="";
        $err_name="";
		$credit="";
		$err_credit="";
        $dob="";
		$dept="";
       
        $err_dob="";
		$notification="";
       
    

      

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["name"])||empty($_POST["credit"])||empty($_POST["id"])||!isset($_POST["dob"])){
                $err_name="Username Required";
                $err_credit="Enter credit";
				$err_id="ID required";
				$err_dob="select dob";
            }
            
            else if(isset($_POST["submit"])){
               
			    $name=htmlspecialchars($_POST["name"]);
				$credit=htmlspecialchars($_POST["credit"]);
				$id=htmlspecialchars($_POST["credit"]);
				$dept=$_POST["dept"];
				$dob=$_POST["dob"];
				$query="INSERT INTO `student`(`Name`, `StudentId`, `DOB`, `Credit`, `Depa.Id`) VALUES ('$name','$id','$dob','$credit','$dept')";
		        crud($query);
				$notification="Student added";
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
        <legend align="center"><h1>Registration Form</h1></legend>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" placeholder="Name" name="name"><br> 
                    <span style="color:red;"><?php echo $err_name; ?></span></td>
                </tr>               
                    <tr>
                    <td><Span>Credit</Span></td>
                    <td>: <input type="text" placeholder="Credit" name="credit"><br> 
                    <span style="color:red;"><?php echo $err_credit; ?></span></td>
                </tr> 
				 <tr>
                    <td><Span>Id</Span></td>
                    <td>: <input type="text" placeholder="Id" name="id"><br> 
                    <span style="color:red;"><?php echo $err_id; ?></span></td>
                </tr> 
				 <tr>
                    <td><Span>Date of Birth</Span></td>
                    <td>: <input type="date" placeholder="Date of birth" name="dob"><br> 
                    <span style="color:red;"><?php echo $err_dob; ?></span></td>
                </tr>
               <tr>
                    <td><Span>Department</Span></td>
                    <td>:<Select name="dept">
					<option>Csse</option>
					<option>eee</option>
					</select></td>
                </tr>
                
   

         
            </table>
			
			<input type="submit" name="submit" value="Add" style="margin-left:auto;margin-right:auto;display:block;margin-top:auto%;">
        </form>
		  <span style="color:Blue;"><?php echo $notification; ?></span></td>
        
    </fieldset>
   

</body>
</html>
