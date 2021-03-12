<?php
//session_start();
if(!empty($_SESSION['username'])  && !empty($_SESSION['page']) && !empty($_SESSION['id']))
{
	$id = $_SESSION['id'];
    //unset($_SESSION['username']);
    //header("Location:loginpage.php");
	$usertype = $_SESSION['page'];
	if($usertype=="superadmin"){
			
			header("Location:Dashboard.php?id=".$id);
		  }else if($usertype=="director"){
			header("Location:dirdashboard.php?id=".$id);

		  }else if($usertype=="employee"){
			  
			header("Location:Dashemp.php?id=".$id);

		  }else if($usertype=="member"){
			header("Location:Dashmem.php?id=".$id);

		}
	
			
}
?>