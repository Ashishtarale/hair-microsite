<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ashishtarale002@gmail.com"; // Replace with your Gmail address
    $subject = "New Survey Response";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $satisfaction = htmlspecialchars($_POST["satisfaction"]);
    $comments = htmlspecialchars($_POST["comments"]);

    $message = "Name: $name\nEmail: $email\nSatisfaction: $satisfaction\nComments: $comments";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Survey submitted successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
