<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `review` WHERE review_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='reviewshow.php';
</script>";
?>

                    <!-- SELECT `review_id`, `video_url`, `comment`, `date`, `user_id_FK` FROM `review` WHERE 1 -->
