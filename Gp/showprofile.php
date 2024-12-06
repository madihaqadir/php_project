<?php 
// Start the session at the top of your script
include "header.php"; 
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="container mt-3 mb-3 mx-3 my-3">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Check if session 'img' is set -->
                    <?php if(isset($_SESSION['img']) && !empty($_SESSION['img'])): ?>
                        <img src="<?php echo $_SESSION['img']; ?>" class="img-thumbnail" alt="Profile Image" />
                    <?php else: ?>
                        <img src="path_to_default_image/default.jpg" class="img-thumbnail" alt="Default Profile Image" />
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 mt-5 mb-5">
                    <div class="card">
                        <?php 
                            require "connection.php";
                        ?>
                        <div class="card-body">
                            <h1>User Profile Details</h1>
                            <h5 class="card-title">Name: 
                                <!-- Check if session 'name' is set -->
                                <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8') : 'Name not available'; ?>
                            </h5>
                            <h5 class="card-title">Email: 
                                <!-- Check if session 'email' is set -->
                                <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8') : 'Email not available'; ?>
                            </h5>
                            <h5 class="card-title">Password:  
                                <!-- Check if session 'password' is set -->
                                <?php echo isset($_SESSION['password']) ? htmlspecialchars($_SESSION['password'], ENT_QUOTES, 'UTF-8') : 'Password not available'; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include "footer.php"; 
?>
