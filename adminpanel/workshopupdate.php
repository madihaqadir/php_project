<?php
include "header.php";
require "connection.php";

// Fetch the benefit data before displaying the form
$userid = $_GET['updid'];  // Get the user id from the URL
$qry = "SELECT * FROM `benefits` WHERE benefit_id = $userid";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);  // Fetch the data into the $row variable

?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <h1>WorkShop Update Form</h1>
        </span>
      </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample" action="#" method="POST">
            <div class="form-group">
              <label for="exampleInputName1">Topic</label>
              <input type="text" class="form-control" id="exampleInputName1" name="topic" value="<?php echo isset($row['topic']) ? $row['topic'] : ''; ?>">
            </div> 
            <div class="form-group">
              <label for="exampleInputName1">Date</label>
              <input type="date" class="form-control" id="exampleInputName1" name="date" value="<?php echo isset($row['date']) ? $row['date'] : ''; ?>">
            </div>    
            <div class="form-group">
              <label for="exampleInputName1">Free</label>
              
              <input type="text" class="form-control" id="exampleInputName1" name="free" value="<?php echo isset($row['free']) ? $row['free'] : ''; ?>">
            </div>                  


            <button type="submit" class="btn btn-primary mr-2" name="up">Update</button>
          </form>
        </div>
      </div>
    </div>

    <?php
    // Handle the form submission and update the database
    if (isset($_POST['up'])) {
        $topic = $_POST['topic'];
        $date = $_POST['date'];
        $free = $_POST['free'];
        $update_qry = "UPDATE `workshop` SET `topic` = '$topic' ,`date` = '$date', `free` = '$free'WHERE workshop_id = $userid";
        $update_result = mysqli_query($conn, $update_qry);
        
        if ($update_result) {
            echo "<script>
              alert('Updated successfully');
              window.location.href='workshopshow.php';
              </script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    include "footer.php";
    ?>
