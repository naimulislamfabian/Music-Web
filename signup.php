<?php
require_once("header.php");

if (isset($_COOKIE["cusr"])) {
  header("location: index");
}
if (isset($_REQUEST["mail_error"])) {
  echo "<div class='show' id='snackbar'>Invalid Email Try Another..</div>";
}
?>
<?php
if (isset($_REQUEST["username_error"])) {
  echo "<div class='show' id='snackbar'>Invalid Username Try Another..</div>";
}
?>
<div id="signupBody">

</div>
<div class="signupBg">
  <div class="signup_header">
    <span class="musicorum">Musicorum</span>
    <div class="signup_logindiv">
      <span class="signup_loginText">Already have an Account?</span>
      <a class="signup_login" href="login">Login</a>
    </div>
  </div>
  <span class="signup_toptext">We will need...</span>
  <form class="signup_form" action="signup_core" method="post">
    <input class="signup_input signup_name" type="text" name="fname" placeholder="First Name" required>
    <input class="signup_input signup_name" type="text" name="lname" placeholder="Last Name" required>
    <input class="signup_input signup_username" type="text" name="username" placeholder="@username" required>
    <div class="signup_emailsection">
      <input class="signup_input signup_email" type="email" name="email" placeholder="Email" required>
      <input class="signup_input signup_email" type="email" name="confirm_email" placeholder="Confirm Email" required>
    </div>
    <div class="signup_passwordsection">
      <input class="signup_input signup_password" type="password" name="password" placeholder="Password" required>
      <input class="signup_input signup_password" type="password" name="confirm_password" placeholder="Confirm Password" required>
    </div>
    <input class="signup_submit" type="submit" value="Signup">
  </form>
  <div class="signup_verticalLine"></div>
  <div class="signup_loginwith">
    <a class="signup_login_google" href="">Login with Google</a>
    <a class="signup_login_facebook" href="">Login with Facebook</a>
  </div>
</div>

<?php
require_once("footer.php");
?>