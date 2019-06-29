
<?php
	include("connection.php");
    

	$packageid=$_POST["txtPackageID"];
	$packagename=$_POST["txtPackageName"];
    $packagedec=$_POST["txtPackageDes"];
    $price=$_POST["txtPrice"];
    
    
    

//add Package handle
    if($_POST["btnAdd"]=='add') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="INSERT INTO packages(packageID,packageName,packageDes,price)VALUES('$packageid','$packagename','$packagedec','$price')";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This Package ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../packages.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../packages.php?error=1");
        
    }

    }

//Update Package handle
	else if($_POST["btnUpdate"]=='update') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="UPDATE packages SET packageName='$packagename',packageDes='$packagedec',price='$price' WHERE packageID='$packageid'  ";
	

	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This Package ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../packages.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../packages.php?error=1");
        
    }

    }

	//delete
	else if($_POST["btnDelete"]=='delete') {   
	
		$dbobj=new dbconnect();
		$con=$dbobj->getcon();
		
		$sql="DELETE FROM packages WHERE packageID='$packageid'";
		
		//executting the sql message
		$result=mysqli_query($con,$sql)or die("This payment type ID is not detected please try another".mysqli_error());
		
		if($result==true)
		{
			echo'alert("SUCCESS!!!!")';
			header("Location:../packages.php?success=1");

		}else{
			 echo'alert("Fail!!!!")';
			header("Location:../packages.php?error=1");

		}
		
	
		}
?>