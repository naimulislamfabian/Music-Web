<?php
if (isset($_COOKIE["cusr"])) {
  header("location: index");
}
require_once("header.php");
?>
<?php
if (isset($_REQUEST["error"])) {
  echo "<div class='show' id='snackbar'>Username or Password is wrong..</div>";
}
?>
<div id="loginBody">

</div>
<div class="loginBg">
  <img class="login_sideimg" src="img/logo.png" alt="">
  <a class="login_google" href="">Login with Google</a>
  <a class="login_forgot" href="">Forgot username or password?</a>
  <div class="login_verticalLine"></div>
  <form class="login_form" action="login_core" method="post">
    <div class="user_div">
      <img class="user_icon" src="img/user.png" alt="">
      <input class="login_username" type="text" name="username" placeholder="Username" required>
    </div>
    <br>
    <div class="pssword_div">
      <img class="password_icon" src="img/lock.png" alt="">
      <input id="passwordField" class="login_password" type="password" name="password" placeholder="Password" required>
      <img onclick="eyeFunction()" id="eyeButton" class="eye_button" src="img/eye_on.png" alt="">
    </div>
    <br>
    <input type="submit" value="Login" class="login_submit">
    <a href="signup" class="login_signup">Signup</a>
  </form>
  <a class="login_facebook" href="">Login with Facebook</a>
</div>



<?php
require_once("footer.php");
?>