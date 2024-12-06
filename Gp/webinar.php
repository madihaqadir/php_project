<?php include "header.php"; ?>
<?php
// Connect to the database
include('connection.php'); // Your DB connection file

// Fetch webinars for users to view
$query = "SELECT * FROM livewebinar ORDER BY date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Webinars</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color:  rgba(3, 14, 80, 0.8);
            color: #333;
        }

        /* Call to action section with background video */
        .call-to-action {
            position: relative;
            padding: 100px 0;
            color: white;
            text-align: center;
            z-index: 1;
            overflow: hidden; /* Make sure the video doesn’t overflow */
        }

        /* Video styling */
        .call-to-action video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the section */
            z-index: 0.5; /* Make sure video stays behind content */
        }

        .call-to-action::before {
            content: '';
            background-color: rgba(0, 0, 0, 0.6); /* Overlay for better text readability */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0; /* The overlay should be above the video but behind the content */
        }

        .container {
            position: relative; /* Ensure the content is above the video and overlay */
            z-index: 1;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-transform: uppercase;
        }
        .webinar-card {
    background-color: rgba(255, 255, 255, 0.7); /* White background with 70% opacity */
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
    transition: all 0.3s ease-in-out;
}

.webinar-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

        .webinar-card h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #007bff;
        }

        .webinar-card p {
            font-size: 1rem;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 30px;
            padding: 10px 20px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .no-webinars {
            font-size: 1.2rem;
            color: #e74c3c;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<section id="webinar" class="call-to-action">
    <!-- Video background -->
    <video autoplay muted loop>
        <source src="assets/upload/ASAAN TRADING.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Webinars content -->
    <div class="container">
        <h1>Upcoming Webinars</h1>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='webinar-card'>";
                echo "<h3>" . htmlspecialchars($row['topic']) . "</h3>";
                echo "<p>Date: " . htmlspecialchars($row['date']) . "</p>";
                echo "<a href='" . htmlspecialchars($row['recorded_webinar']) . "' class='btn btn-primary'>Watch Recording</a>";
                echo "</div>";
            }
        } else {
            echo "<p class='no-webinars'>No webinars available at the moment.</p>";
        }
        ?>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php

include "footer.php"

?>
