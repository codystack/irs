<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $mediaID=$_POST['view_media_id'];
    $select_query = "SELECT * FROM tbl_media WHERE tbl_media.id='$mediaID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $messageTitle = $row['messageTitle'];
            $preacher = $row['preacher'];
            $category = $row['category'];
            $description = $row['description'];
            $audioLink = $row['audioLink'];
            $youtubeLink = $row['youtubeLink'];
            $dateS = $row['date'];
            $date = strtotime($dateS);
    ?>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Message Title</label> 
        <input class="form-control" placeholder="Message Title" value="<?php echo $messageTitle; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Preacher</label> 
        <input class="form-control" placeholder="Preacher" value="<?php echo $preacher; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Category</label> 
        <input class="form-control" placeholder="Category" value="<?php echo $category; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Date</label> 
        <input class="form-control" placeholder="Date" value="<?php echo date('j F Y', $date); ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label> 
        <textarea class="form-control" placeholder="Description" type="text" readonly><?php echo $description; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Audio Link</label> 
        <input class="form-control" placeholder="Audio Link" value="<?php echo $audioLink; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Youtube Link</label> 
        <input class="form-control" placeholder="Youtube Link" value="<?php echo $youtubeLink; ?>" type="text" readonly>
    </div>
    <?php
        }
    }
    ?>
</div>