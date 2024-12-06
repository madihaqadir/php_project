<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `market` WHERE market_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='marketshow.php';
</script>";
?>