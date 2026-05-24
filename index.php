<?php
$error_flag = false;

// Functional PHP POST request processing handler (receive and process the data received from user.)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Credential Logic Check Matrix (check whether the username or password insert are right or wrong.)
    if ($username === 'student123' && $password === 'password123') {
        header("Location: dashboard.php");
        exit();
    } else {
        $error_flag = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Academic Hub - Gateway</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%231e3a8a'><path d='M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 0 .906l7.5 3.5a.5.5 0 0 0 .422 0l7.5-3.5a.5.5 0 0 0 0-.906z'/><path d='M4.17 9.263l-2.254-.54A1.5 1.5 0 0 0 0 10.17V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1.83a1.5 1.5 0 0 0-1.916-1.446l-2.254.54a10.4 10.4 0 0 1-7.66 0z'/></svg>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            transition: background-color 0.3s ease;
        }
        .card-login {
            width: 100%;
            max-width: 750px;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(4px);
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }
        [data-bs-theme="dark"] .card-login {
            background: rgba(33, 37, 41, 0.90);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
        }
        .brand-side {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        .btn-blue-theme {
            background-color: #1e3a8a;
            color: white;
            transition: all 0.2s ease;
        }
        .btn-blue-theme:hover {
            background-color: #2563eb;
            color: white;
            transform: translateY(-1px);
        }
        .theme-toggle-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1050;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            color: #212529;
            transition: all 0.3s ease;
        }
        [data-bs-theme="dark"] .theme-toggle-btn {
            background-color: rgba(33, 37, 41, 0.9);
            color: #fff;
        }
        .toggle-visibility-btn {
            cursor: pointer;
            border-left: none;
        }
        .toggle-visibility-btn:hover {
            background-color: #e9ecef;
            color: #1e3a8a !important;
        }
        [data-bs-theme="dark"] .toggle-visibility-btn:hover {
            background-color: #2b3035;
            color: #3b82f6 !important;
        }
    </style>
</head>
<body id="varta-bg">

    <button class="theme-toggle-btn" id="darkModeToggle" title="Toggle Interface Theme">
        <i id="darkModeIcon" class="bi bi-moon-stars-fill fs-5"></i>
    </button>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg mx-3 card-login">
            <div class="row g-0">
                
                <div class="col-md-5 brand-side text-center">
                    <div class="mb-3">
                        <i class="bi bi-mortarboard-fill" style="font-size: 4rem; color: #ffffff;"></i>
                    </div>
                    <h4 class="fw-bold m-0 tracking-wide">MY ACADEMIC HUB</h4>
                </div>
                
                <div class="col-md-7 p-4 p-md-5">
                    <h4 class="fw-bold mb-4">Account Login</h4>
                    
                    <?php if ($error_flag): ?>
                        <div class="alert alert-danger py-2 small text-center mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> Invalid username/password
                        </div>
                    <?php endif; ?>

                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label small fw-bold text-secondary">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-body-tertiary border-end-0 text-muted"><i class="bi bi-person"></i></span>
                                <input type="password" class="form-control bg-body-tertiary border-start-0 border-end-0" name="username" id="username" placeholder="e.g., student123" required>
                                <span class="input-group-text bg-body-tertiary text-muted toggle-visibility-btn" id="toggleUsername">
                                    <i class="bi bi-eye-fill" id="usernameEyeIcon"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label small fw-bold text-secondary">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-body-tertiary border-end-0 text-muted"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control bg-body-tertiary border-start-0 border-end-0" name="password" id="password" placeholder="••••••••" required>
                                <span class="input-group-text bg-body-tertiary text-muted toggle-visibility-btn" id="togglePassword">
                                    <i class="bi bi-eye-fill" id="passwordEyeIcon"></i>
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-blue-theme fw-bold px-4 py-2 shadow-sm">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.topology.min.js"></script>
    <script>
    let vantaEffect = VANTA.TOPOLOGY({
        el: "#varta-bg",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: "#2563eb",
        backgroundColor: "#0f172a"
    });
    </script>

    <script>
        const toggleUsername = document.getElementById('toggleUsername');
        const usernameInput = document.getElementById('username');
        const usernameEyeIcon = document.getElementById('usernameEyeIcon');

        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const passwordEyeIcon = document.getElementById('passwordEyeIcon');

        toggleUsername.addEventListener('click', () => {
            const isMasked = usernameInput.type === 'password';
            usernameInput.type = isMasked ? 'text' : 'password'; 
            usernameEyeIcon.className = isMasked ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
        });

        togglePassword.addEventListener('click', () => {
            const isMasked = passwordInput.type === 'password';
            passwordInput.type = isMasked ? 'text' : 'password';
            passwordEyeIcon.className = isMasked ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
        });

        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const htmlElement = document.documentElement;

        const currentTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-bs-theme', currentTheme);
        updateIcon(currentTheme);
        updateVantaBackground(currentTheme);

        darkModeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
            updateVantaBackground(newTheme);
        });

        function updateIcon(theme) {
            if (theme === 'dark') {
                darkModeIcon.className = 'bi bi-sun-fill';
            } else {
                darkModeIcon.className = 'bi bi-moon-stars-fill';
            }
        }

        function updateVantaBackground(theme) {
            if(vantaEffect) {
                vantaEffect.destroy();
            }
            if (theme === 'dark') {
                vantaEffect = VANTA.TOPOLOGY({
                    el: "#varta-bg",
                    mouseControls: true,
                    touchControls: true,
                    minHeight: 200.00,
                    minWidth: 200.00,
                    scale: 1.00,
                    scaleMobile: 1.00,
                    color: "#3b82f6",
                    backgroundColor: "#030712"
                });
            } else {
                vantaEffect = VANTA.TOPOLOGY({
                    el: "#varta-bg",
                    mouseControls: true,
                    touchControls: true,
                    minHeight: 200.00,
                    minWidth: 200.00,
                    scale: 1.00,
                    scaleMobile: 1.00,
                    color: "#2563eb",
                    backgroundColor: "#0f172a"
                });
            }
        }
    </script>
</body>
</html>