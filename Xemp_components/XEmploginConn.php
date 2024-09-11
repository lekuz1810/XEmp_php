<?php
// Start session to manage user login state
session_start();

// Database connection
include "Xemp_Mysql_conn.php";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM xemp_login WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the username exists in the database
    if ($result->num_rows === 1) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Directly compare plain text passwords
        if ($password === $user['password']) {
            // Password is correct, set session and redirect based on role
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'Admin') {
                // Redirect to Admin Panel
                header("Location: ../XEmpAdminPanel.php");
                exit();
            } else {
                // Redirect to Employee Panel
                header("Location: ../XEmpEmployeePanel.php");
                exit();
            }
        } else {
            // Password is incorrect
            echo "Incorrect password!";
        }
    } else {
        // Username not found
        echo "Username not found!";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>
