<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Send the form data via email
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Sign-up";
    $message = "Full Name: $fullname\nEmail Address: $email\nPassword: $password";
    
    // Use the mail() function to send the email
    mail($to, $subject, $message);
    
    // Redirect the user to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
} else {
    // If the form wasn't submitted via POST method, redirect back to the form page
    header("Location: index.php");
    exit();
}
?>