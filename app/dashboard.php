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
                                <h1 class="ls-tight">Monitoring</h1>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="dashboard" class="nav-link active">Main Channel</a></li>
                            <li class="nav-item"><a href="investigation-channel" class="nav-link">Investigation Channel</a></li>
                            <li class="nav-item"><a href="closed-alerts" class="nav-link">Closed Alerts</a></li>
                        </ul>
                    </header>

                    <div class="card mb-7">
                        <div class="card-body pb-0">
                            <div class="table-responsive mb-10 mt-5">
                                <table id="monitoring" class="table table-hover table-striped table-sm table-nowrap">
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
                                        <?php
                                        $select_query = "SELECT * FROM kase ORDER BY created_at ASC";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $case_id = $row['case_id'];
                                                    $rule = $row['rule'];
                                                    $eventID = $row['eventID'];
                                                    $type = $row['type'];
                                                    $type = $row['type'];
                                                    $severity = $row['severity'];
                                                    $event_time = $row['event_time'];
                                                    $date = strtotime($event_time);
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 ps-1">
                                                    <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-secondary bg-opacity-25 text-secondary"><i class="bi bi-file-fill"></i></div>
                                                    <div><span class="d-block text-heading fw-bold"><?php echo $rule; ?></span></div>
                                                </div>
                                            </td>
                                            <td class="d-xl-table-cell"><span class="badge badge-lg badge-dot"><i class="bg-success"></i><?php echo $severity; ?></span></td>
                                            <td class="d-xl-table-cell"><?php echo date('j F Y', $date); ?></td>
                                            <td class="text-xs"><?php echo $eventID; ?></td>
                                            <td><?php echo $type; ?></td>
                                            <td class="text-end dropdown">
                                                <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#!" class="dropdown-item">Take ownership</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>
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