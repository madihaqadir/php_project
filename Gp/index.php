<?php

include "header.php"

?>
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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">



  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Take your online success to the next level.<span>.</span></h2>
            <p>We are team of talented digital marketers</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="community.php">Community</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-bullseye"></i>
              <h3><a href="webinar.php">Webinar</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-fullscreen-exit"></i>
              <h3><a href="workshop.php">WorkShop</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-card-list"></i>
              <h3><a href="#review">Review</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-gem"></i>
              <h3><a href="enroll.php">Enroll Form</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
    <style>
    /* Fullscreen background video */
    body, html {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
    
    /* Ensure the video takes full height of its container */
    video {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Adjusting the layout to ensure the video is positioned properly */
    .about {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
    }
    
    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-6 {
        width: 50%;
        padding: 15px;
    }

    /* Ensure the video stays contained on the right side */
    .order-1 {
        order: 1;
    }

    .order-2 {
        order: 2;
    }

    @media (max-width: 768px) {
        .col-lg-6 {
            width: 100%;
        }

        .order-1,
        .order-2 {
            order: initial;
        }
    }
</style>

<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 content">
                <h3>ABOUT US</h3>
                <h4>ASAAN TRADING ACADEMY</h4>
                <p class="fst-italic">
                    Founded in 2023, Asaan Trading Academy is your premier destination for financial market education. With 12 years of trading experience, our experts provide comprehensive training in forex, stocks, and commodities trading.
                </p>
                <p>
                    Our mission is simple: to empower both newcomers and experienced traders with the knowledge and skills needed to navigate financial markets successfully.
                </p>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <video autoplay muted loop>
                    <source src="assets/upload/ASAAN TRADING.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

   <!-- /About Section -->


   <!-- course Section -->
   <section id="course" class="call-action" class="dark-background">
    <section id="course" class="call-action">
   <h1 id="section-title">COURSES</h1>

   <div id="container2">
      <div class="col-md-4">
         <div class="card2" onclick="window.location.href='table.php'">
            <h2>Advanced Course</h2>
            <p>Click here to view our Courses</p>
         </div>
      </div>

      <div class="col-md-4">
         <div class="card2" onclick="window.location.href='table1.php'">
            <h2>Professional Course</h2>
            <p>Click here to view our Courses</p>
         </div>
      </div>
   </div>

   <!-- Button outside the columns and centered -->
   <div class="button-container">
        <button class="submit" onclick="enrollNow();">ENROLL NOW+</button> <!-- Added onclick attribute here -->
    </div>
    <script>
        function enrollNow() {
            // Change 'enroll.html' to the actual URL you want to redirect to
            window.location.href = 'enroll.php'; 
        }
    </script>
</section>

</section>
<!-- /course Section -->
<style>
  .call-action {
    position: relative;
    padding: 20px 0;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    min-height: 100vh;
    color: white;
    text-align: center;
    background-color: #ffff;
}

#section-title {
    position: relative;
    z-index: 2;
    text-decoration: underline;
    font-weight: bold;
    color: rgba(3, 14, 80, 0.8);
    font-size: 45px;
}

#container2 {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 100px 0;
    position: relative;
    z-index: 1;
    gap: 30px;
}

/* Button container styling */
.button-container {
    display: flex;
    justify-content: center; /* Center the button */
    align-items: center;
    margin-top: 10px; /* Reduced margin to move the button closer */
}

.submit {
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background-color: rgba(3, 14, 80, 0.8);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit:hover {
    background-color: rgba(3, 14, 80, 1);
}

/* Card styling */
.card2 {
    width: 400px;
    height: 40vh;
    padding: 20px;
    margin: 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
    background-color: rgba(3, 14, 80, 0.8);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card2:hover {
    transform: scale(1.05);
}

.card2 h2, .card2 p {
    color: white;
}


</style>

    
    <section id="review" class="call-to-action section dark-background">
    <!-- Background image -->
    <img src="assets/img/cta-bg.jpg" alt="Background" class="cta-background">
    
    <!-- Review Form Container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="text-white text-uppercase font-weight-bold">Review Form</h1>
                <h2 class="mb-4 text-white">Share Your Experience</h2>
                
                <!-- Review Form -->
                <div class="contact-form">
                    <form class="forms-sample" action="reviewaddaction.php" method="POST" enctype="multipart/form-data">
                        <!-- Visitor Name -->
                        <div class="form-group">
                            <label for="name" class="text-white">Visitor Name</label>
                            <input type="text" class="form-control" id="name" name="visitorname" placeholder="Enter your name" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <!-- Comment --> 
                        <div class="form-group">
                            <label for="comment" class="text-white">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Write your comment" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <!-- Date -->
                        <div class="form-group">
                            <label for="date" class="text-white">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <!-- Video Upload -->
                        <div class="form-group">
                            <label for="video_url" class="text-white">Upload Video</label>
                            <input type="file" class="form-control-file" id="video_url" name="video_url" accept="video/*" required>
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
    <!-- Team Section -->
    <section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Mentors</h2>
        <p>Our Mentors</p>
    </div>
    <!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/mebilal.jpg.jpeg" class="img-fluid" alt="" style="width: 100%; height: auto; max-width: 300px;">
                    </div>
                    <div class="member-info">
                        <h4>Bilal H.</h4>
                        <span>Forex Trader</span>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/ceo.jpg" class="img-fluid" alt="" style="width: 100%; height: auto; max-width: 300px;">
                        <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                    </div>
                    <div class="member-info">
                        <h4>Sabhi Saleem</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/mentor jawadd.jpg.jpeg" class="img-fluid" alt="" style="width: 100%; height: auto; max-width: 300px;">
                        <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                    </div>
                    <div class="member-info">
                        <h4>Muhammad Jawwad Ghouri</h4>
                        <span>Forex Trader</span>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mebilal.jpg.jpeg" class="testimonial-img" alt="">
                <h3>Bilal H.</h3>
                <h4>Forex &amp;Trader</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Bilal H. is a dedicated forex trader with experience since 2017. Initially focused on retail trading, he embraced Smart Money Concepts in 2020 and advanced his skills in ICT in 2021. Funded and consistently profitable since 2022, he combines innovative strategies with a strong understanding of market dynamics.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/ceo.jpg" class="testimonial-img" alt="">
                <h3>Sabhi saleem</h3>
                <h4>Forex Trader</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Sabhi Saleem is the visionary leader and CEO of Asaan Trading, a dynamic company specializing in global trade solutions. With over [13] years of experience in the trading and business sector, Sabhi saleem has driven the company’s growth through innovative strategies and a deep understanding of international markets. Known for their strategic thinking and commitment to excellence, Sabhi saleem focuses on building strong partnerships, streamlining trade operations, and navigating the complexities of import/export processes. Their leadership continues to propel Asaan Trading towards new horizons, maintaining the company’s reputation for reliability and success in the global market.

</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mentor jawadd.jpg.jpeg" class="testimonial-img" alt="">
                <h3>Muhammad Jawwad Ghouri</h3>
                <h4>Forex Trader</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Muhammad Jawwad Ghouri is a Multi Talented and skilled Engineer and Mentor, is a seasoned professional Forex trader who began his journey back in 2018, mastering price action methodologies With years of market experience, he evolved and developed a highly successful proprietary trading strategy that blends Smart Money Concepts (SMC), liquidity, market structure, and volume analysis since 2021. His deep understanding of market dynamics and technical analysis has enabled him to consistently generate profitable results, making him a trusted expert in the trading community.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
<section id="faq" class="faq-section">
    <div class="container">
        <h2>Frequently Asked Questions</h2>

        <div class="faq-item">
        <div class="question" onclick="toggleFaq(this)">
    <h3>What courses do you offer?</h3>
    <span class="toggle-icon">+</span>
</div>

            <div class="answer">
                <p>Our trading academy offers a range of courses including:
                  <ul></ul>
<li>•	Introduction to Financial Markets</li>
<li>•	ICT & SMC advanced Strategies </li>
<li>•	Volume and Structured based</li>
<li>•	Trading strategies</li>
<li>•	Risk Management in Trading</li>
<li>•	Advanced Trading Strategies</li>
<li>•	Forex Trading Essentials</li>
<li>•	Options and Futures Trading</li>
</ul></p>
            </div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleFaq(this)">
                <h3>Who are your courses suitable for?</h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">
                <p> Our courses cater to a wide range of individuals, from complete beginners to experienced traders looking to refine their skills. Each course description specifies the recommended experience level.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleFaq(this)">
                <h3>How long does each course take to complete?</h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">
                <p>Course duration varies depending on the complexity of the subject matter. On average, our courses range from 8 to 12 weeks. Specific course lengths are listed in each course description.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleFaq(this)">
                <h3>Are your courses online or in-person?</h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">
                <p>We offer both online and in-person courses. Our online courses provide flexibility for students to learn at their own pace, while our in-person courses offer hands-on experience and direct interaction with instructors.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleFaq(this)">
                <h3>Do you provide any practical trading experience?</h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">
                <p>Yes, our courses include simulated trading exercises using real-time market data. This allows students to practice their skills in a risk-free environment.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleFaq(this)">
                <h3>Are your courses online or in-person?</h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">
                <p>Upon successful completion of our courses, students receive a Trading Academy Certificate. Some of our advanced courses also prepare students for industry-recognized certifications.</p>
            </div>
        </div>

    </div>
</section>

<style>
    .faq-section {
        padding: 50px 20px;
        background-color: #f8f8f8;
    }

    .faq-section h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 40px;
        color: #333;
    }

    .faq-item {
        background-color: #fff;
        margin-bottom: 15px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        position: relative;
    }

    .faq-item .question {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-item h3 {
        font-size: 1.4rem;
        color: #333;
        margin: 0;
    }

    .faq-item .toggle-icon {
        font-size: 1.5rem;
        color: #007BFF;
    }

    .faq-item .answer {
        display: none; /* Initially hide the answer */
        padding-top: 15px;
        font-size: 1rem;
        color: #666;
    }

    .faq-item.active .answer {
        display: block; /* Show the answer when active */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .faq-section {
            padding: 30px 10px;
        }

        .faq-section h2 {
            font-size: 2rem;
        }
    }
</style>

<script>
   function toggleFaq(questionElement) {
    // Get the parent faq-item element
    const faqItem = questionElement.parentElement;
    
    // Toggle the active class on the faq-item
    faqItem.classList.toggle('active');
    
    // Get the toggle icon within the question element
    const icon = questionElement.querySelector('.toggle-icon');
    
    // Change icon text based on the active state
    if (faqItem.classList.contains('active')) {
        icon.textContent = '-'; // Change to minus
    } else {
        icon.textContent = '+'; // Change to plus
    }
}

</script>




  </main>


  <?php

include "footer.php"

?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
