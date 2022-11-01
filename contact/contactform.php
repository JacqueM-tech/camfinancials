<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
 
    $mailTo = "info@camfinancials.biz";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $phone, $txt, $headers);
    header("Location: contact/index.html?successfully_sent");

}

