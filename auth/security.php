<?php
//Connect email sending
require_once "./auth/emails/password-changed.php";

// Connect database
include "./config/db.php";


//Password Change
if(isset($_POST['password_change_btn'])) {

    $newPassword    = $conn->real_escape_string($_POST['newPassword']);
    $password       = $conn->real_escape_string($_POST['password']);

    $password = sha1($_POST['password']);
    $user_id = $_SESSION['user_id'];
    $newPassword = sha1($_POST['newPassword']);
    $sql=mysqli_query($conn,"SELECT * FROM users where password='$password' && user_id='".$_SESSION['user_id']."'");
    $num=mysqli_fetch_array($sql);
    if($num>0){
        $conn=mysqli_query($conn,"UPDATE users SET password='$newPassword' where user_id='".$_SESSION['user_id']."'");

        sendPasswordChangedEmail($email);

        $_SESSION['success_message'] = "Password changed, login with the new password 👍";
        echo "<meta http-equiv='refresh' content='3; URL=logout'>";
    }else{
        $_SESSION['error_message'] = "Current password mismatch";
    }
}
