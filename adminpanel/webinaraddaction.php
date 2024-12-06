<?php
include "connection.php";

if(isset($_POST['sub'])) {
    $topicname = $_POST['topicname'];
    $date = $_POST['date'];
    $mentor_id = $_POST['mentor_id']; // Assuming you're getting mentor_id from a form input
    $recorded_webinar = $_FILES['recorded_webinar']['name'];
    $target_dir = "uploads/";

    // Check if 'uploads' folder exists and create it if not
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($recorded_webinar);

    // Move the uploaded file to the 'uploads' folder
    if (move_uploaded_file($_FILES['recorded_webinar']['tmp_name'], $target_file)) {
    // Check if mentor_id is provided and valid
    if (!empty($mentor_id)) {
        $insert_qry = "INSERT INTO `livewebinar`(`topic`, `date`,`mentor_id_FK`,`recorded_webinar`) 
                       VALUES ('$topicname', '$date', '$mentor_id','$target_file')";

        $result = mysqli_query($conn, $insert_qry);

        if ($result) {
            echo "
            <script>
            alert('Added successfully');
            window.location.href='webinarshow.php';
            </script>";
        } else {
            echo "<p>Error adding workshop: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>Please select a valid mentor.</p>";
    }
}
}
?>
