<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `mentor` WHERE mentor_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='mentorshow.php';
</script>";
?>
            <!-- SELECT `mentor_id`, `name`, `contact_info`, `bio`, `introduction` FROM `mentor` WHERE 1 -->
