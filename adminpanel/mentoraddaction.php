<?php
include "connection.php";

if(isset($_POST['sub'])){
    $mentorname=$_POST['mentorname'];
    $contact=$_POST['contact'];
    $bio=$_POST['bio'];
    $introduction=$_POST['introduction'];


    $insert_qry="INSERT INTO `mentor`(`name`,`contact_info`,`bio`,`introduction`) VALUES ('$mentorname','$contact','$bio','$introduction')";


    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='mentorshow.php';
    </script>";
}
?>