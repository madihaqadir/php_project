<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Webinar Show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Topic</th>
                          <th>Date</th>
                          <th>Recorded Webinar</th>
                          <th>Mentor Name</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
            <!-- SELECT `webinar_id`, `topic`, `date`, `recorded_webinar`, `mentor_id_FK` FROM `livewebinar` WHERE 1 -->

                        <?php 
                        require "connection.php";

                        // Corrected JOIN query with assumed correct column names
                        $qry = "SELECT livewebinar.*, mentor.name FROM `livewebinar` 
                                JOIN `mentor` ON mentor.mentor_id = livewebinar.mentor_id_FK";

                        $res = mysqli_query($conn, $qry);

                        while ($row = mysqli_fetch_assoc($res)) {
                          ?>

                        <tr>
                            <td class="py-1"><?php echo $row['webinar_id']; ?></td>
                            <td class="py-1"><?php echo $row['topic']; ?></td>
                            <td class="py-1"><?php echo $row['date']; ?></td>
                            <td class="py-1">
                                <?php if ($row['recorded_webinar']) { ?>
                                    <a href="<?php echo $row['recorded_webinar']; ?>" target="_blank">View Recording</a>
                                <?php } else { ?>
                                    No Recording Available
                                <?php } ?>
                            </td>
                            <td class="py-1"><?php echo $row['name']; ?></td>

                            <td> 
                              <a href="webinarupdate.php?updid=<?php echo $row['webinar_id']; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                              </a>
                              <a href="webinardelete.php?dltid=<?php echo $row['webinar_id']; ?>">
                                <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                              </a>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
