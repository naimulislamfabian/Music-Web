<?php
session_start();

require_once("db_info.php");
if (isset($_COOKIE["cusr"])) {
    $auth = $_COOKIE["cusr"];
    $query = "SELECT * FROM `user_info` WHERE `auth_token`='$auth'";
    $runQuery = mysqli_query($dbconnect, $query);
    $getData = mysqli_fetch_array($runQuery);
}

if (isset($_COOKIE["cusr"])) {
    $post_query = "SELECT * FROM `posts` ORDER BY RAND()";
    $runPost_Query = mysqli_query($dbconnect, $post_query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500;600&display=swap" rel="stylesheet">
    <title>Musicorum</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>

<body>