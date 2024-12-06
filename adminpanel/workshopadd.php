<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>WorkShop Add Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form action="workshopaddaction.php" method="POST">
    <div class="form-group">
        <label for="topicname">Topic Name</label>
        <input type="text" class="form-control" name="topicname" required>
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" required>
    </div>

    <div class="form-group">
        <label for="free">Free (Yes/No) </label>
        <select name="free" class="form-control"required>
          <option value="Yes">Yes</option>
          <option value="No">No</option>

        </select>
        <!-- <input type="text" class="form-control" name="free" required> -->
       
       
    </div>

    <div class="form-group">
        <label for="mentor_id">Select Mentor</label>
        <select class="form-control" name="mentor_id" required>
            <!-- <option value="">Select Mentor</option> -->
            <?php
                          require "connection.php";
                          $qry = "SELECT * FROM `mentor`";
                          $res = mysqli_query($conn, $qry);

                          while ($opt =mysqli_fetch_assoc($res)){
                            ?>
                      <option value="<?php echo $opt['mentor_id']?>"><?php echo $opt['name']?></option>
                      <?php
                          } ?>
        </select>
    </div>

    <button type="submit" name="sub" class="btn btn-primary">Add Workshop</button>
</form>

                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>