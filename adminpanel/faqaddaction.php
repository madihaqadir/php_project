<?php
include "connection.php";

if(isset($_POST['sub'])){
    $question=$_POST['question'];
    $answer=$_POST['answer'];


    $insert_qry="INSERT INTO `faq`(`question`, `answer`) VALUES ('$question','$answer')";


  

    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='faqshow.php';
    </script>";
}
?>