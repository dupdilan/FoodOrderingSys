<?php
//require_once("php_action/session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Dashboard Kitchen</title>
    <link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link type="text/css"  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link type="text/css"  rel="stylesheet" href="custom/css/customdash.css">
    <link type="text/css"  rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <link  type="text/css" rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css"> 
     <script src="custom/js/custom.js"></script>
                                <script>
                                    function approveuser(id){
                                        trid=id.split('-')[1];
                                        //alert(trid);
                                        $.ajax({
                                            url: "php_action/startBtn.php",
                                            type:"post",
                                            data:{ val : id },

                                            success: function(result){
                                               // alert(result);
                                               
                                               //$('table#sHold tr#'+trid).remove();
                                                alert('Updated the Status');
                                                location.reload();

                                        }
                                        });
                                    }
                                    
                                    </script>
                                    <script>
                                    function approveuserSecond(id){
                                        trid=id.split('-')[1];
                                        //alert(trid);
                                        $.ajax({
                                            url: "php_action/doneBtn.php",
                                            type:"post",
                                            data:{ val1 : id },

                                            success: function(result){
                                               // alert(result);
                                               
                                               //$('table#sHold tr#'+trid).remove();
                                                alert('Updated the Status');
                                                location.reload();

                                        }
                                        });
                                    }
                                    
                                    </script>
    
    
  </head>
    <body onload = "JavaScript:AutoRefresh(5000);" >
            <!-- aut refresh    -->
    <script type = "text/JavaScript">
         
         function AutoRefresh( t ) {
            setTimeout("location.reload(true);", t);
         }
      
   </script>
 


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
                    <li class="active"><a href="dashbordKitchen.php"><i class="glyphicon glyphicon-th-large" ></i>  Kitchen Dashbord </a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="php_action/logout.php"><i class="glyphicon glyphicon-off"></i>  Logout</a></li>
                </ul>
            </div>
        </nav>
        
        
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
                    <div class="panel panel-default panelSize ">
                        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Pending Orders </div>
                            <div class="panel-body ">
                                        
                                        
                                 <?php
                                 
                                 require_once("php_action/viewPenddingOrdersKitchen.php");
                                        
                                 ?>
                            
                            </div>
                    </div>

        </div>  


      </div>   
<!--
      <div class="row" style="margin-bottom:20px;">
          <div class="col-sm-4">
                            <button type="button" id="btnStart" class="btn btn-primary btn-lg btn-block " onclick="" >
                            Start to Cook
                            </button>
          </div>
          <div class="col-sm-4">
                            <button type="button" id="btnDone" class="btn btn-primary btn-lg btn-block" onclick="" >
                            Done
                            </button>
          </div>
          <div class="col-sm-4">
                            <button type="button" id="btnDelivered" class="btn btn-primary btn-lg btn-block" onclick="" >
                            Delivered 
                            </button>
                            
           </div>
      </div>

        <script>
            function DisableButton1(){
                var btn = document.getElementById('btnStart');
                btnStart.disabled = true;
                btnStart.innerText = 'Posted.. ';
            }
            function DisableButton2(){
                var btn = document.getElementById('btnDone');
                btnDone.disabled = true;
                btnDone.innerText = 'Posted.. ';
            }
            function DisableButton3(){
                var btn = document.getElementById('btnDelivered');
                btnDelivered.disabled = true;
                btnDelivered.innerText = 'Posted.. ';
            }
        </script>
        -->
                                        
        <div class="row">
        <div class="col-sm-12">
                    <div class="panel panel-default panelSize ">
                        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Cooking Orders </div>
                            <div class="panel-body ">
                                <?php
                                 
                                 require_once("php_action/viewCookingOrdersKitchen.php");
                            
                                 ?>

                            </div>
                    </div>

        </div>  


      </div> 
      <div class="row">
        <div class="col-sm-12">
                    <div class="panel panel-default panelSize ">
                        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> &nbsp  View the Done Orders </div>
                            <div class="panel-body ">
                                <?php
                                 
                                 require_once("php_action/viewDoneOrders.php");
                            
                                 ?>

                            </div>
                    </div>

        </div>  


      </div> 

    </div>

                   


 <!--add footer to this-->
<?php 
    require_once("include/footer.php");
?>
