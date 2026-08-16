<?php
// Contact form handler for contact.html — sends submissions to info@ezziph.com
// using PHP's built-in mail(), which works out of the box on cPanel shared
// hosting with no extra setup or API keys.

header('Content-Type: application/json');

$to = 'info@ezziph.com';

function ezzi_clean($value) {
	$value = trim($value ?? '');
	return str_replace(["\r", "\n"], '', $value);
}

$name    = ezzi_clean($_POST['name'] ?? '');
$email   = ezzi_clean($_POST['email'] ?? '');
$subject = ezzi_clean($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	http_response_code(422);
	echo json_encode(['ok' => false, 'error' => 'Please fill in your name, a valid email, and a message.']);
	exit;
}

$mailSubject = $subject !== '' ? $subject : 'New enquiry from ezziph.com';
$body = "Name: $name\nEmail: $email\nSubject: $mailSubject\n\nMessage:\n$message\n";

// From stays on our own domain (required by most mail servers' SPF/DKIM
// checks — using the visitor's address here gets flagged as spoofing and
// silently dropped); Reply-To carries their address so a reply goes to them.
$headers  = "From: EZZI Website <no-reply@ezziph.com>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, "[EZZI Website] $mailSubject", $body, $headers);

if ($sent) {
	echo json_encode(['ok' => true]);
} else {
	http_response_code(500);
	echo json_encode(['ok' => false, 'error' => 'Something went wrong sending your message. Please try again or email us directly.']);
}
