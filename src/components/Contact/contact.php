<?php

/**
 * Form submit handling
 * @link      https://darlinglinjeforening.org
 */

header("Access-Control-Allow-Origin: https://www.darlinglinjeforening.org");
header("Access-Control-Allow-Headers: Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With");
header("Access-Control-Allow-Methods: GET, PUT, POST");

function clean($var, $ent = false){
    $var = strip_tags($var);
    $var = stripslashes($var);

    if ($ent){
        $var = htmlentities($var,ENT_QUOTES);
    }

    return $var;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo '<pre>';
    // Get values from POST
    $recaptcha = $_POST['g-recaptcha-response'];
    $name = clean($_POST['name']);
    $mailFrom = clean($_POST['email']);
    $message = clean($_POST['message'], true);
    $mailTo = "kontakt@darlinglinjeforening.org";
    $subject = clean($_POST['subject'], true);
    $txt = "You have received an email from " . $mailFrom . ".\n\n" . $message;
    $headers = 'From: Darling - Nettside kontakt form' . "\r\n" .
        'Reply-To: ' . $mailFrom . "\r\n" .
        'X-Mailer: PHP/' . PHP_VERSION;

    // Captcha secret key
    $sk = '6LdXwkUoAAAAAPgRekSL94DCUp7arN69Db_YPIcL';

    // Check captcha reponse against site
    $res = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $sk . '&response=' . $recaptcha;
    $res = file_get_contents($res);
    $res = json_decode($res);

    unset($sk);

    // Set vars
    $valid = true;

    // Validate captcha
    if ($res->success === false) {
        echo "Error: Captcha is not valid!";
        $valid = false;
    }

    // Validate email
    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Email is not valid!";
        $valid = false;
    }

    // Validate name
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        echo "Error: Name is not valid!";
        $valid = false;
    }

    // Validate message
    if (empty($message) || is_null($message)) {
        echo "Error: Message is not valid!";
        $valid = false;
    }

    // Validate subject
    if (empty($subject) || is_null($subject)) {
        echo "Error: Subject is not valid!";
        $valid = false;
    }

    if ($valid) {
        if (mail($mailTo, $subject, $txt, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo ("Failed to send email.");
    }
} else {
    echo "Invalid method.";
}
