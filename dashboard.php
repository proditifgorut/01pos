<?php
session_start();

// If the user is not logged in, redirect to the login page.
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = "Dashboard";
include 'partials/header.php';
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 fw-bold">Dashboard</h1>
        <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body p-4">
            <h2 class="h5">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
            <p class="text-muted">You are logged in as <?php echo htmlspecialchars($_SESSION['user_email']); ?>.</p>
            <?php if ($_SESSION['user_role'] === 'admin'): ?>
                <span class="badge bg-primary">Administrator</span>
            <?php endif; ?>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="h5 mb-0">AI App Generator</h3>
        </div>
        <div class="card-body text-center p-5">
            <p class="lead">This is where the AI-powered application generator will be. <br>You'll be able to describe your app idea and see it come to life!</p>
            <button class="btn btn-primary btn-lg" disabled>Coming Soon</button>
        </div>
    </div>

</div>

<?php include 'partials/footer.php'; ?>
