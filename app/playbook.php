<?php
$page = "Playbook";
include "./components/dash-header.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/sidebar.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topbar.php"; ?>

            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="table-responsive mb-10 mt-5">
                                            <iframe src="https://tools.databarracks.com/dr-tabletop-simulation/cyberattack.html" width="800" height="600" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="responsive-iframe">
                                            <iframe src="https://tools.databarracks.com/dr-tabletop-simulation/cyberattack.html" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    
<?php 
include "./components/modal.php";
include "./components/footer.php";
?>