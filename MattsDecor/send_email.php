<?php
// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for admin email
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your email provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'mattdavidslu758@gmail.com'; // Your email address
        $mail->Password = 'lvsb qmpa zbtu hlet'; // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'Matt\'s Decor');
        $mail->addAddress('mattdavidslu758@gmail.com'); // Recipient email (admin)

        // Content for the admin email
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body = "
            <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; color: #333; }
                        .highlight { color: blue; }
                        .message { background-color: #f2f2f2; padding: 10px; border-radius: 5px; }
                    </style>
                </head>
                <body>
                    <p>You have received a new message from the contact form on your website:</p>
                    <p><strong>From:</strong> <span class='highlight'>$name</span></p>
                    <p><strong>Email:</strong> <span class='highlight'>$email</span></p>
                    <p><strong>Message:</strong></p>
                    <p class='message'>$message</p>
                </body>
            </html>";

        $mail->AltBody = "You have received a new message from the contact form on your website:\n\n
                          From: $name\n
                          Email: $email\n
                          Message:\n$message";

        // Send the email to the admin
        $mail->send();

        // Now send a confirmation email to the user
        $mail->clearAddresses(); // Clear the previous recipient (admin)
        $mail->addAddress($email); // Add the user's email address

        // Content for the confirmation email to the user
        $mail->Subject = 'Thank You for Contacting Us';
        $mail->Body = "
            <html>
                <body>
                    <p>Dear <span class='highlight'>$name</span>,</p>
                    <p>Thank you for contacting us. We have received your message and will respond within the next 24 hours.</p>
                    <p>Best regards,<br>Matt's Decor</p>
                </body>
            </html>";

        $mail->AltBody = "Dear $name,\n\n
                          Thank you for contacting us. We have received your message and will respond within the next 24 hours.\n\n
                          Best regards,\nMatt's Decor";

        // Send the confirmation email to the user
        if ($mail->send()) {
            // Redirect to contact.php after successful submission
            header('Location: contact.php');
            exit(); // Don't forget to call exit() after header redirection
        } else {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


