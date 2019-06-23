<?php
require("connection.php");
if(isset($_POST["btnSubmit"]))
{
	$username=$_POST["txtUserName"];
	$password=$_POST["txtPassword"];
    $uty=$_POST["txtType"];
	
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="SELECT * FROM user WHERE userName='$username' AND userType='$uty' AND userPassword='$password' ";
	$res=mysqli_query($con,$sql)or die
	("Can not connect with the table ".mysqli_error());
    
	$nor=mysqli_num_rows($res);
    
	if($nor>0)
	{
		$rec=mysqli_fetch_Array($res);	
		$usert=$rec["userType"];

			
            if($usert=="cashier")
			{	
				header("Location:../dashbordCashier.php");
			}
			else if($usert=="kitchen"){
				
				header("Location:../dashbordKitchen.php");
			}
			else{
				 header("Location:../login.php?error=1");
				
			}
			
	}
	else
	{
		header("Location:../login.php?error=1");
	}
	
	
}
?>