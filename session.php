<?php
session_start();
if(empty($_SESSION['username']))
{
    //unset($_SESSION['username']);
    header("Location:loginpage.php");
}
?>