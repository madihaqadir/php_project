<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Community show Form</h1>
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
                          <th>  Name</th>
                          <th> Descrption</th>
                          <th> Member</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `community`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['community_id'] ?></td>
                          <td class="py-1"><?php echo $row['name'] ?></td>
                          <td class="py-1"><?php echo $row['description'] ?></td>
                          <td class="py-1"><?php echo $row['members'] ?></td>

                          <td> 
                            <a href="communityupdate.php?updid=<?php echo $row['community_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="communitydelete.php?dltid=<?php echo $row['community_id'] ?>">
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