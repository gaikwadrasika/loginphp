<?php
include("session.php");
include_once 'connection.php';
$usertype = $_POST['usertype'];
/*echo "<pre>";
print_r($_POST);
die;*/
if(isset($_POST['edit']))
{    

	if($usertype == "superadmin")
	{
		 $id = $_POST['id'];
		 $name = $_POST['name'];
		 $AdhaarcardNum = $_POST['AdhaarcardNum'];
		 $add = $_POST['add'];
		 $amountpaid = $_POST['amountpaid'];
		 $hour = $_POST['hour'];
		 $sal= $_POST['sal'];
		 $fsport= $_POST['fsport'];
		 $startdate = $_POST['startdate'];
		 
		 $sql = "update multiusertable set name='".$name."',adharNum='".$AdhaarcardNum."',address='".$add."',amountpaid=$amountpaid,hours=$hour,salary=$sal,favsports='".$fsport."', startdate='".$startdate."' where id=".$id;		 $res = mysqli_query($conn, $sql);
		 
		 header("Location: Dashboard.php");
	}


	if($usertype == "director")
	{
		$id = $_POST['id'];
		 $name = $_POST['name'];
		 $AdhaarcardNum = $_POST['AdhaarcardNum'];
		 $add = $_POST['add'];
		 $sal= $_POST['sal'];
		 $fsport= $_POST['fsport'];
		
		 
		 $sql = "update multiusertable set name='".$name."',adharNum='".$AdhaarcardNum."',address='".$add."',salary=$sal,favsports='".$fsport."' where id=".$id;
		 $res = mysqli_query($conn, $sql);
		 
		 header("Location: dirdashboard.php");
	}
	
	if($usertype == "member")
	{
		 $id = $_POST['id'];
		 $name = $_POST['name'];
		 $AdhaarcardNum = $_POST['AdhaarcardNum'];
		 $add = $_POST['add'];
		 $fsport= $_POST['fsport'];
		
		 
		 $sql = "update multiusertable set name='".$name."',adharNum='".$AdhaarcardNum."',address='".$add."',favsports='".$fsport."' where id=".$id;
		 $res = mysqli_query($conn, $sql);
		 
		 header("Location: Dashmem.php?id=".$id);
	}


     
}
?>