
 <?php 
    include"db_config.php";
    $query="select * from student";
	get_data($query);
   ?>
<div>
<table>
  <tr>
    <th>Name</th>
    <th>Id</th>
    <th>Credit</th>
    <th>Dept</th>
    <th>Dob</th>
	<th>Option</th>
  </tr>
 <?php
    
   foreach($result as $row)
   echo "<tr>";
   echo "<td>".$row['name']."</td>";
   echo "<td>".$row['id'] ."</td>";
   echo" <td>".$row['credit']. "</td>";
   echo"<td>".$row['dob']."</td>";
  
	
  echo "</tr>";
    
 ?>


</table>
</div>