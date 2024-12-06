<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Policy show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Policy Tiltle</th>
                          <th> Policy Detail</th>
                 
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `Policy`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['policy_id'] ?></td>
                          <td class="py-1"><?php echo $row['policy_title'] ?></td>
                          <td class="py-1"><?php echo $row['policy_details'] ?></td>

                          <td> 
                            <a href="policyupdate.php?updid=<?php echo $row['policy_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="policydelete.php?dltid=<?php echo $row['policy_id'] ?>">
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