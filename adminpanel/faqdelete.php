<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `faq` WHERE faq_id= $userid";
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='faqshow.php';
</script>";
?>