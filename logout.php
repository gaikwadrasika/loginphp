<?php
session_start();

if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
	unset($_SESSION['page']);
	unset($_SESSION['id']);
    header("Location:loginpage.php");
}
?>