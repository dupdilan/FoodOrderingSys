<?php
    
     require_once("connection.php");

     function selectPackage(){
                                                                 
        $dbobj=new dbconnect();
        $con=$dbobj->getcon();
        $sql="SELECT packageID,packageName FROM packages";
        $result=mysqli_query($con,$sql)or die("Cannot execute query");
        $nor=mysqli_num_rows($result);
        if($nor>0)
        {
            while($rec=mysqli_fetch_array($result))
            {
                echo '<option value="'.$rec["packageID"].'">'.$rec["packageName"].'</option>';
            }
        }else{
                echo 'No data Avalable!!';
        }
        $dbobj->close();
    }

?>