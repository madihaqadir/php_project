<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Webinar Add Form</h1>
                </span>
              </div>
            </div>


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form action="webinaraddaction.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="topicname">Topic Name</label>
    <input type="text" class="form-control" name="topicname" required>
</div>

<div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" name="date" required>
</div>

<div class="form-group">
    <label for="recorded_webinar">Recorded Webinar</label>
    <input type="file" class="form-control" id="recorded_webinar" name="recorded_webinar" required>
</div>

<div class="form-group">
    <label for="mentor_id">Select Mentor</label>
    <select class="form-control" name="mentor_id" required>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `mentor`";
        $res = mysqli_query($conn, $qry);

        while ($opt = mysqli_fetch_assoc($res)) {
            ?>
            <option value="<?php echo $opt['mentor_id']; ?>"><?php echo $opt['name']; ?></option>
            <?php
        } ?>
    </select>
</div>

<button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>

</form>

                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>