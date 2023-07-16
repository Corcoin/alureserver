<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    // Compose the email message
    $to = 'bwesson82@gmail.com';
    $subject = 'Share Request';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Amount of Shares: $amount\n";

    // Send the email
    mail($to, $subject, $message);

    // Redirect back to the form
    header('Location: index.html');
    exit();
}
?>
