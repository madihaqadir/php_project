<?php
include "header.php"
?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="card text-left shadow-sm p-5">
            <div class="brand-logo text-center mb-4">
              <!-- Uncomment if you have a logo -->
              <!-- <img src="img/logo.connectplus.jpg" alt="Logo" style="width:150px;"> -->
            </div>
            <h4 class="text-center">Hello! Let's get started</h4>
            <h6 class="font-weight-light text-center mb-4">Sign in to continue</h6>

            <!-- Sign in form -->
            <form action="signaction.php" method="POST">
              <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required>
              </div>

              <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
              </div>

              <div class="mt-3">
                <button type="submit" name="sub" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="rememberMe">
                  <label class="form-check-label text-muted" for="rememberMe">Keep me signed in</label>
                </div>
                <a href="#" class="auth-link text-black">Forgot password?</a>
              </div>

              <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="signuplogin.php" class="text-primary">Create</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->

<?php
include "footer.php"
?>  
