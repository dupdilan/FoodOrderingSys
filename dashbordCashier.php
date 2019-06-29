<?php
//require_once("php_action/session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Dashboard Cashier</title>
    <link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link type="text/css"  rel="stylesheet" href="custom/css/customdash.css">
    <link type="text/css"  rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <link  type="text/css" rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css"> 
    
    
  </head>
    <body  >


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
                    <li class="#"><a href="packages.php"><i class="glyphicon glyphicon-new-window" ></i>  Packages </a></li>
        
        
                    <li><a href="php_action/logout.php"><i class="glyphicon glyphicon-off"></i>  Logout</a></li>
                </ul>
            </div>
        </nav>
        
        
    <div class="container">
      <div class="row">
        <img src="assets/images/dash.jpg" class="img-thumbnail" alt="" max-width="100%" height="auto" >
      </div>   
    </div>

<!--add footer to this-->
<?php 
    require_once("include/footer.php");
?>

 