<?php

//Connect database
include "./config/db.php";



//Take Ownership Query
if (isset($_POST['take_ownership_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "UPDATE kase SET ownership='Taken' WHERE case_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $ownershipquery=mysqli_query($conn,"INSERT INTO kase_owner (userID, caseID) VALUES ('".$_SESSION['user_id']."', '$id')");

        $_SESSION['success_message'] = "Case Ownership Claimed";
    }else{
        $_SESSION['error_message'] = "Error taking ownership".mysqli_error($conn);
    }                                                                                                                                                                                                                      

}
                                                                                  