<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Community Add Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="communityaddaction.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="communityname">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="description">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputName1">Member</label>
                        <input type="number" class="form-control" id="exampleInputName1" name="member">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="sub" >Submit</button>
                    </form>
                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>