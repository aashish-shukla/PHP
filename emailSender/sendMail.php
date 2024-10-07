<?php
$to = "gaurav94174@gmail.com";
$subject = "Test Mail";
$message = "Hello! This is a test email sent from localhost using PHP.";
$headers = "From: shuklaaashish90@gmail.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>