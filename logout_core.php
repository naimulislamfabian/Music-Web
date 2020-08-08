<?php
    setcookie("cusr","", time() - (86400 * 100));
        header("location: login");
?>