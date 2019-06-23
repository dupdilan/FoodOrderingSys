<?php
require_once("php_action/function.php");
?>
<?php
                                                                require_once('php_action/connection.php'); 
                                                                
                                                                    $dbobj=new dbconnect();
                                                                $con=$dbobj->getcon();
                                                                
                                                                $sql = "select MAX(orderID) from orderdetails ";
                                                                            $q = mysqli_query($con,$sql);
                                                                            $row = mysqli_fetch_array($q);
                                                                        
                                                                
                                                                            $maxid = $row[0]+1;
                                                                        //  echo $row['uid']  ; 
                                                                    
                                                                        $dbobj->close();
                                                                ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Order</title>
    <link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
     <link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link type="text/css"  rel="stylesheet" href="custom/css/customdash.css">
    <link type="text/css"  rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <link  type="text/css" rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css"> 
     
    
    
  </head>
    <body >
    <script src="assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/jquery-ui/jquery-ui.min.css"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

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
                    <li class="active"><a href=""><i class="glyphicon glyphicon-new-window" ></i>  order </a></li>
                    <li class="#"><a href="packages.php"><i class="glyphicon glyphicon-new-window" ></i>  Packages </a></li>
        
        
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
                    <li class="active">Order</li>
                 </ol>

                </div>

            </div>


                <div class="row">
                    <div class="col-sm-6">
                       test
                    </div>   
                    <div class="col-sm-6" style="margin-bottom:20px;">
                                    <!-- Button trigger modal -->
                            <button type="button" id="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
                            Add New order
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Create New Order</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--Form Body-->
                                    <form  class="form-horizontal" id="frmOrder" action="php_action/orderHandle.php" method="POST">
                                        <div class="form-group">
                                            <label for="#" class="col-sm-3 control-label"> Order ID:</label>
                                            <div class="col-sm-6">
                                            <input type="number" class="form-control" id="txtOrderId" disabled  name="txtOrderId" value="<?php echo $maxid; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="#" class="col-sm-3 control-label"> Package :</label>
                                            <div class="col-sm-3">
                                            <select class="form-control" id="package" onchange="setTextFieldPackage(this)">        
                                                <option>Select</option>
                                                        <?php
					                                       selectPackage();
				                                        ?>
                                            </select>
                                            </div>
                                            <input id="txtPackage" type = "hidden" name = "txtPackage" value = "" />
                                                    <script  type="text/javascript">
                                                            
                                                            function setTextFieldPackage(ddl) {
                                                            document.getElementById('txtPackage').value = ddl.options[ddl.selectedIndex].text;
                                                                                    }
                        
                                                    </script>

                                            <div class="col-sm-3">
                                            <input type="number" class="form-control"  id="txtPackagePrice" onchange=""name="txtPackagePrice" value="100" required>
                                            </div>
                                        </div>
                                       

                                       

                                        <div class="form-group">
                                            <label for="#" class="col-sm-3 control-label"> Qty:</label>
                                            <div class="col-sm-6">
                                            <input type="number" class="form-control" id="txtqty" onchange="TotalVal();"name="txtqty" value="#" required>
                                            </div>
                                        </div>
                                            <script type="text/javascript">
                                                        function TotalVal()
                                                        {  
                                                        var number1 = document.getElementById('txtqty').value;
                                                        var number2 = document.getElementById('txtPackagePrice').value;
                                                        var x=number1*number2;
                                                        document.getElementById('txttot').value = x;
                                                        }         
                                            </script>
                                                

                                        <div class="form-group">
                                            <label for="#" class="col-sm-3 control-label"> Total:</label>
                                            <div class="col-sm-6">
                                            <input type="number" class="form-control"  id="txttot"  name="txttot" value="" required>
                                            </div>
                                        </div>

                                        </form>

                                </div>
                                <div class="modal-footer"> 
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" ><i class="glyphicon glyphicon-remove"></i>&nbspClose</button>
                                    <button type="button" class="btn btn-primary" id="btnOrder" name="btnOrder" value="addOrder"><i class="glyphicon glyphicon-plus"></i>&nbsp Order</button>
                                </div>
                                
                                </div>

                            </div>
                            </div>
                    </div>            
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
                                                                                    echo("<font color='red'>Successfully Add Order</font> ");
                                                                                    }
                                                                                }
			                                                            ?>

            
            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Pendding Orders </div>
                        <div class="panel-body">
                                <?php
                                 
                                 require_once("php_action/viewPenddingOrders.php");
                            
                                 ?>
                               
                        </div>
                            
                    </div>
                </div>

            </div>

            <div class="row">
        <div class="col-sm-12">
                    <div class="panel panel-default panelSize ">
                        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Cooking Orders </div>
                            <div class="panel-body ">
                                <?php
                                 
                                 require_once("php_action/viewCookingOrders.php");
                            
                                 ?>

                            </div>
                    </div>

        </div>  

            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Done Orders </div>
                        <div class="panel-body">
                                <?php
                                 
                                 require_once("php_action/viewDoneOrders.php");
                            
                                 ?>
                               
                        </div>
                            
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
 <!--submit the modal -->
 <script>
                                $("#btnOrder").on('click', function() {
                                 $("#frmOrder").submit();
                                });
                </script>