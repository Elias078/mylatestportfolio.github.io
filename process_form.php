<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "eliashamidi56@gmail.com";

 

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message = "Email: $email\n";
    $email_message = "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $email_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
header("Location: resume.html");
?>
