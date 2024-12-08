<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $eventID=$_POST['view_event_id'];
    $select_query = "SELECT * FROM tbl_event WHERE tbl_event.id='$eventID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $eventTitle = $row['eventTitle'];
            $eventDate = $row['eventDate'];
            $eventTime = $row['eventTime'];
            $eventVenue = $row['eventVenue'];
            $eventDescription = $row['eventDescription'];
            $eventFlyer = $row['eventFlyer'];
    ?>
    <div class="text-center mb-5">
        <img src="<?php echo $eventFlyer; ?>" class="avatar-sm w-rem-48 h-rem-48 rounded-circle">
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Title</label> 
        <input class="form-control" placeholder="Title" value="<?php echo $eventTitle; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Date of event</label> 
        <input class="form-control" placeholder="Date of event" value="<?php echo $eventDate; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Time of event</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $eventTime; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Venue</label> 
        <input class="form-control" placeholder="Venue" value="<?php echo $eventVenue; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label> 
        <textarea class="form-control" placeholder="Description" type="text" readonly><?php echo $eventDescription; ?></textarea>
    </div>
    <?php
        }
    }
    ?>
</div>