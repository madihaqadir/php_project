<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Course Update Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                    <div class="form-group">
                            <label for="exampleInputName1">Course Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="cname" value="<?php echo $row['course_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Course Description</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="cdesc" value="<?php echo $row['course_desc']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Market Information</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="minfo" value="<?php echo $row['market_info']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Education Plan</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="eplan" value="<?php echo $row['education_plan']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">SM Concept</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="smconcept" value="<?php echo $row['sm_concept']; ?>">
                        </div>
                   
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM course WHERE course_id= $userid";
                            $result = mysqli_query($conn,$qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                       
                        <?php
                        
                        }
                        ?>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="up" >Update</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php

include "connection.php";
if(isset($_POST['up'])) {
    $cname=$_POST['cname'];
    $cdesc=$_POST['cdesc'];
    $minfo=$_POST['minfo'];
    $eplan=$_POST['eplan'];
    $smconcept=$_POST['smconcept'];

    $insert_qry="UPDATE course SETcourse_name='$cname',course_desc='$cdesc',market_info='$minfo',education_plan='$eplan',sm_concept='$smconcept' WHERE course_id = $userid";
    
    $result = mysqli_query($conn,$insert_qry);
    echo"<script> 
    alert('updated successfully');
    window.location.href='courseshow.php';
    </script>";
}
?>

<?php
include "footer.php";
?>           