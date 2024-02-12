<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data and trim whitespace
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password']; // Password should not be trimmed

    // Validate and sanitize inputs
    $fname = filter_var($fname, FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_var($lname, FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Ensure phone number is exactly 10 digits
    $phone = substr($phone, 0, 10);
    
    // Additional validation
    if (empty($fname) || empty($lname) || empty($username) || empty($email) || empty($phone) || empty($password)) {
        echo 'All fields are required.';
        exit;
    }
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
        exit;
    }

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO info (fname, lname, username, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmtinsert = $conn->prepare($sql);

    if ($stmtinsert) {
        $stmtinsert->bind_param("ssssss", $fname, $lname, $username, $email, $phone, $password);
        $result = $stmtinsert->execute();

        if ($result) {
            echo 'Successfully saved.';
        } else {
            echo 'There were errors while saving the data.';
            echo 'Error: ' . $stmtinsert->error;
        }
    } else {
        echo 'Statement preparation failed: ' . $conn->error;
    }
} else {
    echo 'No data';
}

// Close the connection
$conn->close();
?>
