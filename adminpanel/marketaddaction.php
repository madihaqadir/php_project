<?php
include "connection.php";

if(isset($_POST['sub'])){
    $marketname=$_POST['marketname'];
    $description=$_POST['description'];



    $insert_qry="INSERT INTO `market`(`market_name`,`market_desc`) VALUES ('$marketname', '$description')";  

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='marketshow.php';
    </script>";
}
?>