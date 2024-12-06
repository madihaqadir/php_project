<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Market show Form</h1>
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
                          <th> Market Name</th>
                          <th> Descrption</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <!-- SELECT `market_id`, `market_name`, `market_desc` FROM `market` WHERE 1 -->
                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `market`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['market_id'] ?></td>
                          <td class="py-1"><?php echo $row['market_name'] ?></td>
                          <td class="py-1"><?php echo $row['market_desc'] ?></td>

                          <td> 
                            <a href="marketupdate.php?updid=<?php echo $row['market_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="marketdelete.php?dltid=<?php echo $row['market_id'] ?>">
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