<?php

$data=$_POST['val'];
$status =explode('-',$data);
$order_id=$status[1];

if($status[0]=='btnStart'){
    $value='cooking';
}
elseif($status[0]=='btnCancel'){
    $value='canceled';
}
    

  $conn = mysqli_connect('localhost', 'root', '', 'fooddb') or die('ERROR: Cannot Connect='.mysql_error($conn));
 mysqli_query($conn,"UPDATE orderdetails set orderStatus='$value' WHERE orderID='$order_id'");

?>