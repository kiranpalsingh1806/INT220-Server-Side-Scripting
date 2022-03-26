<?php
$to_email = "xyz123@gmail.com";
$subject = "Comfirmatory Email via PHP";
$body = "Hi, this is test email send by PHP in 2022";
$headers = "From : abc123@gmail.com";

if (mail($to_mail, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}
