<?php
// Start session to check if user is already logged in
session_start();
if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == 'admin') {
        header("Location: admin/dashboard.php");
    } else {
        header("Location: student/dashboard.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam Portal | Competitive Exam Prep</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm home-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">ExamPro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homeNav" aria-controls="homeNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="homeNav">
                <div class="ms-auto d-flex align-items-center gap-2 pt-3 pt-lg-0">
                    <a href="login.php" class="btn btn-outline-primary px-4 login-nav-btn"><i class="fas fa-sign-in-alt me-1"></i> Login</a>
                    <a href="register.php" class="btn btn-primary px-4"><i class="fas fa-user-plus me-1"></i> Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-3d">
        <div class="hero-grid"></div><span class="orb one"></span><span class="orb two"></span>
        <div class="container hero-copy">
            <div class="row align-items-center g-5">
              <div class="col-lg-7 text-center text-lg-start">
            <div class="badge rounded-pill bg-white bg-opacity-10 border border-light border-opacity-25 px-3 py-2 mb-3">3D SMART EXAM PLATFORM</div>
            <h1 class="display-3 fw-bold mb-4">Master Your <span style="color:#c4b5fd">Competitive Exams</span></h1>
            <p class="lead mb-5 px-md-5">A comprehensive platform for Logical Reasoning, General Awareness, and Verbal Ability mock tests. Practice with real-time tracking and instant results.</p>
            <div class="d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
                <a href="login.php" class="btn btn-light btn-start text-primary"><i class="fas fa-sign-in-alt me-2"></i>Login Now</a>
                <a href="register.php" class="btn btn-light btn-start text-primary">Get Started as Student</a>
                <a href="admin/register.php" class="btn btn-outline-light btn-start">Admin Access</a>
            </div>
              </div>
              <div class="col-lg-5 d-none d-md-block"><div class="laptop-3d float-3d"><div class="laptop-screen"></div><div class="laptop-base"></div></div></div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container my-5 py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Our Portal?</h2>
            <p class="text-muted">Built for serious aspirants and smart administrators.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 p-4 feature-card feature-3d text-center neo-glass">
                    <div class="display-5 text-primary mb-3">⏱️</div>
                    <h5 class="fw-bold">Real-time Timer</h5>
                    <p class="text-muted">Experience real exam pressure with our precise countdown timer and auto-submit feature.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 feature-card feature-3d text-center neo-glass">
                    <div class="display-5 text-success mb-3">📊</div>
                    <h5 class="fw-bold">Instant Analytics</h5>
                    <p class="text-muted">Get your score immediately after submission with detailed Pass/Fail analytics.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 feature-card feature-3d text-center neo-glass">
                    <div class="display-5 text-danger mb-3">🛡️</div>
                    <h5 class="fw-bold">Anti-Cheat System</h5>
                    <p class="text-muted">Tab-switch detection and right-click protection to ensure fair examination for everyone.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <div class="bg-light py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary">100+</h2>
                    <p class="text-muted">Mock Questions</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary">Dynamic</h2>
                    <p class="text-muted">Topic Management</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary">Secure</h2>
                    <p class="text-muted">Admin Controls</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Login Button -->
    <a href="login.php" class="floating-login" aria-label="Login to ExamPro">
        <i class="fas fa-sign-in-alt"></i><span>Login</span>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <footer class="py-4 text-center border-top">
        <p class="text-muted mb-0">&copy; 2026 ExamPro System | Designed for 3rd Year Project </p>
    </footer>

</body>
</html>