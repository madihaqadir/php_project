<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Mentor Add Form</h1>
                </span>
              </div>
            </div>
            <!-- SELECT `mentor_id`, `name`, `contact_info`, `bio`, `introduction` FROM `mentor` WHERE 1 -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="mentoraddaction.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="mentorname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact</label>
                        <input type="number" class="form-control" id="exampleInputName1" name="contact">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Bio</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="bio">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Introduction</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="introduction">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="sub" >Submit</button>
                    </form>
                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>