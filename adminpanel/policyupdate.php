<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Policy Update Form</h1>
                </span>
              </div>
            </div>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Policy Title</label>
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `policy` WHERE policy_id = $userid";
                            $result = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                        <input type="text" class="form-control" id="exampleInputName1" name="policytitle" value="<?php echo $row['policy_title'] ?>">
                        <br>
                        <label for="exampleInputName1">Policy Detail</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="policydetail" value="<?php echo $row['policy_details'] ?>">
                        
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
    $policytitle = mysqli_real_escape_string($conn, $_POST['policytitle']);
    $policydetail = mysqli_real_escape_string($conn, $_POST['policydetail']);

    // Corrected update query
    $update_qry = "UPDATE `policy` SET `policy_title`='$policytitle', `policy_details`='$policydetail' WHERE policy_id = $userid";
    
    $result = mysqli_query($conn, $update_qry);

    if ($result) {
        echo "<script> 
            alert('Updated successfully'); 
            window.location.href='policyshow.php';
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
