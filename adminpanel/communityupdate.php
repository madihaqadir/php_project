<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Community Update Form</h1>
                </span>
              </div>
            </div>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Community Name</label>
                        
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `community` WHERE community_id = $userid";
                            $result = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                        <input type="text" class="form-control" id="exampleInputName1" name="communityname" value="<?php echo $row['name'] ?>">
                        <br>
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="description" value="<?php echo $row['description'] ?>">
                        <br>
                        <label for="exampleInputName1">Members</label>

                        <input type="number" class="form-control" id="exampleInputName1" name="members" value="<?php echo $row['members'] ?>">
                        <?php
                        }
                        ?>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="up">Update</button>
                    </form>
                  </div>
                </div>
              </div>

<?php
if (isset($_POST['up'])) {
    $communityname = mysqli_real_escape_string($conn, $_POST['communityname']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $members = mysqli_real_escape_string($conn, $_POST['members']);

    // Corrected update query
    $update_qry = "UPDATE `community` SET `name`='$communityname', `description`='$description', `members`='$members' WHERE community_id = $userid";
    
    $result = mysqli_query($conn, $update_qry);

    if ($result) {
        echo "<script> 
            alert('Updated successfully');
            window.location.href = 'communityshow.php';
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
