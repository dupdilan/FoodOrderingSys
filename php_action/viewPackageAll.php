<?php
            require_once('connection.php');  
            $dbobj=new dbconnect();
	       $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT packageID,packageName,packageDes,price FROM packages;";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tablePackage' border=1 width=100%>
						<tr>
							<th height=50px >Package ID</th>
							<th>Package Name</th>
                            <th>Package Descrpition</th>
                            <th>Package Price (LKR) </th>
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["packageID"]."</td>
							<td>".$record["packageName"]."</td>
                            <td>".$record["packageDes"]."</td>
                            <td>".$record["price"]."</td>
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "Package DB Empty! ".mysqli_error($con);
				}
			}
			else{
				echo "Package DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>