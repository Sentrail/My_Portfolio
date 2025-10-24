<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Simple email send (configure mail() or use PHPMailer)
    $to = 'your@email.com';
    $subject = 'New Portfolio Contact';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo '<div class="success">Message sent! Thanks.</div>';
    } else {
        echo '<div class="error">Oops, try again.</div>';
    }
    
    // Or save to file: file_put_contents('contacts.txt', "$name|$email|$message\n", FILE_APPEND);
    
    header('Location: contact.php?success=1'); // Redirect
    exit;
}
?>