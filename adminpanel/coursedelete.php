<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `course` WHERE course_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='courseshow.php';
</script>";
?>