<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data using $_GET
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $phone = htmlspecialchars($_GET['Mynum']);
    $username = htmlspecialchars($_GET['username']);
    $password = htmlspecialchars($_GET['Mypass']);
    
    // Display the data
    echo "<h1>Form Data Received</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Password:</strong> $password</p>";
}
?>
