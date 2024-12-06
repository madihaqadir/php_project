<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Course show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">


                  <!-- INSERT INTO `agent`(`agent_id`, `user_id_FK`, `branch_id_FK`, `city_id_fk`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]') -->

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Course Name</th>
                          <th>Course Description</th>
                          <th>Market Information</th>
                          <th>Education Plan</th>
                          <th>SM Concept</th>
                        
                          <th>ACTION</th>
                        </tr>
                      </thead>
            

                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `course`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['course_id'] ?></td>
                          <td class="py-1"><?php echo $row['course_name'] ?></td>
                          <td class="py-1"><?php echo $row['course_desc'] ?></td>
                          <td class="py-1"><?php echo $row['market_info'] ?></td>
                          <td class="py-1"><?php echo $row['education_plan'] ?></td>
                          <td class="py-1"><?php echo $row['sm_concept'] ?></td>

                          <td> 
                            <a href="courseupdate.php?updid=<?php echo $row['course_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="coursedelete.php?dltid=<?php echo $row['course_id'] ?>">
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