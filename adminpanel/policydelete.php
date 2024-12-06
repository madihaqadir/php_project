<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `policy` WHERE policy_id= $userid";
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='policyshow.php';
</script>";
?>