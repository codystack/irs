<?php
session_start();
include "../config/db.php";
?>

<div class="mb-3 row">
    <?php
    $devotionalID=$_POST['view_devotional_id'];
    $select_query = "SELECT * FROM tbl_devotionals WHERE tbl_devotionals.id='$devotionalID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $id = $row['id'];
            $topic = $row['topic'];
            $scripture = $row['scripture'];
            $memoryVerse = $row['memoryVerse'];
            $firstParagraph = $row['firstParagraph'];
            $secondParagraph = $row['secondParagraph'];
            $thirdParagraph = $row['thirdParagraph'];
            $prayer = $row['prayer'];
    ?>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Topic</label> 
        <input class="form-control" placeholder="Topic" value="<?php echo $topic; ?>" type="text" readonly>
    </div>
    <div class="col-sm-6 mb-3">
        <label class="form-label">Scripture</label> 
        <input class="form-control" placeholder="Scripture" value="<?php echo $scripture; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Memory verse</label> 
        <input class="form-control" placeholder="Meeting day's" value="<?php echo $memoryVerse; ?>" type="text" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">1st Paragraph</label> 
        <textarea class="form-control" placeholder="1st Paragraph" readonly row="7" type="text"><?php echo $firstParagraph; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">2nd Paragraph</label> 
        <textarea class="form-control" placeholder="2nd Paragraph" readonly row="7" type="text"><?php echo $secondParagraph; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">3rd Paragraph</label> 
        <textarea class="form-control" placeholder="3rd Paragraph" readonly row="7" type="text"><?php echo $thirdParagraph; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Prayer</label> 
        <textarea class="form-control" placeholder="Prayer" readonly row="7" type="text"><?php echo $prayer; ?></textarea>
    </div>
    <?php
        }
    }
    ?>
</div>