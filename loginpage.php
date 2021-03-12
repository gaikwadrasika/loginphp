<?php  
session_start();
include("pageredirect.php");
include 'connection.php';

 $error='';
 $loginflag=0;
  if(isset($_POST['Login'])){
	  $user=$_POST['user'];
	  $pass=$_POST['pass'];
	  $usertype=$_POST['usertype'];
	  $query="SELECT * FROM `multiusertable` WHERE  username='".$user."' and password='".$pass."' and role='".$usertype."'";
	// echo $query;exit;
		
	  $result=mysqli_query($conn,$query);
		//$nums =mysqli_num_rows($query);
		
		/*echo "<pre>";
		print_r($result);
		die;*/
	  if(!empty($result) && $result->num_rows>0){
		//if($nums>0){
			
		  while($row=mysqli_fetch_array($result))
		  {
				//echo "you are login successfully as ".$row['usertype'];
				
				$loginflag=1;
				$id = $row['id'];
				$_SESSION['id'] = $id; 
				$_SESSION['username'] = $user; 
				$_SESSION['page'] = $usertype; 
		  }
		

		
		  if($usertype=="superadmin"){
			
			header("Location:Dashboard.php?id=".$id);
		  }else if($usertype=="director"){
			header("Location:dirdashboard.php?id=".$id);

		  }else if($usertype=="employee"){
			  
			header("Location:Dashemp.php?id=".$id);

		  }else if($usertype=="member"){
			header("Location:Dashmem.php?id=".$id);

					 }
					 
					 
				else{
				
				   echo 'no result';
			   }

		  }
		  else{
			$error="invalid username & password";
	 		}
		
		}
		
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multi User System</title>
	<?php  include 'link.php';?>

	<script type="text/javascript">
	function validation()
	{
		if(document.frm.user.value == "")
		{
			alert("Please enter username.");
			document.frm.user.focus();
			return false;
		}
		else if(document.frm.pass.value == "")
		{
			alert("Please enter password.");
			document.frm.pass.focus();
			return false;
		}
		else if(document.frm.usertype.value=="")
		{
			alert("Please select Usertype");
			return false;
		}			
		else{
			return true;
		}
	}
	</script>

</head>
<body>
	<p style="color:red;"><?php echo $error;?></p>
<form method="post" action="loginpage.php" name="frm">

	<table>
		<tr>
			<td>Username:<input type="text" name="user" placeholder="Username"></td>
		</tr>
		<tr>
			<td>Password:<input type="password"  name="pass" placeholder="Enter your Password"></td>
		</tr>
		<tr><td>Select user type:<select name="usertype">
		<option value="">Select</option>
				<option value="superadmin">Superadmin</option>
				<option value="director">Director</option>
				<option value="employee">Employee</option>
				<option value="member">Member</option>
			 </select>
        </td>
	  </tr>
	  <tr>
		 <td><input type="submit" name="Login" value="Login" onclick="javascript:return validation();"></td>
      </tr>
</table>
</form>


<a href="register.php">Register Now</a>
</body>


</html>