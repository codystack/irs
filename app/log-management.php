<?php
$page = "Log Management";
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
                                            <table id="logMgt" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Source Address</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Source Port</th>
                                                        <th scope="col">Destination Address</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Date Added</th>
                                                        <th scope="col" class="text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $select_query = "SELECT * FROM log WHERE userID='" . $_SESSION['user_id'] . "' ORDER BY created_at ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $log_id = $row['log_id'];
                                                                $source_address = $row['source_address'];
                                                                $source_port = $row['source_port'];
                                                                $destination_address = $row['destination_address'];
                                                                $type = $row['type'];
                                                                $time = $row['time'];
                                                                $date = strtotime($time);
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-info-circle-fill"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $source_address; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $source_port; ?></td>
                                                        <td><?php echo $destination_address; ?></td>
                                                        <td><?php echo $type; ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td class="text-end">
                                                            <a href="#" class="view_log btn btn-dark btn-xs" id="<? echo $log_id; ?>"><i class="bi bi-eye"></i></a>
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