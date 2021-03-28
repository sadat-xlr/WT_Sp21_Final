<?php
  if (!isset($_COOKIE["username"])) {
	
			header("Location: Login.php");
		}
 
		


?>
<html>
<body>
  <div style="text-align:center">
	<h1>Welcome <?php echo $_COOKIE["username"]; ?></h1>
  </div>
</body>
</html>