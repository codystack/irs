<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $settingsID=$_POST['view_settings_id'];
    $select_query = "SELECT * FROM tbl_settings WHERE tbl_settings.id='$settingsID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $title = $row['title'];
            $value = $row['value'];
    ?>
    <div class="mb-3">
        <label class="form-label">Title</label> 
        <input class="form-control" placeholder="Branch" value="<?php echo $title; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Value</label> 
        <input class="form-control" placeholder="Value" value="<?php echo $value; ?>" type="text" readonly>
    </div>
    <?php
        }
    }
    ?>
</div>