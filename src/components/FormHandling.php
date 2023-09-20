<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With");
header("Access-Control-Allow-Methods: GET, PUT, POST");

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $mailTo = "halarsen4@gmail.com";
    $subject = $_POST['subject'];
    $txt = "You have recieved an email from ".$mailFrom." .\n\n".$message;
    $headers = 'From: DarlingNettside' . "\r\n" .
    'Reply-To: ' . $mailFrom . "\r\n" .
    'X-Mailer: PHP/' . PHP_VERSION;
    
    //checking that there are no empty fields
    if (!empty($name) && !empty($mailFrom) && !empty($message)) {
        mail($mailTo, $subject, $txt, $headers);
        // header('Location: ');
        exit;
    } else {
    echo "please fill in all fields";
    } 
    }else {
        // header('Location: /');
        exit;
    }

?>