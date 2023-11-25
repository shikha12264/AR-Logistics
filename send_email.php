<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up email
    $to = "arlogistics@gmail.com"; // Replace with the actual recipient email
    $headers = "From: $email" . "\r\n";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    // Send email
    mail($to, $subject, $messageBody, $headers);
}
?>
