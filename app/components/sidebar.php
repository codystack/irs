            <nav class="flex-none navbar navbar-vertical navbar-expand-lg navbar-light bg-transparent show vh-lg-100 px-0 py-2" id="sidebar">
                <div class="container-fluid px-3 px-md-4 px-lg-6">
                    <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand d-inline-block py-lg-1 mb-lg-5" href="dashboard.html">
                        <img src="assets/img/logo.svg" class="logo-dark h-rem-8 h-rem-md-10" alt="...">
                    </a>
                    <div class="navbar-user d-lg-none">
                        <div class="dropdown">
                            <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                <div>
                                    <img src="assets/img/avatar.png" class="avatar avatar-sm rounded-circle">
                                </div>
                                <div class="d-none d-sm-block ms-3"><span class="h6"><?php echo $_SESSION['first_name']; ?></span></div>
                                <div class="d-none d-md-block ms-md-2">
                                    <i class="bi bi-chevron-down text-muted text-xs"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-header">
                                    <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                                    <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></span>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="profile"><i class="bi bi-person me-3"></i>Profile</a>
                                <a class="dropdown-item" href="security"><i class="bi bi-fingerprint me-3"></i>Security</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="logout"><i class="bi bi-person me-3"></i>Log out</a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse overflow-x-hidden" id="sidebarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Dashboard'){echo 'active';}?>" href="dashboard"><i class="bi bi-cast"></i><span>Monitoring</span></a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Log Management'){echo 'active';}?>" href="log-management"><i class="bi bi-folder"></i><span>Log Management</span></a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Case Management'){echo 'active';}?>" href="case-management"><i class="bi bi-list-task"></i><span>Tabletop Exercise</span></a>
                            </li>
                            <!-- <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='End Point'){echo 'active';}?>" href="end-point"><i class="bi bi-cpu"></i><span>Endpoint Security</span></a>
                            </li> -->
                            <!-- <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Playbook'){echo 'active';}?>" href="simulation/cyberattack"><i class="bi bi-journal-code"></i><span>IRS Playbook</span></a>
                            </li> -->
                        </ul>
                        <hr class="navbar-divider my-5 opacity-70">
                        <ul class="navbar-nav">
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill" href="profile"><i class="bi bi-person"></i><span>Profile</span></a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Security'){echo 'active';}?>" href="security"><i class="bi bi-fingerprint"></i><span>Security</span></a>
                            </li>
                        </ul>
                        <div class="mt-auto"></div>
                        <div class="card bg-dark border-0 mt-5 mb-3">
                            <div class="card-body">
                                <div class="vstack gap-4">
                                    <a href="logout" class="btn btn-sm btn-danger w-100">Log out<i class="bi bi-box-arrow-left ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>