<?php
// Contact Information
$contact_info = [
    'email' => 'geofrykeli@gmail.com',
    'phone' => '+254 713 324 225',
    'location' => 'Kenya',
];

// Receiver email
$to = $contact_info['email'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Email body
$body = "You have received a new message from your website contact form.\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: " . ($_POST['phone'] ?? 'N/A') . "\n";
$body .= "Message:\n$message\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent. Thank you!";
} else {
    echo "Oops! Something went wrong, and we couldn't send your message.";
}
?>
