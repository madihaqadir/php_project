<?php
include "connection.php";

if (isset($_POST['sub'])) {
    $rollname = $_POST['rollname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $img = $_FILES['img'];

    // Handle the image upload
    $imagename = $img['name'];
    $actualpath = $img['tmp_name'];
    $mypath = "images/" . $imagename;
    move_uploaded_file($actualpath, $mypath);

    // Adjust query based on actual column names
    $insert_qry = "INSERT INTO `user` (`roll_id_fk`, `users_name`, `user_email`, `user_contact`, `user_passward`, `user_img`) 
                   VALUES ('$rollname', '$name', '$email', '$number', '$password', '$mypath')";  

    $result = mysqli_query($conn, $insert_qry);
    if ($result) {
        echo "
            <script>
            alert('Added successfully');
            window.location.href='usershow.php';
            </script>";
    } else {
        echo "Error: " . mysqli_error($conn); // Display MySQL error if query fails
    }
}
?>
