<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    

  



<?php
include "header.php";
include "connection.php"; // Ensure the connection to the database

// Fetch the existing webinar details if 'updid' is provided via GET
if (isset($_GET['updid'])) {
    $webinar_id = $_GET['updid'];
    
    // Fetch the webinar details based on the webinar ID
    $qry = "SELECT * FROM livewebinar WHERE webinar_id = '$webinar_id'";
    $res = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($res);

    if (!$row) {
        echo "<script>alert('Webinar not found.'); window.location.href='webinarshow.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href='webinarshow.php';</script>";
    exit;
}
?>

<!-- Main Panel -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <h1>Webinar Update Form</h1>
        </span>
      </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        <form class="forms-sample" action="#"method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="webinar_id" value="<?php echo $row['webinar_id']; ?>" />

                        <!-- Topic Name -->
                        <div class="form-group">
                            <label for="topicname">Topic Name</label>
                            <input type="text" class="form-control" name="topicname" value="<?php echo $row['topic']; ?>" required>
                        </div>

                        <!-- Date -->
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>" required>
                        </div>

                        <!-- Recorded Webinar -->
                        <div class="form-group">
                            <label for="recorded_webinar">Recorded Webinar</label>
                            <input type="file" class="form-control" name="recorded_webinar">
                            <?php if ($row['recorded_webinar']) { ?>
                                <p>Current File: <a href="<?php echo $row['recorded_webinar']; ?>" target="_blank">View Recording</a></p>
                            <?php } ?>
                        </div>

                        <!-- Mentor -->
                        <div class="form-group">
                            <label for="mentor_id">Select Mentor</label>
                            <select class="form-control" name="mentor_id" required>
                                <?php
                                $mentor_qry = "SELECT * FROM mentor";
                                $mentor_res = mysqli_query($conn, $mentor_qry);
                                while ($mentor = mysqli_fetch_assoc($mentor_res)) {
                                    $selected = ($mentor['mentor_id'] == $row['mentor_id_FK']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $mentor['mentor_id']; ?>" <?php echo $selected; ?>>
                                        <?php echo $mentor['name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <button type="submit" name="update" class="btn btn-primary">Update Webinar</button>
                    </form>
        </div>
      </div>
    </div>

<?php


if (isset($_POST['update'])) {
    $webinar_id = $_POST['webinar_id'];
    $topicname = $_POST['topicname'];
    $date = $_POST['date'];
    $mentor_id = $_POST['mentor_id'];

    // Handle file upload if a new file is uploaded
    if (!empty($_FILES['recorded_webinar']['name'])) {
        $recorded_webinar = $_FILES['recorded_webinar']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($recorded_webinar);

        // Move the uploaded file
        if (move_uploaded_file($_FILES['recorded_webinar']['tmp_name'], $target_file)) {
            // Update with a new file
            $update_qry = "UPDATE livewebinar SET topic = '$topicname', date = '$date', mentor_id_FK = '$mentor_id', recorded_webinar = '$target_file' WHERE webinar_id = '$webinar_id'";
        } else {
            echo "<script>alert('Error uploading file.'); window.location.href='webinarupdate.php?updid=$webinar_id';</script>";
            exit;
        }
    } else {
        // Update without changing the file
        $update_qry = "UPDATE livewebinar SET topic = '$topicname', date = '$date', mentor_id_FK = '$mentor_id' WHERE webinar_id = '$webinar_id'";
    }

    // Execute the update query
    if (mysqli_query($conn, $update_qry)) {
        echo "<script>alert('Webinar updated successfully'); window.location.href='webinarshow.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<?php include "footer.php"; ?>

</body>
</html>