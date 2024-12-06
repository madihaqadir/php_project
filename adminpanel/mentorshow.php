<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Mentor show Form</h1>
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
                          <th>Name</th>
                          <th>CONTACT</th>
                          <th>BIO</th>
                          <th>INTRODUCATION</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
            <!-- SELECT `mentor_id`, `name`, `contact_info`, `bio`, `introduction` FROM `mentor` WHERE 1 -->

                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `mentor`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['mentor_id'] ?></td>
                          <td class="py-1"><?php echo $row['name'] ?></td>
                          <td class="py-1"><?php echo $row['contact_info'] ?></td>
                          <td class="py-1"><?php echo $row['bio'] ?></td>
                          <td class="py-1"><?php echo $row['introduction'] ?></td>

                          <td> 
                            <a href="mentorupdate.php?updid=<?php echo $row['mentor_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="mentordelete.php?dltid=<?php echo $row['mentor_id'] ?>">
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