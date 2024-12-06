<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Workshop Show Form</h1>
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
                          <th>Mentor Name</th>
                          <th>Free</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        require "connection.php";

                        // Corrected JOIN query with assumed correct column name
                        $qry = "SELECT workshop.*, mentor.name FROM `workshop` 
                                JOIN `mentor` ON mentor.mentor_id = workshop.mentor_id_FK";

                        $res = mysqli_query($conn, $qry);

                        while ($row = mysqli_fetch_assoc($res)) {
                          ?>

                        <tr>
                            <td class="py-1"><?php echo $row['workshop_id']; ?></td>
                            <td class="py-1"><?php echo $row['topic']; ?></td>
                            <td class="py-1"><?php echo $row['date']; ?></td>
                            <td class="py-1"><?php echo $row['name']; ?></td> <!-- Changed this line -->
                            <td class="py-1"><?php echo $row['free']; ?></td>

                            <td> 
                              <a href="workshopupdate.php?updid=<?php echo $row['workshop_id']; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                              </a>
                              <a href="workshopdelete.php?dltid=<?php echo $row['workshop_id']; ?>">
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
