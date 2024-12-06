<?php
include "connection.php";

if(isset($_POST['sub'])){
   
    $description=$_POST['description'];
   

    $insert_qry="INSERT INTO `benefits`( `description`) VALUES  ('$description')";


  

    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='benefitshow.php';
    </script>";
}
?>