

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
    include"db_config.php";
    $query="select * from student";
    get_data($query);
   ?>
   <tr>
    <th>Name</th>
    <th>Id</th>
	<th>Credit</th>
	<th>Dept</th>
	<th>Dob</th>
	<th>Option</th>
  </tr>
</table>
</div>