
<!-- SELECT `Visitor_name`, `review_id`, `video_url`, `comment`, `date` FROM `review` WHERE 1 --><?php
include "connection.php";

if (isset($_POST['sub'])) {
    $visitorname = $_POST['visitorname'];
    $comment = $_POST['comment'];
    $date = $_POST['date'];

    // Handle file upload
    $video_url = $_FILES['video_url']['name'];
    $target_dir = "uploads/";

    // Check if 'uploads' folder exists and create it if not
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($video_url);

    // Move the uploaded file to the 'uploads' folder
    if (move_uploaded_file($_FILES['video_url']['tmp_name'], $target_file)) {
        // Insert into database
        $insert_qry = "INSERT INTO `review` (`Visitor_name`, `comment`, `date`, `video_url`) 
                       VALUES ('$visitorname', '$comment', '$date', '$target_file')";

        if (mysqli_query($conn, $insert_qry)) {
            echo "<script>alert('Added successfully'); window.location.href='reviewshow.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
