<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `benefits` WHERE benefit_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='benefitshow.php';
</script>";
?>