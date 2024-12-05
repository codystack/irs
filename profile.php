<?php
$page = "Profile";
include "./components/dash-header.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/sidebar.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topbar.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <?php
                $select_query = "SELECT * FROM users WHERE user_id='".$_SESSION['user_id']."'";
                $result = mysqli_query($conn, $select_query);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    $user_id = $row['user_id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                ?>
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <header class="border-bottom mb-10">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12">
                                <h1 class="ls-tight">Profile</h1>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="profile" class="nav-link active">General</a></li>
                            <li class="nav-item"><a href="security" class="nav-link">Password</a></li>
                        </ul>
                    </header>
                    <div class="row align-items-center mb-10">
                        <div class="col-md-2"><label class="form-label">Full Name</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="<?php echo $first_name; ?> <?php echo $last_name; ?>" class="form-control" disabled></div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-10">
                        <div class="col-md-2"><label class="form-label">Username</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="<?php echo $username; ?>" class="form-control" disabled></div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-10">
                        <div class="col-md-2"><label class="form-label">Email</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="<?php echo $email; ?>" class="form-control" disabled></div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-10">
                        <div class="col-md-2"><label class="form-label">Phone</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="<?php echo $phone; ?>" class="form-control" disabled></div>
                        </div>
                    </div>
                    <hr class="my-6 ">
                    <div class="justify-content-end gap-2 mb-6">
                        <button type="button" class="btn btn-lg btn-dark" data-bs-target="#updateAccountModal" data-bs-toggle="modal">Update Account</button>
                    </div>
                </main>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php 
include "./components/modal.php";
include "./components/footer.php"; 
?>