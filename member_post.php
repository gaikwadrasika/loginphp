<?php
include_once 'connection.php';

/*echo "<pre>";
print_r($_POST);
*/
if(isset($_POST['submit']))
{    

   // echo "test";die;
     $name = $_POST['name'];
     $username = $_POST['username'];
     $password = $_POST['pass'];
     $adharcardnum = $_POST['AdhaarcardNum'];
     $address = $_POST['add'];
     $amountpaid = $_POST['amountpaid'];
     $sport= $_POST['fsport'];
     $startdate = $_POST['startdate'];
     //$todaysdate= $_POST['todaysdate'];

     $todaysdate= date('Y-m-d');


    
 
     $sql = "INSERT INTO multiusertable(name,username,password,adharNum,address,amountpaid,favsports,startdate,todaysdate,role)
     VALUES ('".$name."','".$username."','".$password."',$adharcardnum,'".$address."',$amountpaid,'".$sport."','".$startdate."','".$todaysdate."','member')"; 
     if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";

        header("Location: loginpage.php");
        
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>