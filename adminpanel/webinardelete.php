<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `livewebinar` WHERE webinar_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='webinarshow.php';
</script>";
?>