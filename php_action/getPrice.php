<?php
            require_once('connection.php');  
           
           // get the q parameter from URL
            $q = $_REQUEST["q"];
            $price = "";

            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
            $query = "SELECT packageID,packageName,price FROM packages WHERE packageName='$q' ";
            

            $res=mysqli_query($con,$query)or die("Can not connect with the table ".mysqli_error());
    
	        $nor=mysqli_num_rows($res);
    
	if($nor>0)
	{
		$rec=mysqli_fetch_Array($res);	
        $price=$rec["price"];
        echo $price;
			
	}
	else
	{
      
        echo "DB Empty! ".mysqli_error($con);
	}
    
         $dbobj->close();
		?>