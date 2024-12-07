        <div class="d-none d-lg-flex py-3">
            <div class="hstack flex-fill justify-content-end flex-nowrap gap-6 ms-auto px-6 px-xxl-8">
                <div class="dropdown">
                    <a class="avatar avatar-sm text-bg-dark rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/img/avatar.png">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="dropdown-header">
                            <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                            <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></span>
                        </div>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="profile"><i class="bi bi-person me-3"></i>Profile</a>
                        <a class="dropdown-item" href="security"><i class="bi bi-fingerprint me-3"></i>Security </a>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left me-3"></i>Log out</a>
                    </div>
                </div>
            </div>
        </div>