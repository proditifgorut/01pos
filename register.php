<?php
require_once 'db/config.php';
require_once 'mail/MailService.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$errors = [];
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }
    if (empty($password) || strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters long.';
    }

    if (empty($errors)) {
        try {
            $pdo = db();
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $errors[] = 'An account with this email already exists.';
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, $hashed_password]);
                
                // Send welcome email
                $subject = "Welcome to AI Web App Generator!";
                $htmlBody = "<h1>Welcome, {$name}!</h1><p>Thank you for registering. You can now log in and start creating your web application.</p>";
                $textBody = "Welcome, {$name}! Thank you for registering. You can now log in and start creating your web application.";
                MailService::sendMail($email, $subject, $htmlBody, $textBody);

                $success = 'Registration successful! You can now <a href="login.php">log in</a>.';
            }
        } catch (PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}

$pageTitle = "Register";
include 'partials/header.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="h3 fw-bold text-center mb-4">Create Your Account</h1>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error): ?>
                                <p class="mb-0"><?php echo htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($success): ?>
                        <div class="alert alert-success">
                            <p class="mb-0"><?php echo $success; ?></p>
                        </div>
                    <?php else: ?>
                        <form action="register.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="form-text">Password must be at least 8 characters long.</div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
