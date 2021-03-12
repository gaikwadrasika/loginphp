<?php
include_once 'connection.php';

/*echo "<pre>";
print_r($_POST);*/

if(isset($_POST['submit']))
{    

   // echo "test";die;
     $name = $_POST['name'];
     $username = $_POST['username'];
     $password = $_POST['pass'];
     $adharcardnum = $_POST['anum'];
     $address = $_POST['address'];
     $salary= $_POST['sal'];
     $hours= $_POST['hour'];
     $startdate = $_POST['sdate'];
     //$todaysdate= $_POST['tdate'];
     
     $todaysdate= date("Y-m-d");
 
     $sql = "INSERT INTO multiusertable(name,username,password,adharNum,address,salary,hours,startdate,todaysdate,role)
     VALUES ('".$name."','".$username."','".$password."',$adharcardnum,'".$address."',$salary,'".$hours."','".$startdate."','".$todaysdate."','employee')"; 
     if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";

        header("Location: loginpage.php");
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>