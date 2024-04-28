<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Encrypt the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert username and hashed password into the database
    $query = "INSERT INTO members (username, password) VALUES ('$username', '$hashed_password')";
    $result = $conn->query($query);

    if ($result) {
        echo "Game On!!";
        // Optionally, redirect to a login page or any other page after successful registration
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
