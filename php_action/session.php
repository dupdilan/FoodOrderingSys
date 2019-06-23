<?php
session_start();
if(!isset($_SESSION["login"]["txtUserName"]))
{
	header("Location:login.php");
}

?>
       