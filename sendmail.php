<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'rickst85@gmail.com';
    $subject = 'New Enquiry from Website';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your enquiry. We will get back to you soon.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
