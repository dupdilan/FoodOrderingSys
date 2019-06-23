<?php
            require_once('connection.php');  
            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT orderID,packageName,price,qty,total,orderStatus FROM orderdetails WHERE orderStatus='pendding';";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='table' border=1 width=100%>
						<tr>
							<th height=50px >Order ID</th>
                            <th>Package Name</th>
                            <th>Price (LKR)</th>
                            <th>QTY</th>
                            <th>Total (LKR) </th>
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["orderID"]."</td>
							<td>".$record["packageName"]."</td>
                            <td>".$record["price"]."</td>
                            <td>".$record["qty"]."</td>
                            <td>".$record["total"]."</td>
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "Pendding Order DB Empty! ".mysqli_error($con);
				}
			}
			else{
				echo "Order DB could not be Found! ".mysqli_error($con);
            }
            
            $dbobj->close();
			
		?>