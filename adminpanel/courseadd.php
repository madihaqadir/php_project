<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Course Add Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="courseaddaction.php" method="POST">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Course Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="cname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Course Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="cdesc">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Market Information</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="minfo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Education Plan</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="eplan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Smart Money Concept</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="smconcept">
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="sub" >Submit</button>
                    </form>
                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>