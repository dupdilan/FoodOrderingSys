
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Packages</title>
    <link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
     <link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link type="text/css"  rel="stylesheet" href="custom/css/customdash.css">
    <link type="text/css"  rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <link  type="text/css" rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css"> 
     
    
    
  </head>
    <body >
    <style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    overflow-x:auto;
}

th, td {
    border: none;
    text-align: center;
    padding: 8px;
}
th {
    background-color:lightblue;
    color: white;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
      
        
    <!--Nav Bar-->    
        <nav class="navbar navbar-inverse " id="my-navbar">
            <div class="container">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="dashbordCashier.php"><i class="glyphicon glyphicon-th-large" ></i>  Cashier Dashbord </a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="#"><a href="order.php"><i class="glyphicon glyphicon-new-window" ></i>  order </a></li>
                    <li class="active"><a href=""><i class="glyphicon glyphicon-new-window" ></i>  Packages </a></li>
        
        
                    <li><a href="php_action/logout.php"><i class="glyphicon glyphicon-off"></i>  Logout</a></li>
                </ul>
            </div>
        </nav>
        
        
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="dashbordCashier.php">Dash board</a></li>
                    <li class="active">Packages</li>
                 </ol>

                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> &nbsp  Add New Package </div>
                        <div class="panel-body">
                                    <!--form details -->
                                    
                                            <form  class="form-horizontal" action="php_action/packageHandle.php" method="POST">
                                                                <?php
                                                                require_once('php_action/connection.php'); 
                                                                
                                                                    $dbobj=new dbconnect();
                                                                $con=$dbobj->getcon();
                                                                
                                                                $sql = "select MAX(packageID) from packages ";
                                                                            $q = mysqli_query($con,$sql);
                                                                            $row = mysqli_fetch_array($q);
                                                                        
                                                                
                                                                            $maxid = $row[0]+1;
                                                                        //  echo $row['uid']  ; 
                                                                    
                                                                        $dbobj->close();
                                                                ?>
                                                
                                                <div class="form-group">
                                                        <label for="txtdoctorid" class="col-sm-3 control-label"> Package ID:</label>
                                                        <div class="col-sm-6">
                                                        <input type="number" class="form-control" id="txtPackageID" disabled name="txtPackageID" value="<?php echo $maxid; ?>" >
                                                        </div>
                                                    </div>

                                       
                                                <div class="form-group">
                                                        <label for="txtdoctorid" class="col-sm-3 control-label"> Package Name:</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="txtPackageName" name="txtPackageName" placeholder="Package Name" required>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label for="txtdoctorid" class="col-sm-3 control-label"> Package Description:</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="txtPackageDes" name="txtPackageDes" placeholder="Package Description" required>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label for="lbluname" class="col-sm-3 control-label"> Price (LKR ):</label>
                                                        <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="Price" required>
                                                        </div>
                                                    </div>
                                                
                                            <div class="div-action pull pull-right">
                                                                            <button type="submit" class="btn btn-default"  id="btnAdd" name="btnAdd" value="add"><i class="glyphicon glyphicon-plus"></i> Add a New Package</button>
                                                                         <!--   <button type="submit" class="btn btn-default"  id="btnedituser" name="btnedituser" value="edituser"><i class="glyphicon glyphicon-pencil"></i>  Edit an Package</button>
-->
                                                                            <button type="reset" class="btn btn-default"  id="btnclear" name="btnclear" value="clear"><i class="glyphicon glyphicon-remove"></i> Clear</button>
                                                                        </div>
                                                    
                                                                        <?php
                                                                    if(isset($_GET["error"]))
                                                                        {
                                                                        $error=$_GET["error"];
                                                                        if($error==1)
                                                                            {
                                                                            echo("<font color='red'>Error</font>");
                                                                            }
                                                                        }
			                                                            ?>
                                                                         <?php
                                                                            if(isset($_GET["success"]))
                                                                                {
                                                                                $error=$_GET["success"];
                                                                                if($error==1)
                                                                                    {
                                                                                    echo("<font color='red'>Successfully</font> ");
                                                                                    }
                                                                                }
			                                                            ?>
                                </form>
                                                            
                        </div>
                            
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Packages </div>
                        <div class="panel-body">
                                 <?php
                                 
                                 require_once("php_action/viewPackageAll.php");
                            
                                 ?>
                               
                        </div>
                            
                    </div>
                </div>

            </div>

           



        </div>
    </div>



 <!--add footer to this-->
<?php 
    require_once("include/footer.php");
?>
