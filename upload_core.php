<?php
require_once("db_info.php");

$name = $_REQUEST["name"];
$userid = $_REQUEST["userid"];
$title = $_REQUEST["title"];
$description = $_REQUEST["description"];

$thumbnail = $_FILES["thumbnail"];
$thumbnailName = uniqid() . rand(0, 999999999);
$file = $_FILES["file"];
$fileName = uniqid() . rand(0, 999999999);


move_uploaded_file($file["tmp_name"], "files/$fileName.mp3");
move_uploaded_file($thumbnail["tmp_name"], "thumbnails/$thumbnailName.jpg");

$postSaving_query = "INSERT INTO `posts` (`name`, `user_id`, `title`, `thumbnail`, `file`, `description`) VALUES ('$name', '$userid', '$title', '$thumbnailName', '$fileName', '$description')";

$runquery = mysqli_query($dbconnect, $postSaving_query);

if ($runquery == true) {
    header("location: index");
}




?>
