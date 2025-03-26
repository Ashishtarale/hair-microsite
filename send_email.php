<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $satisfaction = htmlspecialchars($_POST["satisfaction"]);
    $comments = htmlspecialchars($_POST["comments"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ashishtarale002@gmail.com'; // Replace with your Gmail
        $mail->Password = 'yesb vxpa wied lpaq';   // Replace with App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Details
        $mail->setFrom('ashishtarale002@gmail.com', 'Survey Form'); // Replace with your Gmail
        $mail->addAddress('ashishtarale002@gmail.com'); // Replace with recipient email

        $mail->Subject = 'New Survey Response';
        $mail->Body = "Name: $name\nEmail: $email\nSatisfaction: $satisfaction\nComments: $comments";

        $mail->send();
        echo "Survey submitted successfully!";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}
?>
