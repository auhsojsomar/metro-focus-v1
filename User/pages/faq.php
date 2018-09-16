<?php //session_start(); ?>
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">	
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-accordion/dist/css/bulma-accordion.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="../css/faq.css">
<link rel="stylesheet" href="../css/footer.css">
<title>MetroFocus | FAQs</title>
<div class="faq">
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
            <article class="accordion is-active">
            <div class="accordion-header toggle">
              <p>1. Why is my DSLR won’t turn on retain charge?</p>
              <button class="toggle" aria-label="toggle"></button>
            </div>
            <div class="accordion-body">
              <div class="accordion-content">
              The most common reason for your camera not turning on is that your battery is defunct or not in place properly.
              The first thing to do is to charge your battery then to make sure it’s inserted properly into the compartment. You’d be amazed how often we get people coming in with batteries that have just jolted slightly loose.
              Once you’ve secured it in place, check your dials, buttons and memory cards. If they seem to be functioning and in the right spot, go ahead and press the power button. If this doesn’t work, you might need to replace the battery, or it could be something more terminal so go to any camera repairing shop.

              </div>
            </div>
            </article>
            <article class="accordion">
            <div class="accordion-header">
              <p>2. What should I do if I accidentally dropped my camera?</p>
              <button class="toggle" aria-label="toggle"></button>
            </div>
            <div class="accordion-body">
              <div class="accordion-content">
              Firstly, take some deep breaths. There’s nothing you can do about it now. When you’ve stopped shaking from shock, start checking all the parts of your camera. Like the tip above, check the battery compartment, memory card slots, buttons, dials and body.

              If they look in order, go ahead and try the power button. Hopefully it starts without any issues. If nothing happens, you may want to take it into a camera shop so they can take a look inside the camera body.

              </div>
            </div>
            </article>
            <article class="accordion">
            <div class="accordion-header">
              <p>3. My picture quality isn’t great, it looks like it has spots or blobs on it.3</p>
              <button class="toggle" aria-label="toggle"></button>
            </div>
            <div class="accordion-body">
              <div class="accordion-content">
              The last thing you want to do is to take a perfect picture only to find it mired with dark spots or blobby patches. To avoid or remedy this, you need to work out if it’s your lens or your sensor.
              You can test this by taking photos of a plain sheet of A4 paper with each your lenses. Upload them to your computer and if the spots are the same on every photo, it means it’s your sensor.
              If the marks are constricted to one type of lens, try cleaning the lens head the right way, with accessories like air blowers and specialty lens cleaning tissues; cleaning with an inappropriate chemical or scratchy cloth can permanently damage the lens.
              </div>
            </div>
            </article>
            <article class="accordion">
            <div class="accordion-header">
              <p>4. My camera isn’t saving any photos or pictures, why is that?</p>
              <button class="toggle" aria-label="toggle"></button>
            </div>
            <div class="accordion-body">
              <div class="accordion-content">
              Most likely this is an issue with your memory card, which could be full or corrupt or not inserted properly (generally, error messages will appear).
              The best tactic is to insert a different memory card into your camera and to try taking pictures with it. If it works, chances are it’s your existing memory card that’s the problem. Note that some cameras also have a battery saving feature that might restrict photo saving so make sure your camera is charged first.
              If so, look closely for any irregularities on the card. A thumb print on the metal stripes could be the cause, as could a crack or scratch. Clean it and try again. If it’s still not working, it could be that your camera’s firmware or software simply doesn’t recognize it anymore so try inserting it into another card reader.
              Failing this, you should take the memory card to a camera repair shop to try and recover your photos.

              </div>
            </div>
            </article>
            <article class="accordion">
            <div class="accordion-header">
              <p>5. Why is my LCD monitor is no longer working?</p>
              <button class="toggle" aria-label="toggle"></button>
            </div>
            <div class="accordion-body">
              <div class="accordion-content">
              It might sound obvious but many DSLR cameras have the option to turn your monitor on and off so start by checking this is set to ‘on’. Take this time to check your power saving mode options too. This mode can turn your LCD off very quickly and could be the cause.
              Another thing to check is your brightness levels. Sometimes, people inadvertently make it very dim, to the point where it’s near-impossible to tell if your monitor is in fact on or off.
              If all these camera settings are fine, you should try resetting your camera. Most DSLR cameras require you to remove the battery and memory card for 10 minutes before re-inserting them and turning it back on.
              </div>
            </div>
            </article>
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