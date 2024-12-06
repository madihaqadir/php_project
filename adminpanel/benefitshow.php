<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Benefits show Form</h1>
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
                          <th>Description</th>
                        
                          <th>ACTION</th>
                        </tr>
                      </thead>
            

                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `benefits`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['benefit_id'] ?></td>
                          <td class="py-1"><?php echo $row['description'] ?></td>

                          <td> 
                            <a href="benefitupdate.php?updid=<?php echo $row['benefit_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="benefitdelete.php?dltid=<?php echo $row['benefit_id'] ?>">
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