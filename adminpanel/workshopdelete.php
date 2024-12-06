<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `workshop` WHERE workshop_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='workshopshow.php';
</script>";
?>