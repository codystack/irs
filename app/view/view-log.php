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
                $time = $row['time'];
                $time = strtotime($time);
                $status = $row['status'];
                switch ($status) {
                    case 0;
                        $class  = 'bg-danger';
                        $text = 'Inactive';
                        break;
                    case 1;
                        $class  = 'bg-success';
                        $text = 'Active';
                        break;
                    default:
                        $class  = '';
                }
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

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Source Address:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $source_address; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Source Port:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $source_port; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Destination Address:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $destination_address; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Destination Port:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $destination_port; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Time:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo (date("F d, Y h:i A", $time)); ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

    </div>
    <?php
        }
    }
    ?>
</div>