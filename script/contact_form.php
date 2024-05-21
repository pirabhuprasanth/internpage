<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Email address to send the form data
    $to = "support@ps8network.com"; // Replace with your email address

    // Subject of the email
    $subject = "New Query regarding Careers@ps8network";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message\n";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
