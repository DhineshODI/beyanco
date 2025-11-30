<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name    = isset($_POST["name"])    ? trim($_POST["name"])    : '';
    $email   = isset($_POST["email"])    ? trim($_POST["email"])    : '';
    $company_size   = isset($_POST["company_size"])   ? trim($_POST["company_size"])   : '';
    $message = isset($_POST["message"]) ? trim($_POST["message"]) : '';


    try {
        $mailer = new PHPMailer(true);
        $mailer->isSMTP();
        $mailer->Host       = 'smtp.gmail.com';
        $mailer->SMTPAuth   = true;
        $mailer->Username   = 'santhoshk08santhosh@gmail.com';
        $mailer->Password   = 'epan ajis kfte jytd';
        $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mailer->Port       = 587;

        $mailer->setFrom('santhoshk08santhosh@gmail.com', 'Testing mail');
        $mailer->addAddress('dhineshkodi2024@gmail.com');
        $mailer->addCC('santhoshk08santhosh@gmail.com');


        $mailer->isHTML(true);
        $mailer->Subject = 'New Contact Form Submission - Testing mail';
        $mailer->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Company Size:</strong> $company_size</p>
            <p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mailer->send();
        header("Location: thankyou.html");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mailer->ErrorInfo}";
    }
}
