<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Your email address
    $to = "swarayabraham39@gmail.com";
    $subject = "New Contact Form Submission";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
