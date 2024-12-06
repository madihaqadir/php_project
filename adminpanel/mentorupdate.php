<?php
include "header.php";
require "connection.php";

$userid = $_GET['updid'];
$qry = "SELECT * FROM `mentor` WHERE mentor_id = $userid";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Mentor Update Form</h1>
                </span>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                        <div class="form-group">
                            <label for="mentorname">Name</label>
                            <input type="text" class="form-control" id="mentorname" name="mentorname" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="number" class="form-control" id="contact" name="contact" value="<?php echo isset($row['contact_info']) ? $row['contact_info'] : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <input type="text" class="form-control" id="bio" name="bio" value="<?php echo isset($row['bio']) ? $row['bio'] : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="introduction">Introduction</label>
                            <input type="text" class="form-control" id="introduction" name="introduction" value="<?php echo isset($row['introduction']) ? $row['introduction'] : ''; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="up">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
if (isset($_POST['up'])) {
    $mentorname = $_POST['mentorname'];
    $contact = $_POST['contact'];
    $bio = $_POST['bio'];
    $introduction = $_POST['introduction'];

    $update_qry = "UPDATE `mentor` 
                   SET `name` = '$mentorname', 
                       `contact_info` = '$contact', 
                       `bio` = '$bio', 
                       `introduction` = '$introduction' 
                   WHERE mentor_id = $userid";
    $update_result = mysqli_query($conn, $update_qry);

    if ($update_result) {
        echo "<script> 
            alert('Updated successfully');
            window.location.href = 'mentorshow.php';
        </script>";
    } else {
        echo "<script> 
            alert('Update failed');
        </script>";
    }
}
?>

<?php
include "footer.php";
?>
