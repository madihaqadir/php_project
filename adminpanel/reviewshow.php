<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Review show Form</h1>
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
                          <th>Visitor Name</th>
                          <th>Comment</th>
                          <th>Date</th>
                          <th>Video_URL</th>

                        </tr>
                      </thead>
            <!-- SELECT `mentor_id`, `name`, `contact_info`, `bio`, `introduction` FROM `mentor` WHERE 1 -->
                    <!-- SELECT `review_id`, `video_url`, `comment`, `date`, `user_id_FK` FROM `review` WHERE 1 -->

                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `review`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
                          <td class="py-1"><?php echo $row['review_id'] ?></td>
                        <td class="py-1"><?php echo $row['Visitor_name'] ?></td>
                          <td class="py-1"><?php echo $row['comment'] ?></td>
                          <td class="py-1"><?php echo $row['date'] ?></td>
                          <td class="py-1">
    <video width="320" height="240" controls>
        <source src="<?php echo $row['video_url']; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</td>

                          <td> 
                      
                          <a href="reviewdelete.php?dltid=<?php echo $row['review_id'] ?>">
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