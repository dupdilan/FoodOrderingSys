
<?php
	include("connection.php");
    

	$orderId=$_POST["txtOrderId"];
	$packageName=$_POST["txtPackage"];
    $packagePrice=$_POST["txtPackagePrice"];
    $qty=$_POST["txtqty"];
    $total=$_POST["txttot"];
    $orderStatus='pendding';
    
    
    

//add Order
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="INSERT INTO orderdetails(orderID,packageName,price,qty,total,orderStatus) VALUES('$orderId','$packageName','$packagePrice','$qty','$total','$orderStatus')";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This Order ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../order.php?success=1");
		
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../order.php?error=1");
        
    }

	$dbobj->close();

?>