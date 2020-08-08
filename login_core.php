<?php
    require_once("db_info.php");

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $auth_token = md5(sha1($username.$password));
    
    $login_query = "SELECT * FROM `user_info` WHERE `auth_token`='$auth_token'";
    $run_loginQuery = mysqli_query($dbconnect,$login_query);
    $rowCount = mysqli_num_rows($run_loginQuery);

    if($rowCount===1){
        setcookie("cusr", $auth_token, time() + (86400 * 7));
        header("location: index");
    }else{
        header("location: login?error");
    }
    
?>