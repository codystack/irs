<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
        $userID=$_POST['view_log_id'];
        $select_query = "SELECT * FROM log WHERE log.log_id='$userID'";
        $result = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            foreach($result as $row) {
                $log_id = $row['log_id'];
                $userID = $row['userID'];
                $type = $row['type'];
                $source_address = $row['source_address'];
                $source_port = $row['source_port'];
                $destination_address = $row['destination_address'];
                $destination_port = $row['destination_port'];
                $request_url = $row['request_url'];
                $request_method = $row['request_method'];
                $device_action = $row['device_action'];
                $process = $row['process'];
                $parent_process = $row['parent_process'];
                $parent_process_md5 = $row['parent_process_md5'];
                $firewall_action = $row['firewall_action'];
                $time = $row['time'];
                $time = strtotime($time);
                
    ?>
    <div class="container mb-10">
        <div class="row mt-1">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6 text-danger"><b>Field</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end text-danger"><b>Value</b></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$type){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$source_address){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Source Address:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $source_address; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$source_port){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Source Port:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $source_port; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$destination_address){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Destination Address:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $destination_address; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$destination_port){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Destination Port:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $destination_port; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$time){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Time:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo (date("M. d, Y h:i A", $time)); ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6 text-danger"><b>Raw Log</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <!-- <span class="fs-6 text-end text-danger"><b>Value</b></span> -->
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$request_url){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Request URL:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $request_url; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$request_method){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Request Method:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $request_method; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$device_action){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Device Action:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $device_action; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$process){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Process:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $process; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$parent_process){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Parent Process:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $parent_process; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$parent_process_md5){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Parent Process MD5:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $parent_process_md5; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3" style="display: <?php if (!$firewall_action){echo 'none';}else{echo 'unset';}; ?>">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Firewall Action:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $firewall_action; ?></span>
                </div>
            </div>
        </div>

    </div>
    <?php
        }
    }
    ?>
</div>