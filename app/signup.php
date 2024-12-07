<?php
    require_once "./auth/account.php";
?>
<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Sign up :: IRS&trade;</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/utility.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f=satoshi@900,700,500,300,401,400&amp;display=swap">
</head>

<body>
    <div class="row g-0 justify-content-center gradient-bottom-right start-gray middle-black end-gray">
        <div class="col-md-6 col-lg-5 col-xl-5 position-fixed start-0 top-0 vh-100 overflow-y-hidden d-none d-lg-flex flex-lg-column">
            <div class="p-12 py-xl-10 px-xl-20">
                <a class="d-block" href="./">
                    <img src="assets/img/logo-colored.svg" class="h-rem-10" alt="...">
                </a>
                <div class="mt-16">
                    <h2 class="ls-tight fw-bolder display-7 text-white mb-5">Prepare, Respond & Recover.</h2>
                    <p class="text-white text-opacity-75 pe-xl-24">Our experts will help you prepare for, respond to and recover from forensic and cyber-security incidents.</p>
                </div>
            </div>
            <div>
                <img src="assets/img/pattern.svg" class="img-fluid rounded-top-start-4" alt="..." style="height: 30rem; object-fit: cover;">
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7 offset-lg-5 min-vh-100 overflow-y-auto d-flex flex-column justify-content-center position-relative bg-body rounded-top-start-lg-4 border-start-lg shadow-soft-5">
            <div class="w-md-50 mx-auto px-10 px-md-0 py-10">
                <div class="mb-10">
                    <a class="d-inline-block d-lg-none mb-10" href="dashboard.html">
                        <img src="assets/img/logos/logo-dark.svg" class="h-rem-10" alt="...">
                    </a>
                    <h1 class="ls-tight fw-bolder h3">Get started. It&#39;s free</h1>
                    <div class="mt-3 text-sm text-muted">
                        <span>Already have an account?</span> 
                        <a href="login" class="fw-semibold">Sign in</a>
                    </div>
                </div>
                <?php
                    if (isset($_SESSION['error_message'])) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-message text-center">
                                <span class="fe fe-alert-triangle"></span> <?php echo $_SESSION['error_message'];?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['error_message']);
                    }
                ?>
                <?php
                    if (isset($_SESSION['success_message'])) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <div class="alert-message text-center">
                                <span class="fe fe-check-circle"></span> <?php echo $_SESSION['success_message']; ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="row g-5">
                        <div class="col-sm-12">
                            <label class="form-label">Username</label> 
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">First name</label> 
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Last name</label> 
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Email</label> 
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Phone</label> 
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Password</label> 
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-sm-12">
                            <button name="user_registration" class="btn btn-dark w-100">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>