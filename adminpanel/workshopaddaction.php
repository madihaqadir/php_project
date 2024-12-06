<?php
include "connection.php";

if(isset($_POST['sub'])) {
    $topicname = $_POST['topicname'];
    $date = $_POST['date'];
    $free = $_POST['free'];
    $mentor_id = $_POST['mentor_id']; // Assuming you're getting mentor_id from a form input

    // Check if mentor_id is provided and valid
    if (!empty($mentor_id)) {
        $insert_qry = "INSERT INTO `workshop`(`topic`, `date`, `free`, `mentor_id_FK`) 
                       VALUES ('$topicname', '$date', '$free', '$mentor_id')";

        $result = mysqli_query($conn, $insert_qry);

        if ($result) {
            echo "
            <script>
            alert('Added successfully');
            window.location.href='workshopshow.php';
            </script>";
        } else {
            echo "<p>Error adding workshop: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>Please select a valid mentor.</p>";
    }
}
?>
