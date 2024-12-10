<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
        $userID=$_POST['view_case_id'];
        $select_query = "SELECT * FROM kase WHERE kase.case_id='$userID'";
        $result = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            foreach($result as $row) {
                $case_id = $row['case_id'];
                $eventID = $row['eventID'];
                $type = $row['type'];
                $rule = $row['rule'];
                $playbook_link = $row['playbook_link'];
                $event_time = $row['event_time'];
                $event_time = strtotime($event_time);
                
    ?>
    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Incident Name:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end">EventID: <?php echo $eventID; ?> - [<?php echo $rule; ?>]</span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Description:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end">EventID: <?php echo $eventID; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Incident Type:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo $type; ?></span>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 col-lg-6 col-12">
                <span class="fs-6"><b>Created Date:</b></span>
            </div>

            <div class="col-md-4 col-lg-6 col-12 text-right">
                <div class="text-end">
                    <span class="fs-6 text-end"><?php echo (date("M. d, Y h:i A", $event_time)); ?></span>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo $playbook_link; ?>" class="btn btn-sm btn-primary">Start Playbook</a>
        </div>
    </div>
    <?php
        }
    }
    ?>
</div>