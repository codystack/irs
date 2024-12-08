<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $branchID=$_POST['view_branch_id'];
    $select_query = "SELECT * FROM tbl_branches WHERE tbl_branches.id='$branchID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $branchName = $row['branchName'];
            $firstMeetingDay = $row['firstMeetingDay'];
            $firstMeetingActivity = $row['firstMeetingActivity'];
            $firstMeetingTime = $row['firstMeetingTime'];
            $secondMeetingDay = $row['secondMeetingDay'];
            $secondMeetingActivity = $row['secondMeetingActivity'];
            $secondMeetingTime = $row['secondMeetingTime'];
            $thirdMeetingDay = $row['thirdMeetingDay'];
            $thirdMeetingActivity = $row['thirdMeetingActivity'];
            $thirdMeetingTime = $row['thirdMeetingTime'];
            $address = $row['address'];
            $longitude = $row['longitude'];
            $latitude = $row['latitude'];
    ?>
    <div class="mb-3">
        <label class="form-label">Branch Name</label> 
        <input class="form-control" placeholder="Branch name" value="<?php echo $branchName; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">1st Meeting Day's</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $firstMeetingDay; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">1st Meeting Activity</label> 
        <input class="form-control" placeholder="1st Activity" value="<?php echo $firstMeetingActivity; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">1st Meeting Time</label> 
        <input class="form-control" placeholder="1st Activity" value="<?php echo $firstMeetingTime; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">2nd Meeting Day's</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $secondMeetingDay; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">2nd Meeting Activity</label> 
        <input class="form-control" placeholder="2nd Activity" value="<?php echo $secondMeetingActivity; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">2nd Meeting Time</label> 
        <input class="form-control" placeholder="2nd Activity" value="<?php echo $secondMeetingTime; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">3rd Meeting Day's</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $thirdMeetingDay; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">3rd Meeting Activity</label> 
        <input class="form-control" placeholder="1st Activity" value="<?php echo $thirdMeetingActivity; ?>" type="text" readonly>
    </div>
    <div class="col-sm-4 mb-3">
        <label class="form-label">3rd Meeting Time</label> 
        <input class="form-control" placeholder="1st Activity" value="<?php echo $thirdMeetingTime; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label> 
        <textarea class="form-control" placeholder="Address" readonly row="5" type="text"><?php echo $address; ?></textarea>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Longitude</label> 
        <input class="form-control" placeholder="Longitude" value="<?php echo $longitude; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Latitude</label> 
        <input class="form-control" placeholder="Latitude" value="<?php echo $latitude; ?>" type="text" readonly>
    </div>
    <?php
        }
    }
    ?>
</div>