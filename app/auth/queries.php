<?php

//Connect database
include "./config/db.php";


//Complete Registration Query
if (isset($_POST['complete_registration'])) {

    $gender = $conn->real_escape_string($_POST['gender']);
    $nin = $conn->real_escape_string($_POST['nin']);
    $address = $conn->real_escape_string($_POST['address']);
    $proof_of_identification_path = $conn->real_escape_string('upload/'.$_FILES['proof_of_identification']['name']);

    if (file_exists($proof_of_identification_path)){
        $proof_of_identification_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['proof_of_identification']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['proof_of_identification']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }
    


    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE users SET gender='$gender', nin='$nin', address='$address', proof_of_identification='$proof_of_identification_path', picture='upload/avatar.png', status='Active' WHERE user_id='".$_SESSION['user_id']."'";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) > 0){
        
        //copy image to upload folder
        copy($_FILES['proof_of_identification']['tmp_name'], $proof_of_identification_path);

        $_SESSION['success_message'] = "Regitration completed, sign into your account 👍";
        echo "<meta http-equiv='refresh' content='5; URL=dashboard'>";                                                                                                                                                                                                                                                                                                                                      
    }else {
        $_SESSION['error_message'] = "Error completing registration. ".mysqli_error($conn);
    }
}