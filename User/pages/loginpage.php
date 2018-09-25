<?php 
session_start();
if(isset($_COOKIE['username'])){
  header('Location: ../');
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="../css/loginpage.css">
<link rel="stylesheet" href="../css/footer.css">
<title>MetroFocus | Login</title>

<section class="hero is-fullheight login-hero">
<section class="hero is-dark">
    <div class="hero-head" style="background: #071425;">
      <div class="container">
        <nav class="navbar is-dark">
          <div class="navbar-brand">
            <a href="../" class="navbar-item" style="background: none !important;">
              <span style="font-weight: bold;">Metro</span><span style="color: #FF7100;font-weight: bold;">Focus</span>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div class="navbar-menu">
            <div class="navbar-start">
              <a href="../" class="navbar-item" style="background: none !important;">Home</a>
              <div class="navbar-item">
                <a href="cameraparts.php" class="navbar-item" style="background: none !important;">Camera Parts</a>
              </div>
              <div class="navbar-item">
                <a href="cameraaccessories.php" class="navbar-item" style="background: none !important;">Accessories</a>
              </div>
              <div class="navbar-item">
                <a href="faq.php" class="navbar-item" style="background: none !important;">FAQs</a>
              </div>
            </div>
            <style>
              #btnhover:hover{
                background-color: #44bfd5 !important;
              }
            </style>
            <div class="navbar-item is-paddingless is-guest">
              <a id="btnhover" style="color: #FFF;text-decoration: none;" href="signuppage.php" class="button thickbox is-text is-nolink is-uppercase">
                <span class="icon is-small">
                <i class="far fa-pen-square"></i>
                </span>
                <span>Signup</span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
</section>
  <div class="hero-body is-inline-block-mobile">
    <div class="container">
      <div class="columns is-multiline is-centered">
        <div class="column is-half">
          <form method="POST" name="loginform" id="loginform" onsubmit="return Validate();">
            <h1 style="color: white" class="has-text-centered title is-cursor-pointer is-size-1-touch">
                      Metro<span style="color: #FF7100">Focus</span>
            </h1>
            <div class="box">
              <div class="field">
              <label for="label_email">Username</label>
              <p class="control has-icons-left has-icons-right">
                <input tabindex="1" class="input is-rounded" id="email" name="email" type="text" placeholder="Username">
                <span class="icon is-small is-left">
                <i class="fal fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i id="emailicon" class=""></i>
                </span>
              </p>
              <p class="help is-danger is-large" id="emailmessage"></p>
              </div>
              <label style="float: right;margin-top: -7px;cursor: hand;"><a tabindex="4" href="forgotpassword.php">Forgot password?</a></label>
              <div class="field">
              <label>Password</label>
              <p class="control has-icons-left has-icons-right">
                <input tabindex="2" class="input is-rounded" id="pass" name="pass" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fal fa-lock"></i>
                </span>
                <span class="icon is-small is-right">
                <i id="passicon" class=""></i>
                </span>
              </p>
              <p class="help is-danger is-large" id="passmessage"></p>
              </div>
              <button class="button is-warning is-fullwidth has-text-centered" type="submit" id="btnLogin" name="btnLogin">Login</button>
            </div>
            <div class="field is-centered" id="footer-box">
              <div class="box">
                <p>Need an account? <span><a tabindex="3" href="signuppage.php">Create one here</a></span>
              </div>
            </div>
          </form>
          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading"><a href="">Terms</a></p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading"><a href="">Privacy</a></p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading"><a href="">Security</a></p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading"><a href="">Contact</a></p>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  </section>
  <?php include('../includes/footer.php'); ?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/sweetalert.min.js"></script>
  <script src="../js/navbar-burger.js"></script>
  <script>
    // var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var user = document.forms['loginform']['email'];
    var user_err = document.getElementById('emailmessage');
    var pass = document.forms['loginform']['pass'];
    var pass_err = document.getElementById('passmessage');
    function uservalid(){
      if (user.value == ''){
        $('#email').addClass('is-danger');
        $('#emailicon').addClass('fal fa-exclamation-triangle');
        user_err.textContent = "Enter your username";
      }
      else {
        $('#email').removeClass('is-danger');
        $('#emailicon').removeClass('fal fa-exclamation-triangle');
        user_err.textContent = "";
      }
    }
    function passvalid(){
      if (pass.value.length == 0){
        $('#pass').addClass('is-danger');
        $('#passicon').addClass('fal fa-exclamation-triangle');
        pass_err.textContent = "Enter your passowrd";
      }
      else if(pass.value.length < 8){
        $('#pass').addClass('is-danger');
        $('#passicon').addClass('fal fa-exclamation-triangle');
        pass_err.textContent = "Password must be more than 8 characters!";
      }
      else {
        $('#pass').removeClass('is-danger');
        $('#passicon').removeClass('fal fa-exclamation-triangle');
        pass_err.textContent = "";
      }
    }
    function validall(){
      if (($('#email').val() != '')&&($('#pass').val().length != 0)&&($('#pass').val().length > 7)){
        $.ajax({
               data: $('#loginform').serialize(),
               type: "POST",
               url: '../php/login.php',
               success: function(data)
               {
                  if (data == 'Admin') {
                    window.location = '../../Admin/';
                  }
                  else if (data == 'User') {
                    window.location = '../';
                  }
                  else {
                    swal(data,"","warning")
                    .then((value) => {
                      $('#pass').val('');
                    });
                  }
               }
           });
      }
    }
    function Validate(){
      uservalid();
      passvalid();
      validall();
      return false;
    }
    $('#email').bind('input', function(){
      uservalid();
    });
    $('#pass').bind('input', function(){
      passvalid();
    });
    $('#email').blur('input', function(){
      uservalid();
    });
    $('#pass').blur('input', function(){
      passvalid();
    });
  </script>
  




