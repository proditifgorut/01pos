<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AI Web App Generator</title>
    <meta name="description" content="AI Web App Generator: Effortlessly create full-stack web apps with AI-driven design and modern tech stacks.">
    <meta name="keywords" content="ai web app generator, full-stack generator, react generator, node.js generator, database schema builder, crud generator, ai coding assistant, custom web application, low-code development, source code ownership, instant preview, automatic deployment">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="AI Web App Generator">
    <meta property="og:description" content="AI Web App Generator: Effortlessly create full-stack web apps with AI-driven design and modern tech stacks.">
    <meta property="og:image" content="https://project-screens.s3.amazonaws.com/screenshots/34578/app-hero-20251002-012850.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="AI Web App Generator">
    <meta property="twitter:description" content="AI Web App Generator: Effortlessly create full-stack web apps with AI-driven design and modern tech stacks.">
    <meta property="twitter:image" content="https://project-screens.s3.amazonaws.com/screenshots/34578/app-hero-20251002-012850.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Georgia:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">GenApp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-2" href="#">Get Started</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h1 class="display-3 mb-3">Build Your Web App in Minutes, Not Months</h1>
                        <p class="lead mb-4">Describe your vision. Our AI generates the full-stack code, from frontend to database. You own it all.</p>
                        <a href="#" class="btn btn-primary btn-lg">Start Building for Free</a>
                        <a href="#features" class="btn btn-secondary btn-lg">Explore Features</a>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10">
                         <img src="https://picsum.photos/seed/hero/1200/800" class="img-fluid rounded-3 shadow-lg" alt="Abstract visualization of an AI generating a web application interface.">
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="h1">The Future of Application Development</h2>
                    <p class="lead text-muted">Go from idea to deployment at lightspeed.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <img src="https://picsum.photos/seed/feature1/600/400" class="img-fluid rounded mb-3" alt="A developer selecting a technology stack from a list of logos.">
                            <h3>AI-Powered Generation</h3>
                            <p>Use plain text, voice commands, or even screenshots. Our AI understands your requirements and generates a complete application, including UI, logic, and database schema.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                             <img src="https://picsum.photos/seed/feature2/600/400" class="img-fluid rounded mb-3" alt="A visual database schema builder with tables and relationships.">
                            <h3>Visual Schema Builder</h3>
                            <p>Design your data model with an intuitive drag-and-drop interface. Create tables, define fields, and establish relationships without writing a single line of SQL.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <img src="https://picsum.photos/seed/feature3/600/400" class="img-fluid rounded mb-3" alt="Source code editor showing generated React and Node.js code.">
                            <h3>Full Source Code Ownership</h3>
                            <p>Download the complete source code for your application. No vendor lock-in. Push it to your GitHub, customize it, and host it wherever you want. You have total control.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section contact-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="h1">Have Questions?</h2>
                            <p class="lead text-muted">Get in touch with our team to learn more about our platform or to discuss enterprise needs.</p>
                        </div>
                        <form id="contactForm" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> GenApp. All rights reserved.</p>
            <p><a href="/privacy.php">Privacy Policy</a></p>
        </div>
    </footer>

    <div id="toast-container" class="toast-container"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>