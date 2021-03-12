<?php
include("session.php");
include 'connection.php';
$selectquery ="select * from multiusertable where role='member'";


//echo $selectquery;
$query =mysqli_query($conn,$selectquery);
//$nums =mysqli_num_rows($query);
$table_data="";
while($res = mysqli_fetch_array($query)){
//$table_data.="<tr><td>".$res['name']."<td><td>".$res['username']."<td><td>".$res['address']."<td><td>".$res['startdate']."<td><td>".$res['amountpaid']."<td><td>".$res['favsports']."<td><td>".$res['todaysdate']."<td></tr>";


	$table_data.= "<tr>
					<td>".$res['name']."</td>
					<td>".$res['username']."</td>
					<td>".$res['address']."</td>
					<td>".$res['startdate']."</td>
					<td>".$res['todaysdate']."</td>
					<td>".$res['amountpaid']."</td>
					<td>".$res['favsports']."</td>
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
   <a href="memform.php">Add Member</a>
<h1>Employee Portal</h1>   
      <!--table border="1">
          <tr>
              <th>Name</th>  
              <th>Username</th>  
             <th>Address</th>  
             <th>Startdate</th>  
             <th>Amountpaid</th>
             <th>Favsports</th>
             <th>Todaysdate</th>
            </tr>
              <?php //echo $table_data;?>                  
       </table-->
       <table cellpadding="2" cellspacing="2" border="1">
          <thead>
              <tr>
              <th>Name</th>  
              <th>Username</th>  
             <th>Address</th>  
             <th>Start Date</th>   
             <th>Todays Date</th> 
             <th>Amount paid</th>
             <th>Favsports</th>
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
