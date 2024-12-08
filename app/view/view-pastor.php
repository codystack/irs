<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $pastorID=$_POST['view_pastor_id'];
    $select_query = "SELECT * FROM tbl_pastors WHERE tbl_pastors.id='$pastorID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $pastorName = $row['pastorName'];
            $branch = $row['branch'];
            $phone = $row['phone'];
            $photograph = $row['photograph'];
            $dateCreated = $row['dateCreated'];
            $date = strtotime($dateCreated);
    ?>
    <div class="text-center mb-5">
        <img src="<?php echo $photograph; ?>" class="avatar-sm w-rem-48 h-rem-48 rounded-circle">
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Pastor's Name</label> 
        <input class="form-control" placeholder="pastor's name" value="<?php echo $pastorName; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Branch</label> 
        <input class="form-control" placeholder="Branch" value="<?php echo $branch; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Phone Number</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $phone; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Date Joined</label> 
        <input class="form-control" placeholder="Latitude" value="<?php echo date('j F Y', $date); ?>" type="text" readonly>
    </div>
    <?php
        }
    }
    ?>
</div>