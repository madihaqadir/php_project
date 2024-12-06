<?php
session_start();
require "connection.php";

if (isset($_POST['sub'])) {
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM `user` WHERE users_name = ? AND user_passward = ?");
    $stmt->bind_param("ss", $user, $pwd); // "ss" means both are strings
    $stmt->execute();
    
    $res = $stmt->get_result();

    if ($res) {
        $row = $res->fetch_assoc();
        $count = $res->num_rows;
        
        if ($count > 0) {
            $_SESSION['id'] = $row['users_id'];
            $_SESSION['role'] = $row['roll_id_fk'];
            $_SESSION['name'] = $row['users_name'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['password'] = $row['user_passward'];
            $_SESSION['img'] = $row['user_img'];

            if ($_SESSION['role'] == 1) {
                echo "<script>window.location.href='index.php';</script>";
            } else if ($_SESSION['role'] == 2) {
                echo "<script>window.location.href='userindex.php';</script>";
            }
        } else {
            echo "<script>alert('Login Failed');</script>";
        }
    } else {
        echo "<script>alert('Database query error');</script>";
    }

    // Close statement and connection
    $stmt->close();
}
?>
