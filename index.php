<?php

if (!isset($_COOKIE["cusr"])) {
  header("location: login");
}
require_once("header.php");

?>

<div class="indexBody">
  <header class="indexHeader">
    <form class="searchBox" action="search" method="GET">
      <input name="term" placeholder="Search for Music, Artist, Genre etc" class="searchField" type="text" required>
      <button class="serachSubmit" type="submit">
        <img class="searchIco" src="img/search.png" alt="">
      </button>
    </form>
    <a href="upload"><img class="uploadIco" src="img/upload.png" alt=""></a>
    <img class="notifIco" src="img/notification.png" alt="">
    <a href="index"><img class="homeBtn" src="img/home.png" alt=""></a>
    <img id="ppBox" onclick="dropfunc()" class="user_avatar" src="avatar/<?php echo $getData["avatar"]; ?>.png" alt="">
    <div id="dropdownMenu">
      <ul>
        <li class="dropdownLink"><a href="profile?id=<?php echo $getData["Id"]; ?>">Profile</a></li>
        <li class="dropdownLink"><a href="settings">Settings</a></li>
        <li class="dropdownLink"><a href="">FAQ</a></li>
        <li class="dropdownLink"><a href="logout_core">Lgout</a></li>
      </ul>
    </div>
  </header>

  <p class="popularUploads">Popular uploads</p>
  <div id="container" class="post_body">
    <?php
    while ($showposts = mysqli_fetch_array($runPost_Query)) {
    ?>
      <div class="postDiv">

        <?php
        //echo $showposts["name"] . "<br/>"; 
        //echo $showposts["description"] . "<br/>"; 
        ?>
        <!-- <audio controls>
          <source src="files/.mp3" type="audio/mpeg">
        </audio> -->

        <img class="thumbnail" src="thumbnails/<?php echo $showposts["thumbnail"] ?>.jpg" height="50px" width="80px" alt="">
        <span class="title"><?php echo $showposts["title"] . "<br/>"; ?></span>
        <img id="likeButton" class="heart" src="img/heart-before.png" alt=""><span class="likes">18.5M</span>
        <img id="<?php echo $showposts["post_id"]; ?>" onclick="playfunc(<?php echo $showposts['post_id']; ?>)" data-val="<?php echo $showposts["file"]; ?>" class="play-pause" src="img/play.png" alt="">


      </div>


    <?php } ?>
  </div>
  <div class="footerPlayer">
    <audio class="audioPlayer" id="audioplayer" autobuffer="" loop="true" preload="auto" controls></audio>
  </div>
</div>
<?php
require_once("footer.php");
?>