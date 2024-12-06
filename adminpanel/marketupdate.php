<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Market Update Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Market Name</label>
                        
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `market` WHERE market_id= $userid";
                            $result = mysqli_query($conn,$qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                        <input type="text" class="form-control" id="exampleInputName1" name="marketname" value="<?php echo $row['market_name'] ?>">
                        <br>
                        <label for="exampleInputName1">Market Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="description" value="<?php echo $row['market_desc'] ?>">
                        <?php
                        
                        }
                        ?>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="up" >Update</button>
                    </form>
                  </div>
                </div>
              </div>
                      <!-- SELECT `market_id`, `market_name`, `market_desc` FROM `market` WHERE 1 -->

<?php


if(isset($_POST['up'])) {
  $marketname=$_POST['marketname'];
    $description=$_POST['description'];

    $insert_qry="UPDATE `market` SET `market_name`=' $marketname', `market_desc`=' $description' WHERE market_id = $userid";
    $result = mysqli_query($conn,$insert_qry);
    echo"<script> 
    alert('updated successfully');
    window.location.href='marketshow.php';
    </script>";
}
?>

<?php
include "footer.php";
?>