<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize input
    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    $name = clean_input($_POST["name"]);
    $email = clean_input($_POST["email"]);
    $phone = clean_input($_POST["phone"]);
    $location = clean_input($_POST["location"]);
    $gender = clean_input($_POST["gender"]);
    $age = clean_input($_POST["age"]);
    $hair_area = clean_input($_POST["hair_area"]);
    $hair_type = clean_input($_POST["hair_type"]);
    $hair_change = clean_input($_POST["hair_change"]);
    $hair_issues = isset($_POST["hair_issues"]) ? implode(", ", array_map("clean_input", $_POST["hair_issues"])) : "None";
    $wash_frequency = clean_input($_POST["wash_frequency"]);
    $family_issue = clean_input($_POST["family_issue"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ashishtarale002@gmail.com'; // Replace with your email
        $mail->Password = 'yesb vxpa wied lpaq';   // Use App Password, not actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Content
        $mail->setFrom('ashishtarale002@gmail.com', 'Hair Test Survey');
        $mail->addAddress('ashishtarale002@gmail.com'); 
        $mail->Subject = 'New Hair Test Submission';
        
        // HTML Table Format
        $mail->isHTML(true);
        $mail->Body = "
            <html>
            <head>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid #ddd;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #007bff;
                        color: white;
                    }
                </style>
            </head>
            <body>
                <h2>New Hair Test Submission</h2>
                <table>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td><strong>Name</strong></td><td>$name</td></tr>
                    <tr><td><strong>Email</strong></td><td>$email</td></tr>
                    <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
                    <tr><td><strong>Location</strong></td><td>$location</td></tr>
                    <tr><td><strong>Gender</strong></td><td>$gender</td></tr>
                    <tr><td><strong>Age</strong></td><td>$age</td></tr>
                    <tr><td><strong>Hair Loss Area</strong></td><td>$hair_area</td></tr>
                    <tr><td><strong>Noticing Changes From</strong></td><td>$hair_change</td></tr>
                    <tr><td><strong>Hair Type</strong></td><td>$hair_type</td></tr>
                    <tr><td><strong>Hair Issues</strong></td><td>$hair_issues</td></tr>
                    <tr><td><strong>Wash Frequency</strong></td><td>$wash_frequency</td></tr>
                    <tr><td><strong>Family Issue</strong></td><td>$family_issue</td></tr>
                </table>
            </body>
            </html>
        ";

        if ($mail->send()) {
            // Redirect to recommendation page
            header("Location: recommendation.php?name=$name&gender=$gender&hair_type=$hair_type&hair_issues=" . urlencode($hair_issues));
            exit();
        } else {
            echo "Error sending email.";
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>

