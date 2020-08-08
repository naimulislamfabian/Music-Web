<?php
    $host = "localhost";
    $dbusr = "admin";
    $dbpwd = "admin";
    $dbname = "music_web";

    $dbconnect = mysqli_connect($host, $dbusr, $dbpwd, $dbname);

    if ($dbconnect != true) {
        echo "db connect error";
    }
?>