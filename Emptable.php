<?php
include 'connection.php';

$selectquery ="select * from multiusertable where role in('employee')";
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
					<td>".$res['role']."</td>
					<td><a href='edit.php?id=".$res['id']."'>Edit</a></td>
					</tr>";

}
 
?>
<html>
    <head>
      <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
    <div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">My App</a>
    </header>
    <ul class="nav">
      <li>
        <a href="#">
          <i class="zmdi zmdi-view-dashboard"></i>help
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-link"></i> Shortcuts
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-widgets"></i> Overview
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Events
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> About
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> Services
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Contact
        </a>
      </li>
    </ul>
  </div>

    <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
         <button type="button" class="btn btn-success"> <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <h1>Welcome to Dirdashboad panel</h1>
        <button class="btn btn-danger" type="button"><a href="Dirtable.php">Director</a></button>
        <button class="btn btn-danger" type="button"><a href="Emptable.php">Employee</button>
        <button class="btn btn-danger" type="button"><a href="Memtable.php">Member</button>

       <div class="main-div">
        <div class="table-responsive">
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
  </div>
</div>
</body>
</html>
