<?php
include("session.php");
include 'connection.php';
$selectquery ="select * from multiusertable";
$query =mysqli_query($conn,$selectquery);
$nums =mysqli_num_rows($query);
$table_data="";
while($res = mysqli_fetch_array($query)){
	
	$table_data.= "<tr>
					<td>".$res['name']."</td>
					<td>".$res['username']."</td>
					<td>".$res['address']."</td>
					<td>".$res['adharNum']."</td>
					<td>".$res['startdate']."</td>
					<td>".$res['salary']."</td>
					<td>".$res['hours']."</td>
					<td>".$res['todaysdate']."</td>
					<td>".$res['amountpaid']."</td>
					<td>".$res['favsports']."</td>
					<td>".$res['role']."</td>
					<td><a href='edit.php?id=".$res['id']."'>Edit</a></td>
					</tr>";

    
}
 /*           
echo "<pre>";
print_r($table_data);
*/

 ?>
<html>
    <head>
      <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
 <div class="main-div">
  <div class="table-responsive">

  <a href="logout.php">Logout</a><br/>
  <h1>Super Admin Panel</h1>
      <table cellpadding="2" cellspacing="2" border="1">
          <thead>
              <tr>
              <th>Name</th>  
              <th>Username</th>  
             <th>Address</th>  
             <th>Adharcardnum</th>  
             <th>Start Date</th>  
             <th>Salary</th>
             <th>Hours</th>  
             <th>Todays Date</th> 
             <th>Amountpaid</th> 
             <th>Favsports</th>  
             <th>Role</th>
             <th>Edit</th>
             
            </tr>
          </thead>
          <tbody>
			<?php
			
			echo $table_data;
			
			?>
          
</tbody>
                  
       </table>

       </div>
</div>
</body>
</html>
