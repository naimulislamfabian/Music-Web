<?php

if (!isset($_COOKIE["cusr"])) {
    header("location: login");
}
require_once("header.php");
?>
<form action="upload_core" method="POST" enctype="multipart/form-data">
    <input name="name" type="hidden" value="<?php echo $getData["first_name"]; ?>">
    <input name="userid" type="hidden" value="<?php echo $getData["Id"]; ?>">
    <input name="title" placeholder="Tile" type="text">
    <br>
    <textarea name="description" placeholder="Description" id="" cols="20" rows="5"></textarea>
    <br>
    audio file<input name="file" type="file">
    <br>
    thumbnail<input name="thumbnail" type="file">
    <br>
    <input value="upload" type="submit">
</form>


<?php
require_once("footer.php");
?>