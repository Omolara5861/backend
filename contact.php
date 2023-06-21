<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formName = $_POST['formIdentifier'];

    // Handle Form 1
    if ($formName === 'contact') {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_no = $_POST['contact_no'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // Process form data for Form 1

        // Send email to admin for Form 1
        $to = 'omolara@digitaldog.company';
        $subject = 'Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nPhone Number: $phone_no\nSubject: $subject\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo 'Form submitted successfully!';
        } else {
            echo 'An error occurred while submitting Form 1.';
        }
    }

    // Handle Form 2
    elseif ($formName === 'signup') {
        $message = $_POST['message'];
        // Process form data for Form 2

        // Send email to admin for Form 2
        $to = 'omolara@digitaldog.company';
        $subject = 'Signup Form Submission';
        $body = "Message: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo 'Form  submitted successfully!';
        } else {
            echo 'An error occurred while submitting Form 2.';
        }
    }
}
?>
