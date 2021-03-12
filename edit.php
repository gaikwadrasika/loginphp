<?php
include("session.php");
include_once 'connection.php';

//take input parameter from url
$id=$_REQUEST['id'];


$usertype = $_SESSION['page'];


//retrieve old value using above input parameter
$selectquery ="select * from multiusertable where id=".$id;
$query =mysqli_query($conn,$selectquery);
$nums =mysqli_num_rows($query);
$table_data="";
while($res = mysqli_fetch_array($query)){

//assign old value to the variable
    $id = $res['id'];
    $username = $res['username'];
	$password = $res['password'];
    $address = $res['address'];
    $name = $res['name'];
    $adharNum = $res['adharNum'];
    $startdate = $res['startdate'];
    $todaysdate = $res['todaysdate'];
    $amountpaid = $res['amountpaid'];
    $favsports = $res['favsports'];
    $role = $res['role'];
	$hours = $res['hours'];
	$sal = $res['salary'];

}

?>

<head>

 <script>
 function validation()
 {
  var name=document.Empform.name;
  var username=document.Empform.username;
  var pass=document.Empform.pass;
  var anum=document.Empform.anum;
  var sal=document.Empform.sal;
  var hour=document.Empform.hour;
  var sdate=document.Empform.sdate;
  var tdate=document.Empform.tdate
  if(username.value.length<=0)
  {
    alert("username is required pls fill it");
    username.focus();
    return false;
  }
  if(name.value.length<=0)
  {
    alert("name is required pls fill it");
    name.focus();
    return false;
  }
  if(pass.value.length<=0)
  {
    alert("password is required please fill it");
    pass.focus();
    return false;
  } if(anum.value.length<=0)
  {
    alert(" pls fill adhar details");
    anum.focus();
    return false;
  } if(sal.value.length<=0)
  {
    alert("salary is required pls fill it");
    sal.focus();
    return false;
  } if(hour.value.length<=0)
  {
    alert("hoursworked is required pls fill it");
    hour.focus();
    return false;
  } if(sdate.value.length<=0)
  {
    alert("startdate is required pls fill it");
    sdate.focus();
    return false;
  }
  if(tdate.value.length<=0)
  {
    alert("todaysdate is required pls fill it");
    tdate.focus();
    return false;
  }
  
    return false;
 }
 function Stringvalidate(id)
 {
   var element=document.getElementById(id)
   var regExp =/^[a-zA-Z]+$/;
   if(!regExp.test(element.value))
   {
     alert("Enter valid value for field Number is not allowed");
     element.focus();
     return false;
   }
  }
   function Numbervalidate(id)
 {
   var element=document.getElementById(id)
   var regExp =/^[0-9]{10}+$/;
   if(!regExp.test(element.value))
   {
     alert("Enter number value");
    // element.focus();
     return false;
   }
 }

  </script>
</head>  
  
 <body>  
     <h2>Edit Details</h2>  
    <form name="Empform" method="post" action="edit_post.php">  <!-- onsubmit="return validation()" -->
     <fieldset>
		<legend>User personal information</legend>

		<input type="hidden" id="usertype" name="usertype" value="<?php echo $usertype;?>" />
		<input type="hidden" id="id" name="id" value="<?php echo $id;?>" />
		<?php
		if($usertype == "superadmin")
		{
		?>
	 
        
         <label>Username</label><br>  
         <input type="email" name="username" id="username" value="<?php echo $username;?>" disabled><br>
		<label>password</label><br>  
         <input type="password" name="pass" disabled value="<?php echo $password;?>" ><br>  
         		 
		  <label>Name</label><br>  
        <input type="text" name="name" id="name" value="<?php echo $name;?>"><br>  
       
         <label>AdharNum</label><br>  
         <input type="text" name="AdhaarcardNum" maxlength=10 minlength=10 pattern[0-9] value="<?php echo $adharNum;?>"><br>   
          <br>
          <label>Enter your Address:</label> 
          <input type="text" name="add" value="<?php echo $address;?>"><br>
		  
         <label>AmountPaid</label><br>  
        <input type="text" name="amountpaid" value="<?php echo $amountpaid;?>"><br> 
		
		 <label>hoursworked</label><br>  
        <input type="text" name="hour" id="hour" value="<?php echo $hours;?>"><br> 


		<label>Enter your Salaryper</label><br>  
        <input type="text" id="sal" name="sal" value="<?php echo $sal;?>"><br>
 
 
          <label>Faviourate sport</label><br>  
        <input type="text" name="fsport" value="<?php echo $favsports;?>"><br> 
        <label for="startdate">startdate:</label><br>
       <input type="date" id="birthday" name="startdate" value="<?php echo $startdate;?>"><br>
	   <input type="submit" name="edit" value="Edit">  
	   <?php
		}
		
		if($usertype == "director")
		{
		?>
		<label>Username</label><br>  
         <input type="email" name="username" id="username" value="<?php echo $username;?>" disabled><br>
		<label>password</label><br>  
         <input type="password" name="pass" disabled value="<?php echo $password;?>" ><br>  
         		 
		  <label>Name</label><br>  
        <input type="text" name="name" id="name" value="<?php echo $name;?>"><br>  
       
         <label>AdharNum</label><br>  
         <input type="text" name="AdhaarcardNum" maxlength=10 minlength=10 pattern[0-9] value="<?php echo $adharNum;?>"><br>   
          <br>
          <label>Enter your Address:</label> 
          <input type="text" name="add" value="<?php echo $address;?>"><br>
		  
       
		<label>Enter your Salaryper</label><br>  
        <input type="text" id="sal" name="sal" value="<?php echo $sal;?>"><br>
 
 
          <label>Faviourate sport</label><br>  
        <input type="text" name="fsport" value="<?php echo $favsports;?>"><br> 
         <input type="submit" name="edit" value="Edit">  
		<?php
		}
		?>
	   
	   <?php
		if($usertype == "member")
		{
		?>
	 
        
         <label>Username</label><br>  
         <input type="email" name="username" id="username" value="<?php echo $username;?>" disabled><br>
		<label>password</label><br>  
         <input type="password" name="pass" disabled value="<?php echo $password;?>" ><br>  
         		 
		  <label>Name</label><br>  
        <input type="text" name="name" id="name" value="<?php echo $name;?>"><br>  
       
         <label>AdharNum</label><br>  
         <input type="text" name="AdhaarcardNum" maxlength=10 minlength=10 pattern[0-9] value="<?php echo $adharNum;?>"><br>   
          <br>
          <label>Enter your Address:</label> 
          <input type="text" name="add" value="<?php echo $address;?>"><br>
		  
         
          <label>Faviourate sport</label><br>  
        <input type="text" name="fsport" value="<?php echo $favsports;?>"><br> 
       <input type="submit" name="edit" value="Edit">  
	   <?php
		}
	   ?>
        <!--label for="todaysdate">Todays date:</label><br>
        <input type="date" id="todaysdate" name="todaysdate"> <br--><br>
        
		 
        </fieldset>  
  </form>  
 </body>  