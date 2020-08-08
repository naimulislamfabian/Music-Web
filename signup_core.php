<?php
    require_once("db_info.php");

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $encyptedPassword = sha1(md5($password));
    $auth_token = md5(sha1($username.$password));
// mail
    $mailCheck_query = "SELECT * FROM `user_info` WHERE `email`='$email'";
    $run_mailcheckQuery = mysqli_query($dbconnect, $mailCheck_query);
    $mail_rowCount = mysqli_num_rows($run_mailcheckQuery);
// username
    $usernameCheck_query = "SELECT * FROM `user_info` WHERE `username`='$username'";
    $run_usernameCheck_query = mysqli_query($dbconnect, $usernameCheck_query);
    $username_rowCount = mysqli_num_rows($run_usernameCheck_query);

    if ($mail_rowCount===0) {
        if ($username_rowCount===0) {
            $signup_query = "INSERT INTO `user_info`(`first_name`, `last_name`, `username`, `email`, `password`, `auth_token`) VALUES ('$fname','$lname','$username','$email','$encyptedPassword','$auth_token')";
            $run_signupQuery = mysqli_query($dbconnect, $signup_query);
            if ($run_signupQuery == true) {
                header("location: verification");
            }
        }else{
            header("location: signup?username_error");
        }
    }else{
        header("location: signup?mail_error");
    }


?>
