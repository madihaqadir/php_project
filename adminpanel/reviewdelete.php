<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `review` WHERE review_id = $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='reviewshow.php';
</script>";
?>