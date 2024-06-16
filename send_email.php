<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
    $to = "dianaamay7@gmail.com";

    $email_subject = "Message from User Using Contact Form: $subject";

    $email_message = "Name: $fullname\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phonenumber\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $email_subject, $email_message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error found, try again.";
    }
} else {
    echo "Something went wrong. Try again later or contact me from one of my social media pages";
}
?>
