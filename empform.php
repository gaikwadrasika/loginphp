

<html>  
 <head>  
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=date],input[type=email],input[type=password],textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}   
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
h2{
     color:Red;
  }
</style>
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
  var tdate=document.Empform.tdate;
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
  
    return true;
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
     <h2>Registration as Employee</h2>  
    <form name="Empform" action="empform_post.php" onsubmit="return validation()" method="post">  
     <fieldset>  
        <legend>User personal information</legend>  
        <label>Enter your full name</label><br>  
        <input type="text" name="name"  id="name" autocomplete="off" onblur=Stringvalidate(this.id) >
        <span id="msg"></span> <br>  

         <label>Enter your username</label><br>  
         <input type="email" name="username" id="uname" unique  autocomplete="off"><br>
         <span id="message"></span> 
         <label>Enter your password</label><br>  
         <input type="password" name="pass" id="pass" maxlength=8 minlength=8 required autocomplete="off"><br>
         <span id="pass" class="text-danger"></span>   
         <label>AdharNum</label><br>  
         <input type="text" name="anum" id="anum" pattern=[0-9]{10} maxlength=10 minlength=10 autocomplete="off" onblur=Numbervalidate(this.id)>
                 <span name="numloc"></span><br>
         <br>Enter your Address:<br>  
         <textarea name="address" id="address"></textarea><br>  

         <label>Enter your Salaryperhours</label><br>  
        <input type="text" id="sal" name="sal" value=""><br>
 
          <label>hoursworked</label><br>  
        <input type="text" name="hour" id="hour"><br> 

        <label for="startdate">startdate:</label><br>
       <input type="date" id="sdate" name="sdate"><br>

        <!--label for="todaysdate">Todays date:</label><br>
        <input type="date" id="tdate" name="tdate"-->      

        <br><br>
         <input type="submit" name="submit" value="submit">  

</fieldset>  
  </form>  
  

 </body>  
</html>  