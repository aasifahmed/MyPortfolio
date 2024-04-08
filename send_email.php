<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    $to = "aasifahmed497@gmail.com";
    
    $subject = "Portfolio Form Submission";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $name <$email>";
    
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for your message. We will get back to you shortly.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Oops! Access denied.</p>";
}
?>
