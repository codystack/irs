<?php
    require_once "./auth/account.php";
?>

<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Login :: IRS&trade;</title>
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
            <div class="row px-10 px-md-0 py-10">
                <div class="mx-auto col-12 col-md-12 col-lg-7">
                    <div class="mb-10">
                        <a class="d-inline-block d-lg-none mb-10" href="./">
                            <img src="assets/img/logo.svg" class="h-rem-10" alt="...">
                        </a>
                        <h1 class="ls-tight fw-bolder h3">Sign in to your account</h1>
                        <div class="mt-3 text-sm text-muted">
                            <span>Don't have an account?</span>
                            <a href="signup" class="fw-semibold">Sign up</a>
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
                        <div class="mb-5">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-7">
                            <div class="d-flex justify-content-between gap-2 mb-2 align-items-center">
                                <label class="form-label mb-0" for="password">Password</label> 
                                <a href="#" class="text-sm text-muted text-primary-hover text-underline">Forgot password?</a>
                            </div>
                            <input type="password" class="form-control" name="password" autocomplete="current-password">
                        </div>
                        <div>
                            <button name="user_login" class="btn btn-dark w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>