<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Sanitize and prepare the email content
    $subject = "Contact Form Submission";
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Message: " . $message;

    // Replace 'your-email@example.com' with your actual email address
    $to = "wlieng10@googlemail.com";

    // Send the email
    mail($to, $subject, $email_content);

    // Redirect back to the contact form page after sending the email
    header("Location: contact_form.html");
    exit();
}
?>