<?php
$pageTitle = "Home";
include 'partials/header.php';
?>

        <section class="hero text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h1 class="display-3 mb-3">Build Your Web App in Minutes, Not Months</h1>
                        <p class="lead mb-4">Describe your vision. Our AI generates the full-stack code, from frontend to database. You own it all.</p>
                        <a href="register.php" class="btn btn-primary btn-lg">Start Building for Free</a>
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

<?php include 'partials/footer.php'; ?>