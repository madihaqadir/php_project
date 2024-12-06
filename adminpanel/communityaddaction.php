<?php
include "connection.php";

if(isset($_POST['sub'])){
    $communityname=$_POST['communityname'];
    $description=$_POST['description'];
    $member=$_POST['member'];



    $insert_qry="INSERT INTO `community`( `name`, `description`, `members`) VALUES ('$communityname', '$description','$member')";  

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='communityshow.php';
    </script>";
}
?>