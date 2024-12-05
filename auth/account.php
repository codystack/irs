<?php
session_start();

//Connect database
include "./config/db.php";


//User registration script
if (isset($_POST['user_registration'])) {

    $username = $conn->real_escape_string($_POST['username']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $status = $conn->real_escape_string($_POST['status']);

    $check_user_query = "SELECT * FROM users WHERE email='$email' || username='$username'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        // Finally, register user if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (username, first_name, last_name, email, password, phone, status) 
  			        VALUES('$username', '$first_name', '$last_name', '$email', '$password', '$phone', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['user_id'] = $user_id;

            $_SESSION['success_message']    = "Registration successful.. redirecting";
            echo "<meta http-equiv='refresh' content='5; URL=login'>"; 
        }else {
            $_SESSION['error_message']    = "Error creating account contact support";
        }
    }
}



//Login script
if (isset($_POST['user_login'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $username = $row['username'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $user_id = $row['user_id'];
        $status = $row['status'];
        $picture = $row['picture'];
        $phone = $row['phone'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['status'] = $status;
        $_SESSION['user_id'] = $user_id;

        if ($status == 'Inactive'){
            $_SESSION['error_message'] = "Your account is frozen, please contact support";
        }
        if ($status == 'Active'){
            $_SESSION['success_message'] = "Login Successful... redirecting";
            echo "<meta http-equiv='refresh' content='5; URL=dashboard'>"; 
            // header('location: dashboard');
        }

    }else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}