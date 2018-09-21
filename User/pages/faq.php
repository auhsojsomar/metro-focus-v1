<?php session_start();
  include '../includes/db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MetroFocus | FAQs</title>
  <!-- bulma core css -->
  <link rel="icon" href="../../icon.ico">
  <link rel="stylesheet" href="../bulma/css/bulma.min.css"> 
  <link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-accordion/dist/css/bulma-accordion.min.css">

  <!-- font awesome css + icons -->
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

  <link rel="stylesheet" href="../css/faq.css">
  <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
  <div class="faq">
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
                        <a style="color: #FF7100;text-decoration: none;" href="profile.php" class="button thickbox is-text is-nolink is-uppercase">
                          <span class="icon is-small">
                          <i class="fal fa-user"></i>
                          </span>
                          <span style="
                          display: block;
                          max-width: 200px;
                          overflow: hidden;
                            white-space: nowrap;
                              text-overflow: ellipsis;
                          "><?php echo $_COOKIE['username']; ?></span>
                        </a>
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
                      <div class="navbar-item is-paddingless is-guest">
                        <a style="color: #FF7100;text-decoration: none;" href="loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
                          <span class="icon is-small">
                          <i class="fas fa-sign-in-alt"></i>
                          </span>
                          <span>Login</span>
                        </a>
                      </div>
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
    <section class="hero content">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h2 class="title">HAVE SOME TROUBLE?</h2>
          <p class="subtitle">
            Here in MetroFocus we do our best to provide help and necessities of our customers. To help out, we’ve answered some of the most common questions asked by our customers.
          </p>
          <div class="faq-accordion has-text-left">
          <section class="accordions">
            <?php 
            $query = mysqli_query($con,"SELECT * FROM faq WHERE deleted = 0");
            while($row = mysqli_fetch_array($query)){
              ?>
              <artice class="accordion">
                <div class="accordion-header toggle" style="background: #071425;">
                  <p><?php echo $row[1] ?></p>
                  <button class="toggle" aria-label="toggle"></button>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                  <?php echo $row[2] ?>
                  </div>
                </div>
              </artice>
              <?php
            }
             ?>
          </section>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="../node_modules/bulma-extensions/bulma-accordion/dist/js/bulma-accordion.min.js"></script>
  <?php include('../includes/footer.php'); ?>
  <script>
    var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances
  </script>
</body>
</html>