<?php
include "connection.php";

if(isset($_POST['sub'])){
   
    $cname=$_POST['cname'];
    $cdesc=$_POST['cdesc'];
    $minfo=$_POST['minfo'];
    $eplan=$_POST['eplan'];
    $smconcept=$_POST['smconcept'];
   

    $insert_qry="INSERT INTO `course`(`course_name`, `course_desc`, `market_info`, `education_plan`, `sm_concept`) VALUES ('$cname','$cdesc','$minfo','$eplan','$smconcept')";


  

    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='courseshow.php';
    </script>";
}
?>