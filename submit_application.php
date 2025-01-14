<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Retrieve the admin email and applicant email
$adminEmail = $_POST['adminmail'];
$applicantEmail = $_POST['email'];

// Validate required fields
$requiredFields = ['selectRegion', 'job_role', 'firstName', 'lastName', 'dob', 'gender', 'nationality', 'email', 'phone', 'address', 'highest_degree', 'university', 'graduation_year', 'previous_company', 'job_title', 'work_experience'];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        header('Location: apply.php?status=failed&error=missing_fields#alert');
        exit();
    }
}

// Validate email format
if (!filter_var($applicantEmail, FILTER_VALIDATE_EMAIL)) {
    header('Location: apply.php?status=failed&error=invalid_email#alert');
    exit();
}

// Handle file upload
if (isset($_FILES['cv_upload']) && $_FILES['cv_upload']['error'] === UPLOAD_ERR_OK) {
    $cv = $_FILES['cv_upload'];
    $uploadDir = 'uploads/cvs/';
    $allowedExtensions = ['pdf', 'doc', 'docx'];

    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Validate file extension
    $fileExt = strtolower(pathinfo($cv['name'], PATHINFO_EXTENSION));
    if (!in_array($fileExt, $allowedExtensions)) {
        header('Location: apply.php?status=failed&error=invalid_file_type#alert');
        exit();
    }

    // Move uploaded file to target directory
    $fileName = uniqid('cv_') . '.' . $fileExt;
    $filePath = $uploadDir . $fileName;
    if (!move_uploaded_file($cv['tmp_name'], $filePath)) {
        header('Location: apply.php?status=failed&error=file_upload#alert');
        exit();
    }
} else {
    header('Location: apply.php?status=failed&error=cv_required#alert');
    exit();
}

// Prepare email data
$subject = "New Job Application - " . $_POST['job_role'];
$message = "You have received a new job application. Here are the details:\n\n";
$message .= "Region: " . $_POST['selectRegion'] . "\n";
$message .= "Job Role: " . $_POST['job_role'] . "\n";
$message .= "First Name: " . $_POST['firstName'] . "\n";
$message .= "Last Name: " . $_POST['lastName'] . "\n";
$message .= "Date of Birth: " . $_POST['dob'] . "\n";
$message .= "Gender: " . $_POST['gender'] . "\n";
$message .= "Nationality: " . $_POST['nationality'] . "\n";
$message .= "Email: " . $_POST['email'] . "\n";
$message .= "Phone: " . $_POST['phone'] . "\n";
$message .= "Address: " . $_POST['address'] . "\n";
$message .= "Highest Degree: " . $_POST['highest_degree'] . "\n";
$message .= "University: " . $_POST['university'] . "\n";
$message .= "Graduation Year: " . $_POST['graduation_year'] . "\n";
$message .= "Previous Company: " . $_POST['previous_company'] . "\n";
$message .= "Job Title: " . $_POST['job_title'] . "\n";
$message .= "Work Experience: " . $_POST['work_experience'] . "\n";
$message .= "CV File: " . $filePath . "\n";

// Include optional fields
if (!empty($_POST['cover_letter'])) {
    $message .= "Cover Letter: " . $_POST['cover_letter'] . "\n";
}

// Send email to admin
$headers = "From: " . $applicantEmail . "\r\n";
$headers .= "Reply-To: " . $applicantEmail . "\r\n";
$mailSent = mail($adminEmail, $subject, $message, $headers);

// Redirect based on email status
if ($mailSent) {
    header('Location: apply.php?status=success#alert');
} else {
    header('Location: apply.php?status=failed#alert');
}
exit();