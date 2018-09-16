<?php 
  //session_start();
  if(!isset($_COOKIE['username'])){
    header('Location: ../index.php');
  }
?>
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/profile.css">
<title>MetroFocus | Profile</title>
<section class="hero is-primary">
  <section class="hero is-dark">
      <div class="hero-head" style="background: #071425;">
        <div class="container">
          <nav class="navbar is-dark">
            <div class="navbar-brand">
              <a href="../index.php" class="navbar-item" style="background: none !important;">
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
                <a href="../index.php" class="navbar-item" style="background: none !important;">Home</a>
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
<section class="tab-container">
  <div class="container">
    <div class="tabs is-toggle">
      <ul>
        <li class="is-active"><a href="" >Account</a></li>
        <li><a href="">Reviews</a></li>
        <li><a href="">History</a></li>
      </ul>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div userowns="true">
      <div class="columns">
        <div class="column is-8 is-9-widescreen">
          <div class="content">
            <h2>About Me</h2>
          </div>
          <div class="columns">
            <div class="column">
              <article class="message">
                <div class="message-body">
                  <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="is-divider-vertical is-hidden-mobile"></div>
        <div class="column">
          <div class="content">
            <h2>History</h2>
          </div>
          <article class="message is-warning">
            <div class="message-body">
              No History
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('../includes/footer.php'); ?>