<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';
require 'vendor/autoload.php'; // Load dotenv

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
        $mail->Username = $_ENV['ashishtarale002@gmail.com']; // Securely load Gmail
        $mail->Password = $_ENV['yesb vxpa wied lpaq']; // Securely load App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Details
        $mail->setFrom($_ENV['ashishtarale002@gmail.com'], 'Survey Form');
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
