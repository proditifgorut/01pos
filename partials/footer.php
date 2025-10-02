</main>

<footer class="footer-main bg-light py-5 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="fw-bold">AI Web App Generator</h5>
                <p class="text-muted">Create, customize, and deploy full-stack web applications using the power of AI.</p>
            </div>
            <div class="col-md-3 col-6">
                <h6 class="text-uppercase fw-bold">Links</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php#features" class="text-muted text-decoration-none">Features</a></li>
                    <li><a href="privacy.php" class="text-muted text-decoration-none">Privacy Policy</a></li>
                    <li><a href="index.php#contact" class="text-muted text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h6 class="text-uppercase fw-bold">Account</h6>
                <ul class="list-unstyled">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="dashboard.php" class="text-muted text-decoration-none">Dashboard</a></li>
                        <li><a href="logout.php" class="text-muted text-decoration-none">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="text-muted text-decoration-none">Login</a></li>
                        <li><a href="register.php" class="text-muted text-decoration-none">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center text-muted">
            <p>&copy; <?php echo date("Y"); ?> AI Web App Generator. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
