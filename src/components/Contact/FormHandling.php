<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With");
header("Access-Control-Allow-Methods: GET, PUT, POST");

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $mailTo = "mail@hlarsen.no";
    $subject = $_POST['subject'];
    $txt = "You have received an email from " . $mailFrom . ".\n\n" . $message;
    $headers = 'From: DarlingNettside' . "\r\n" .
        'Reply-To: ' . $mailFrom . "\r\n" .
        'X-Mailer: PHP/' . PHP_VERSION;

    // Checking that there are no empty fields
    if (!empty($name) && !empty($mailFrom) && !empty($message)) {
        if (mail($mailTo, $subject, $txt, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
