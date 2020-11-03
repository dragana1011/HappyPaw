<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "majciki123@gmail.com";
    $header = "From: " . $mailFrom;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $header);
    header("Location:contact.php?messagesent");
}
