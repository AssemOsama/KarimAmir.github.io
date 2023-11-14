<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "assemosama24@gmail.com";
    $headers = "From: $name <$email>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "Error sending email";
    }
} else {
    echo "Invalid request method";
}
?>
