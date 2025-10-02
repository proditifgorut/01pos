<?php
header('Content-Type: application/json');

require_once __DIR__ . '/db/config.php';
require_once __DIR__ . '/mail/MailService.php';

$response = ['success' => false, 'error' => 'An unknown error occurred.'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['error'] = 'Invalid request method.';
    echo json_encode($response);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    $response['error'] = 'Please fill out all fields.';
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['error'] = 'Invalid email format.';
    echo json_encode($response);
    exit;
}

try {
    $pdo = db();

    // Idempotent table creation
    $pdo->exec("CREATE TABLE IF NOT EXISTS contact_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );");

    // Insert data
    $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);

    // Send email notification
    $mailTo = getenv('MAIL_TO') ?: 'support@flatlogic.com'; // Fallback recipient
    $subject = 'New Contact Form Submission from AI Web App Generator';
    $mailResult = MailService::sendContactMessage($name, $email, $message, $mailTo, $subject);

    if (!empty($mailResult['success'])) {
        $response['success'] = true;
        unset($response['error']);
    } else {
        // Still a success for the user, but log the mail error
        $response['success'] = true;
        $response['warning'] = 'Could not send notification email.';
        error_log('MailService Error: ' . ($mailResult['error'] ?? 'Unknown mail error'));
    }

} catch (PDOException $e) {
    error_log("Database Error: " . $e->getMessage());
    $response['error'] = 'Database error. Please try again later.';
} catch (Exception $e) {
    error_log("General Error: " . $e->getMessage());
    $response['error'] = 'A server error occurred. Please try again later.';
}

echo json_encode($response);
