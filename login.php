<?php
// Simple hardcoded credentials for demonstration
$valid_username = "admin";
$valid_password = "password123";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === "") {
    echo "Wrong username";
} elseif ($password === "") {
    echo "Wrong password";
} elseif ($username === $valid_username && $password === $valid_password) {
    echo "Hello " . htmlspecialchars($username);
} else {
    if ($username !== $valid_username) {
        echo "Wrong username";
    } else {
        echo "Wrong password";
    }
}
?>