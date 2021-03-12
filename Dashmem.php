<?php
include("session.php");
include 'connection.php';

if(!empty($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
}

//need to remove below pid - start
if(!empty($_REQUEST['pid']))
{
	$pid = $_REQUEST['pid'];
}
//need to remove below pid - end

$selectquery ="select * from multiusertable where role='member' and id=".$id;
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
					<td>".$res['todaysdate']."</td>
					<td>".$res['amountpaid']."</td>
					<td>".$res['favsports']."</td>
					<td><a href='edit.php?id=".$res['id']."'>Edit</a></td>
					</tr>";
			
	
}

?>
<html>
    <head>
       <?php include 'link.php'?>;
    </head>
    <body>
 <div class="main-div">
  <div class="table-responsive">
      <a href="logout.php">Logout</a><br/>
	  <h1>Member Portal</h1>
	  <table cellpadding="2" cellspacing="2" border="1">
          <thead>
              <tr>
              <th>Name</th>  
              <th>Username</th>  
             <th>Address</th>  
             <th>Adharcardnum</th>  
             <th>Start Date</th>   
             <th>Todays Date</th> 
             <th>Amount paid</th>
             <th>Favsports</th>
             <th>Edit</th>
            </tr>
          </thead>
          <tbody>

          <?php
				echo $table_data;

		 ?>
          
      </tbody>
                  
       </table>
	  
	  <!--<table>
          <thead>
              <tr>
              <th>Name</th>  
              <th>Username</th>  
             <th>Address</th>  
             <th>Adharcardnum</th>  
             <th>Startdate</th>  
             <th>Amountpaid</th>
             <th>Favsports</th>
             <th>Todaysdate</th>
            </tr>
          </thead>
          <tbody>
              <?php //echo $table_data;?>
</tbody>
                  
       </table>-->

       </div>
</div>
</body>
</html>
