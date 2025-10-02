<?php
require_once 'db/config.php';
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }
    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    if (empty($errors)) {
        try {
            $pdo = db();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role'];
                header("Location: dashboard.php");
                exit();
            } else {
                $errors[] = 'Invalid email or password.';
            }
        } catch (PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}

$pageTitle = "Login";
include 'partials/header.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="h3 fw-bold text-center mb-4">Log In to Your Account</h1>

                    <?php if (!empty($errors)):
                    ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error): ?>
                                <p class="mb-0"><?php echo htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <form action="login.php" method="POST" novalidate>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'admin'; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required value="<?php echo isset($_POST['password']) ? '' : 'admin123'; ?>">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="mb-0">Don't have an account? <a href="register.php">Register here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
