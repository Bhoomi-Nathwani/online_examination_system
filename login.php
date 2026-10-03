<?php
include('config/db.php');
if (isset($_SESSION['user_role'])) { header("Location: " . ($_SESSION['user_role'] == 'admin' ? 'admin/dashboard.php' : 'student/dashboard.php')); exit(); }
if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email); mysqli_stmt_execute($stmt); $result = mysqli_stmt_get_result($stmt);
    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id']=$user['user_id']; $_SESSION['user_name']=$user['full_name']; $_SESSION['user_role']=$user['role'];
            header("Location: " . ($user['role']=='admin' ? 'admin/dashboard.php' : 'student/dashboard.php')); exit();
        } else { $error='Invalid Password!'; }
    } else { $error='No account found with this email!'; }
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Login | ExamPro</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"><link rel="stylesheet" href="assets/css/style.css"></head>
<body class="auth-page">
<div class="auth-shell"><div class="auth-orb auth-orb-a"></div><div class="auth-orb auth-orb-b"></div>
<section class="auth-visual"><div class="auth-brand"><i class="fas fa-graduation-cap"></i> EXAM PORTAL</div><div class="auth-copy"><span class="auth-badge">SMART EXAM SYSTEM</span><h1>Ready to test<br><strong>your knowledge?</strong></h1><p>Login and continue your exam journey with a clean, fast and modern experience.</p><div class="auth-mini-cards"><div><i class="fas fa-clock"></i><span>Timed Exams</span></div><div><i class="fas fa-chart-line"></i><span>Instant Results</span></div></div></div><div class="auth-3d-object"><div class="auth-ring"></div><div class="auth-cap"><i class="fas fa-graduation-cap"></i></div><div class="auth-card-float f1">✓ Correct</div><div class="auth-card-float f2">A+ Score</div></div></section>
<section class="auth-panel"><div class="auth-form-card"><div class="auth-icon"><i class="fas fa-right-to-bracket"></i></div><div class="auth-heading"><h2>Welcome back</h2><p>Sign in to continue to your dashboard</p></div>
<?php if(isset($error)): ?><div class="auth-error"><i class="fas fa-circle-exclamation"></i><?php echo $error; ?></div><?php endif; ?>
<form method="POST"><div class="auth-field"><label>Email Address</label><div class="auth-input"><i class="fas fa-envelope"></i><input type="email" name="email" placeholder="you@example.com" required></div></div><div class="auth-field"><label>Password</label><div class="auth-input"><i class="fas fa-lock"></i><input type="password" name="password" placeholder="Enter your password" required></div></div><button type="submit" name="login_btn" class="auth-submit">Login <i class="fas fa-arrow-right"></i></button></form><div class="auth-divider"><span>OR</span></div><p class="auth-switch">New to Exam Portal? <a href="register.php">Create an account</a></p><a href="index.php" class="auth-back"><i class="fas fa-arrow-left"></i> Back to homepage</a></div></section></div></body></html>