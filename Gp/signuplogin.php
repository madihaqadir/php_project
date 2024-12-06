<?php
include "header.php"; // Include header
?>
<div class="content-wrapper d-flex align-items-center auth">
  <div class="row w-100 justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="auth-form-light text-left p-5">
        <div class="brand-logo text-center">
          <h1>Signup</h1>
        </div>
        <h6 class="font-weight-light text-center mb-4">Signing up is easy. It only takes a few steps.</h6>
        <form action="signupaction.php" method="POST" enctype="multipart/form-data">
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="Name" placeholder="Username" required>
          </div>
          <div class="form-group mb-3">
            <input type="email" class="form-control" name="Email" placeholder="Email" required>
          </div>
          <div class="form-group mb-3">
            <input type="password" class="form-control" name="Password" placeholder="Password" required>
          </div>
          <div class="form-group mb-3">
            <input type="tel" class="form-control" name="mobilenumber" placeholder="Mobile Number" required>
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="Location" placeholder="Location" required>
          </div>
          <div class="form-group mb-3">
            <label for="role">Role Name</label>
            <select class="form-control" name="role" required>
              <option value="" disabled selected>Select Role</option>
              <?php
                require "connection.php";
                $qry = "SELECT * FROM `roll`";
                $res = mysqli_query($conn, $qry);
                while ($opt = mysqli_fetch_assoc($res)) {
                  echo '<option value="'.$opt['roll_id'].'">'.$opt['roll_name'].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group mb-3">
            <label for="img">Profile Picture</label>
            <input type="file" class="form-control" name="img" accept="image/*">
          </div>
          <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="terms">I agree to all Terms & Conditions</label>
          </div>
          <div class="d-grid">
            <button type="submit" name="sub"  class="btn btn-primary">Sign Up</button>
          </div>
        </form>
        <div class="text-center mt-4 font-weight-light">
          Already have an account? <a href="sign.php">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php"; // Include footer
?>
