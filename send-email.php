
<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create the email content
$emailContent = "Name: $name\n";
$emailContent .= "Email: $email\n";
$emailContent .= "Subject: $subject\n";
$emailContent .= "Message: $message\n";

// Set the recipient email address
$recipient = 'choi197578@gmail.com';

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSent = mail($recipient, $subject, $emailContent, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'success';
} else {
    echo 'error';
}
?>
