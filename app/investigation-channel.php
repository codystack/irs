<?php
$page = "Dashboard";
include "./components/dash-header.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/sidebar.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topbar.php"; ?>

            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <header class="border-bottom mb-10">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12">
                                <h1 class="ls-tight">Investigation Channel</h1>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="dashboard" class="nav-link">Main Channel</a></li>
                            <li class="nav-item"><a href="investigation-channel" class="nav-link active">Investigation Channel</a></li>
                            <li class="nav-item"><a href="closed-alerts" class="nav-link">Closed Alerts</a></li>
                        </ul>
                    </header>

                    
                    <div class="card mb-7">
                        <div class="card-body pb-0">
                            <div class="table-responsive mb-10 mt-5">
                                <table id="investigationChannel" class="table table-hover table-striped table-sm table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rule Name</th>
                                            <th scope="col" class="d-xl-table-cell">Severity</th>
                                            <th scope="col" class="d-xl-table-cell">Date</th>
                                            <th scope="col">Event ID</th>
                                            <th scope="col">Type</th>
                                            <th scope="col" class="d-xl-table-cell text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 ps-1">
                                                    <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-secondary bg-opacity-25 text-secondary"><i class="bi bi-file-fill"></i></div>
                                                    <div><span class="d-block text-heading fw-bold">Bought BTC</span></div>
                                                </div>
                                            </td>
                                            <td class="d-xl-table-cell"><span class="badge badge-lg badge-dot"><i class="bg-success"></i>Active</span></td>
                                            <td class="d-xl-table-cell">3 min ago</td>
                                            <td class="text-xs">105</td>
                                            <td>1.23</td>
                                            <td class="text-end dropdown">
                                                <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#!" class="dropdown-item">Create case</a>
                                                    <a href="#!" class="dropdown-item">Close alert</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 ps-1">
                                                    <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-secondary bg-opacity-25 text-secondary"><i class="bi bi-file-fill"></i></div>
                                                    <div><span class="d-block text-heading fw-bold">Sold ADA</span></div>
                                                </div>
                                            </td>
                                            <td class="d-xl-table-cell"><span class="badge badge-lg badge-dot"><i class="bg-success"></i>Active</span></td>
                                            <td class="d-xl-table-cell">3 min ago</td>
                                            <td class="text-xs">123</td>
                                            <td>1.23</td>
                                            <td class="text-end dropdown">
                                                <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#!" class="dropdown-item">Create case</a>
                                                    <a href="#!" class="dropdown-item">Close alert</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12 col-lg-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5>Earnings</h5>
                                            </div>
                                            <div class="hstack align-items-center"><a href="#" class="text-muted"><i class="bi bi-arrow-repeat"></i></a></div>
                                        </div>
                                        <div class="mx-n4">
                                            <div id="chart-users" data-height="270"></div>
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
    
<?php include "./components/footer.php"; ?>