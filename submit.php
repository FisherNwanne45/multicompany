<?php
// Retrieve form data from POST
$adminmail = isset($_POST['adminmail']) ? $_POST['adminmail'] : '';
$selectRegion = isset($_POST['selectRegion']) ? $_POST['selectRegion'] : '';
$enquiryType = isset($_POST['enquiryType']) ? $_POST['enquiryType'] : '';
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$company = isset($_POST['company']) ? $_POST['company'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate the form fields
if (empty($firstName) || empty($lastName) || empty($company) || empty($email) || empty($phone) || empty($message)) {
    // Form validation failed, redirect to the same page with error
    header('Location: contact.php?status=failed');
    exit;
}

// Create the email content
$to = $adminmail;
$subject = "New Contact Form Submission from " . $firstName . " " . $lastName;
$body = "Region: $selectRegion\n
        Enquiry Type: $enquiryType\n
        Name: $firstName $lastName\n
        Company: $company\n
        Email: $email\n
        Phone: $phone\n
        Message:\n$message";

// Set the headers for the email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
$mail_sent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    header('Location: contact.php?status=success');
} else {
    header('Location: contact.php?status=failed');
}
exit;