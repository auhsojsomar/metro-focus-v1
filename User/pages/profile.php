<?php 
  session_start();
  include '../includes/db.php';
  if(isset($_COOKIE['email'])){
    $user = $_COOKIE['email'];
    $sql2 = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
    $badge = mysqli_fetch_array($sql2);
  }
  if(!isset($_COOKIE['username'])){
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
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/profile.css">
<title>MetroFocus | Profile</title>
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
<section class="hero is-primary">
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
              <?php 
                  if(isset($_COOKIE['username'])){
                    ?>
                   <div class="navbar-item is-paddingless is-guest">
                       <span id="badge" class="badge is-badge-warning is-badge-left" data-badge="<?php echo $badge[0] ?>">
                           <a id="cart" style="color: #FF7100;text-decoration: none;" href="cart.php" class="button thickbox is-text is-nolink is-uppercase">
                               <span><i class="fal fa-shopping-cart fa-lg"></i></span>
                           </a>
                       </span>
                   </div>
                    <div class="navbar-item is-paddingless is-guest">
                      <a id="btnhover" style="color: #FFF;text-decoration: none;" href="logout.php" class="button thickbox is-text is-nolink is-uppercase">
                        <span class="icon is-small">
                        <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>Logout</span>
                      </a>
                    </div>
                    <?php
                  }
                  else{
                    ?>
                    <span class="navbar-item is-paddingless is-guest">
                      or
                    </span>
                    <div class="navbar-item is-paddingless is-guest">
                      <a id="btnhover" style="color: #FFF;text-decoration: none;" href="signuppage.php" class="button thickbox is-text is-nolink is-uppercase">
                        <span class="icon is-small">
                        <i class="far fa-pen-square"></i>
                        </span>
                        <span>Signup</span>
                      </a>
                    </div>
                    <?php
                  }

              ?>
            </div>
          </nav>
        </div>
      </div>
  </section>
  <div class="hero-body">
        <div class="container">
          <div class="columns is-mobile is-multiline">
            <div class="column is-2">
              <figure class="card imageFade image">
                <img src="../assets/img/profile.jpg" alt="Profile Picture" style="min-width: 70px;min-height: 70px;">
              </figure>
            </div>
            <div class="column is-narrow">
              <h1 class="title" id="title"><?php echo $_COOKIE['username']; ?></h1>
              <h2 class="subtitle">
                <span class="has-text-light is-size-6" id="created">
                  Joined on <?php echo $_COOKIE['created']; ?>
                </span>
              </h2>
            </div>
            <div class="column is-12-touch" style="margin-top: auto;">
              <div class="buttons is-right">

              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<div class="tab_header">
  <div class="container">
    <div class="tabs is-boxed">
      <ul>
        <li class="item is-active"><a href="#account">Account</a></li>
        <li class="item"><a href="#history">History</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="tab_container">
  <div class="container_item is-active" data-item="1">
    <article class="message">
      <div class="message-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
  </div>
  <div class="container_item" data-item="2">
    gago
  </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/navbar-burger.js"></script>
<?php include('../includes/footer.php'); ?>
<script>
  <?php 
  if($badge[0] < 1){
      ?>
          $('#badge').removeClass('badge is-badge-warning is-badge-left');
      <?php
  }
   ?>

   $(document).ready(function() {
     $('.tab_header ul li.item').on('click', function() {
         var number = $(this).data('option');
         $('.tab_header ul li.item').removeClass('is-active');
         $(this).addClass('is-active');
         $('#tab_container .container_item').removeClass('is-active');
         $('div[data-item="' + number + '"]').addClass('is-active');
       });
   });

</script>
