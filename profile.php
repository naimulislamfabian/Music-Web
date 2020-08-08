<?php
if (!isset($_COOKIE["cusr"])) {
  header("location: login");
}
require_once("db_info.php");
require_once("header.php");

?>
<div class="profileBody">
  <header class="indexHeader">
    <form class="searchBox" action="search" method="GET">
      <input name="term" placeholder="Search for Music, Artist, Genre etc" class="searchField" type="text" required>
      <button class="serachSubmit" type="submit">
        <img class="searchIco" src="img/search.png" alt="">
      </button>
    </form>
    <a href="upload"><img id="upload" class="uploadIco" src="img/upload.png" alt=""></a>
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
  <?php
  $user_id = $_REQUEST["id"];
  $getUser_dataQuery = "SELECT * FROM `user_info` WHERE `Id`='$user_id'";
  $run_getUser_dataQuery = mysqli_query($dbconnect, $getUser_dataQuery);
  $usrData = mysqli_fetch_array($run_getUser_dataQuery);
  $own_post_query = "SELECT * FROM `posts` WHERE `user_id`='$user_id'";
  $run_ownPost_query = mysqli_query($dbconnect, $own_post_query);
  ?>
  <div class="profileSection">
    <img class="avatar" src="avatar/<?php echo $usrData["avatar"]; ?>.png" alt="">
    <span class="username">@<?php echo $usrData["username"]; ?></span>
    <hr class="usernameLine">
    <ul class="userInfo">
      <li class="info"><img class="profile_icons" src="img/twitter.png" alt=""></li>
      <li class="info"><img class="profile_icons" src="img/facebook.png" alt=""></li>
      <li class="info"><img class="profile_icons" src="img/instagram.png" alt=""></li>
      <li class="info"><img class="profile_icons" src="img/youtube.png" alt=""></li>
    </ul>
  </div>
  <div class="whole_postSection">
    <img class="coverPhoto" src="coverphotos/<?php echo $usrData["cover"]; ?>.png" alt="">
    <div class="info_activity">
      <span class="nameSec"><?php echo $usrData["first_name"]; ?> <?php echo $usrData["last_name"]; ?></span>
      <img class="followers" src="img/followers.png" alt=""> <span style="color: white; font-size:13px;">18.5M</span>
      <a class="actButtons1" href="">Albums</a>
      <?php
      if ($user_id == $getData["Id"]) {
        echo "<a class='actButtons2' href=''>Edit Profile</a>";
      } else {
        echo "<a class='actButtons2' href='follow_core?id=$user_id'>Follow</a>";
      }
      ?>

    </div>


    <!-- <img class="slideButton_left" id="slideLeft" src="img/scroll-left.png" alt="">
    <span class="uploadTag">All uploads</span> -->
    <div id="containerss" class="postSection">

      <?php
      while ($show_ownPosts = mysqli_fetch_array($run_ownPost_query)) {
      ?>
        <div class="native_postDiv">

          <?php
          //echo $show_ownPosts["name"] . "<br/>"; 
          //echo $show_ownPosts["description"] . "<br/>"; 
          ?>
          <img class="native_thumbnail" src="thumbnails/<?php echo $show_ownPosts["thumbnail"] ?>.jpg" height="50px" width="80px" alt="">
          <span class="native_title"><?php echo $show_ownPosts["title"] . "<br/>"; ?></span>
          <img id="likeButton" class="native_heart" src="img/heart-before.png" alt=""><span class="native_likes">18.5M</span>
          <img id="<?php echo $show_ownPosts["post_id"]; ?>" onclick="playfunc(<?php echo $show_ownPosts['post_id']; ?>)" data-val="<?php echo $show_ownPosts["file"]; ?>" class="native_play-pause" src="img/play.png" alt="">


        </div>


      <?php } ?>
    </div>
    <!-- <img class="slideButton_right" id="slideRight" src="img/scroll-right.png" alt=""> -->

  </div>


</div>


<?php
require_once("footer.php");
?>