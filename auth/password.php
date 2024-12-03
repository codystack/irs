<?php
//Connect email sending
require_once "./auth/emails/password-reset-mail.php";

session_start();

//Connect database
include "./config/db.php";


// Password reset query
if (isset($_POST['password_reset'])) {

  $email = $conn->real_escape_string($_POST['email']);

  // ensure that the user exists
  $query = "SELECT email FROM users WHERE email='$email'";
  $token = bin2hex(random_bytes(50)); // generate unique token

  $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) == 0) {
        $_SESSION['error_message'] = "User with this email does not exist!";
    }else {
        // Finally, save user email if there are no errors
        $query = "INSERT INTO password_reset (email, token) 
  			        VALUES('$email', '$token')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            sendPasswordResetEmail($email, $token);

            $_SESSION['email'] = $email;
            header('location: password-reset-email-sent');
        }else {
            $_SESSION['error_message']    = "Error resetting password";
        }
    }
}



// Save Ne Password Query
if (isset($_POST['new_password'])) {
    $new_password = $conn->real_escape_string($_POST['new_password']);
    $confirm_new_password = $conn->real_escape_string($_POST['confirm_new_password']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    $token = $_GET['token'];

    

    // select email address of user from the password_reset table 
    $check_token_query = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $check_token_query);
    if (mysqli_num_rows($result) > 0){
        $new_password = sha1($new_password);
        $update_password_query = "UPDATE users SET password='$new_password' WHERE email='$email'";
        $result = mysqli_query($conn, $update_password_query);

        $_SESSION['success_message'] = "Password Changed Successfully";
        header('location: login');
    }else {
        $_SESSION['error_message'] = "Error resetting password".mysqli_error($conn);
    }
}