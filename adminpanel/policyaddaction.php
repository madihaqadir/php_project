<?php
include "connection.php";

if(isset($_POST['sub'])){
    $policytitle=$_POST['policytitle'];
    $policydetail=$_POST['policydetail'];


    $insert_qry="INSERT INTO `policy`(`policy_title`, `policy_details`) VALUES ('$policytitle','$policydetail')";

    $result=mysqli_query($conn,$insert_qry);
    echo"
    <script>
    alert('Added successfully');
    window.location.href='policyshow.php';
    </script>";
}
?>