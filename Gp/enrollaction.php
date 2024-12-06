<?php
include "connection.php";

if(isset($_POST['sub'])){
    $name = $_POST['visitorname'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $date = $_POST['date']; 
    $contact = $_POST['contact'];
    

    // INSERT INTO `student`(`name`, `email`, `enrollment_date`, `contact_info`, `course`) 
    $insert_qry = "INSERT INTO `student`(`name`,`email`,`enrollment_date`, `contact_info`, `course`) 
                   VALUES ('$name','$email','$date','$contact','$course')";

    $result = mysqli_query($conn, $insert_qry);

    if($result){
        echo "
        <script>
        alert('Added successfully');
        window.location.href='enroll.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Error: " . mysqli_error($conn) . "');
        </script>";
    }
}
?>
