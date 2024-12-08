<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $quoteID=$_POST['view_quote_id'];
    $select_query = "SELECT * FROM tbl_quote WHERE tbl_quote.id='$quoteID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $title = $row['title'];
            $link = $row['link'];
    ?>
    <div class="text-center mb-5">
        <img src="<?php echo $link; ?>" class="avatar-sm w-rem-48 h-rem-48 rounded-circle">
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label> 
        <input class="form-control" placeholder="Title" value="<?php echo $title; ?>" type="text" readonly>
    </div>
    <?php
        }
    }
    ?>
</div>