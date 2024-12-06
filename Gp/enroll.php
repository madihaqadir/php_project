<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index Asaan trading</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/logo.jpg" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <section id="review" class="call-to-action section dark-background">
    <!-- Background image -->
    <img src="assets/img/contact.jpg.jpg" alt="Background" class="cta-background">
    
    <!-- Review Form Container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="text-white text-uppercase font-weight-bold">Enroll Now</h1>
                <h2 class="mb-4 text-white">Get In Touch</h2>
                
                <!-- Review Form -->
                <div class="contact-form">
                    <form class="forms-sample" action="enrollaction.php" method="POST" enctype="multipart/form-data">
                        <!-- Visitor Name -->
                        <div class="form-group">
                            <label for="name" class="text-white"> Name</label>
                            <input type="text" class="form-control" id="name" name="visitorname" placeholder="Enter your name" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <!-- Comment -->
                        <div class="form-group">
                            <label for="email" class="text-white">Email</label>
                            <input class="form-control" id="email" name="email" rows="3" placeholder="Write your email" required></input>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <!-- Date -->
                        <div class="form-group">
                                <label for="course" class="form-label">Select Course</label>
                                <select name="course" class="form-control border-0 p-4" id="course" required="required" data-validation-required-message="Please select a course">
                                    <option value="" disabled selected>Select a course</option>
                                    <option value="advance">Advance</option>
                                    <option value="professional">Professional</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        
                        <!-- Date -->
                        <div class="form-group">
                            <label for="date" class="text-white">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                            <p class="help-block text-danger"></p>
                        </div> 
                        <!-- contact -->
                            <div class="form-group">
                        <label for="contact" class="form-label">Contact No</label>
                        <input class="form-control" id="contact" name="contact" rows="3" placeholder="Enter your contact" required></input>
                        <p class="help-block text-danger"></p>
                            </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary py-3 px-4" name="sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

include "footer.php"

?>
 <style> /* Section Background */
.call-to-action {
    position: relative;
    padding: 50px 0;
    background-color: #000; /* Fallback background */
}

.cta-background {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

/* Container styling */
.container {
    position: relative;
    z-index: 1;
}

.contact-form {
    padding: 30px;
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent dark background */
    border-radius: 10px;
}

h1, h2 {
    text-align: center;
}

h1 {
    text-transform: uppercase;
    font-weight: bold;
    color: #007bff; /* Bootstrap primary color */
}

h2 {
    margin-bottom: 1.5rem;
    color: #fff;
}

.text-white {
    color: #fff;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control, .form-control-file {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: none;
}

.form-control {
    background-color: #333; /* Dark background for input */
    color: #fff; /* White text color */
}

.form-control-file {
    background-color: #444; /* Slightly lighter background for file input */
    color: #fff;
}

textarea.form-control {
    resize: none;
}

.btn {
    display: inline-block;
    background-color: #007bff; /* Primary color */
    color: #fff;
    border: none;
    padding: 15px 30px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

/* Custom styles for help-block */
.help-block {
    margin-top: 0.5rem;
    font-size: 0.875rem;
    color: #dc3545; /* Bootstrap's danger color */
}

/* Responsive styling */
@media (max-width: 768px) {
    .contact-form {
        padding: 20px;
    }

    .btn {
        width: 100%;
        padding: 10px;
    }
}
</style>
</body>
</html>
