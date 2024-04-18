<?php
include(ROOT_PATH . "/vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include(ROOT_PATH . "/vendor/PHPMailer/PHPMailer/src/Exception.php");
include(ROOT_PATH . "/vendor/PHPMailer/PHPMailer/src/PHPMailer.php");
include(ROOT_PATH . "/vendor/PHPMailer/PHPMailer/src/SMTP.php");


// Create the Transport

$phpmailer = new PHPMailer(true);
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer->Username = "nani219319@gmail.com";
$phpmailer->Password = "szon jevw rduc suyh";
$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$phpmailer->Port = 465;

// Create the Mailer using your created Transport
$phpmailer->setFrom('TinyBlogger@gmail.com', 'Tiny Blogger');

function PasswordResetLink($userEmail, $token)
{
    // Create a message
    global $phpmailer;
    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Recover Your Password</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Hey,<br>
                Please Click on the link below 
                to Recover your password.
            </p>
            <a href="http://localhost:8080/TinyBlogger/welcome.php?password-token=' . $token .'">
                Recover Your Password
            </a>
            <p>
                Thank You :)
            </p>
        </div>
    </body>
    </html>';

    $phpmailer->addAddress($userEmail);
    $phpmailer->Subject = 'Recover Your Password';
    $phpmailer->isHTML(true);
    $phpmailer->Body = $body;

    // Send the message
    $result = $phpmailer->send();

}

function sendVerification($userEmail, $token)
{
    // Create a message
    global $phpmailer;
    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify Your Email</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Hey,<br>
                Thank you for signing up on our website. Please Click on the link below 
                to verify your email.
            </p>
            <a href="http://localhost:8080/TinyBlogger/welcome.php?token=' . $token .'">
                Verify Your Email
            </a>
            <p>
                Thank You :)
            </p>
        </div>
    </body>
    </html>';

    $phpmailer->addAddress($userEmail);
    $phpmailer->Subject = 'Verify Your Email Address';
    $phpmailer->isHTML(true);
    $phpmailer->Body = $body;

    // Send the message
    $result = $phpmailer->send();
}
