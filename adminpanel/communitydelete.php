<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `community` WHERE community_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='communityshow.php';
</script>";
?>