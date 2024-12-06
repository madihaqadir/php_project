<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asaan Trading - Workshops</title>
  
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

  <style>
/* Main container styling */
.workshop-container {
  width: 80%;
  max-width: 900px;
  height: 300px;
  margin: 50px auto;
  background-color:  rgba(3, 14, 80, 0.8);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px  rgba(3, 14, 80, 0.8);
  overflow-y: auto;
}

/* Heading styling */
.workshop-heading {
  text-align: center;
  font-size: 36px;
  margin-bottom: 20px;
  color: white; /* Changed color to gold */
}

/* Table styling */
.workshop-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.workshop-table, .workshop-table th, .workshop-table td {
  border: 1px solid #fff;
}

.workshop-table th, .workshop-table td {
  padding: 12px;
  text-align: center;
}

.workshop-table th {
  background-color: #333;
  color: #fff;
}

.workshop-table td {
  background-color: rgba(255, 255, 255, 0.1);
  color: #fff;
}

.workshop-table tr:nth-child(even) {
  background-color: rgba(255, 255, 255, 0.2);
}
  </style>
</head>
<body>

  <div class="workshop-container">
    <h1 class="workshop-heading">Upcoming Workshops</h1>
    <table class="workshop-table">
      <tr>
        <th>Workshop ID</th>
        <th>Topic</th>
        <th>Date</th>
        <th>Mentor</th>
        <th>Free</th>
      </tr>

      <?php
        // Include the database connection
        include('connection.php');

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch workshop data from the `workshop` table
        $sql = "SELECT workshop_id, topic, date, free, name as mentor_name
                FROM workshop
                JOIN mentor ON mentor_id_fk = mentor_id";
        $result = $conn->query($sql);

        // Display each workshop in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['workshop_id']}</td>
                        <td>{$row['topic']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['mentor_name']}</td>
                        <td>" . ($row['free'] ? 'Yes' : 'No') . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No workshops available</td></tr>";
        }

        // Close the database connection
        $conn->close();
      ?>
    </table>
  </div>

  <?php
  include "footer.php";
  ?>

</body>
</html>
