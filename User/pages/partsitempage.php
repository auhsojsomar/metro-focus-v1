<?php 
  if(isset($_GET['item'])){
    if(isset($_COOKIE['email'])){
      include '../includes/db.php';
      $user = $_COOKIE['email'];
      $sql = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
      $num = mysqli_fetch_array($sql);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- bulma core css -->
      <link rel="icon" href="../../icon.ico">
      <link rel="stylesheet" href="../bulma/css/bulma.min.css"> 
      <link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-carousel/dist/css/bulma-carousel.min.css">

      <!-- font awesome css + icons -->
      <link rel="stylesheet" href="../fontawesome/css/all.css">
      <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

      <link rel="stylesheet" href="../css/itempage.css">
      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/jquery.nice-number.css">
      <link rel="stylesheet" href="../css/jquery.datetimepicker.min.css">
      <link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
      <title id="title">MetroFocus | Brand</title>
    </head>
    <body>
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
                              <span id="badge" class="badge is-badge-warning is-badge-left" data-badge="<?php echo $num[0] ?>">
                                  <a id="cart" style="color: #FF7100;text-decoration: none;" href="cart.php" class="button thickbox is-text is-nolink is-uppercase">
                                      <span><i class="fal fa-shopping-cart fa-lg"></i></span>
                                  </a>
                              </span>
                          </div>
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
      <section class="section itemheading">
        <div class="hero-body">
          <div class="container">
            <div class="columns is-mobile">
              <div class="column">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                  <ul>
                    <li><a href="cameraparts.php">Camera Parts</a></li>
                    <li><a href="#" id="brandbread">Brand</a></li>
                    <li class="is-active"><a href="#">Item Name</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="columns is-mobile is-marginless is-paddingless">
              <div class="column is-half">
                <div class="container is-fluid">
                  <div class="box">
                    <figure class="image is-3by2">
                      <div id="image"></div>
                    </figure>
                  </div>
                </div>
              </div>
              <form id="vform2" method="POST" class="control">
              <div class="column">
                <h2 class="title" id="partsname" name="itemname">Item Name</h2>
                <p class="subtitle" id="brandname">Brand Name</p>
                <div class="item-description">
                  <p class="has-text-black-bis" id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod error, quasi incidunt officia voluptatem odit aperiam eveniet ab voluptatibus, dolores facilis! Sunt facilis sed soluta accusantium veniam aliquid rem. </p>
                  <br>
                </div>
                <div class="field">
                  <br>
                      <p class="title has-text-danger" id="price">$99.99</p>
                      <p class="subtitle" id="avail">On stock</p>
                      <div class="nice-number">
                        <?php 
                        include '../includes/db.php';
                        $id = $_GET['item'];
                        $sql = mysqli_query($con,"SELECT * FROM parts WHERE id = $id");
                        $row = mysqli_fetch_array($sql);
                         ?>
                         <style>
                           input{
                             margin-bottom: 10px;
                             margin-top: -15px;
                             border-style: groove;
                             font-size: 20px;
                             /*outline: none;*/
                             padding: 10px;
                             border-radius: 10px;
                             /*box-shadow: 0 2px 5px rgba(0,0,0,.5);*/
                             margin: 0 5px !important;
                           }
                           input[type="number"]:hover,input[type="number"]:focus{
                             background: #FF7100;
                             color: white;
                           }
                           .nice-number button{
                             border: none;
                             outline: none;
                             padding: 0 15px;
                             border-radius: 10px;
                             font-size: 20px;
                             width: 50px;
                             height: 50px;
                           }
                           .nice-number button:hover{
                            background: #FF7100;
                            color: white;
                           }
                         </style>
                        <input readonly id="quantity" name="quantity" type="number" min="1" max="<?php echo $row['quantity'] ?>" value="1" style="width: 4ch;">
                        <!-- <button>+</button> -->
                        <!-- <button>-</button> -->
                      </div>
                      <p class="control">
                        <button id="reserve" class="button reserve" type="button" style="margin-top: 10px;">
                          Reserve
                        </button>
                        <button id="addtocart" class="button cart" type="button" style="margin-top: 10px;">
                          <i class="fal fa-cart-plus"></i>&nbsp;Add to Cart
                        </button>
                        <input type="hidden" id="uid" name="uid">
                        <input type="hidden" name="category" value="Parts">
                      </p>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="modal">
        <div class="modal-background"></div>
          <div class="modal-card">
              <header class="modal-card-head">
                  <p class="modal-card-title">Reservation</p>
                  <button class="delete" aria-label="close"></button>
              </header>
              <section class="modal-card-body">
                  <form method="POST" id="vform" onsubmit="return Validate();">
                  <div class="field">
                      <label class="label">Schedule</label>
                          <div class="control has-icons-right">
                              <input readonly maxlength="200" class="input" type="text" id="schedule" name="schedule">
                              <span class="icon is-small is-right">
                                  <i id="scheduleicon" class=""></i>
                              </span>
                              <p class="help is-danger" id="schedulemessage"></p>
                          </div>
                  </div>
              </section>
              <footer class="modal-card-foot">
                  <button class="button is-success" type="submit">Save</button>
                  <button class="button" id="modal-close" type="button">Cancel</button>
              </footer>
              </form>
          </div>
      </div>
      <script src="../js/jquery.min.js"></script>
      <script src="../js/sweetalert.min.js"></script>
      <script src="../js/navbar-burger.js"></script>
      <script src="../js/jquery.nice-number.js"></script>
      <script src="../js/jquery.datetimepicker.full.min.js"></script>
      <script>
        <?php 
        if(isset($_COOKIE['email'])){
          if($num[0] < 1){
              ?>
                  $('#badge').removeClass('badge is-badge-warning is-badge-left');
              <?php
          }
        }
        ?>
        $('#reserve').click(function(){
          $('.modal').addClass('is-active');
        });
        $('#modal-close').click(function(){
          $('.modal').removeClass('is-active');
        });
        $('.delete').click(function(){
          $('.modal').removeClass('is-active');
        });
        $('input[type="number"]').niceNumber({
          // auto resize the number input
          autoSize: false,

          // the number of extra character
          autoSizeBuffer: 2,

          // custom button text
          buttonDecrement: '-',
          buttonIncrement: "+",

          // 'around', 'left', or 'right'
          buttonPosition: 'around'
        });
        $('#addtocart').click(function(){
          <?php 
          if(isset($_COOKIE['username'])){
            ?>
            var fr = $('#vform2').serialize();
            $.ajax({
              url:'../php/cart.php',
              method:'POST',
              data:fr,
              success:function(data)
              {
                swal('Added to cart','','success',{
                  closeOnClickOutside:false,
                })
                .then((value) => {
                  window.location = 'cameraparts.php';
                });
              }
            });
            <?php
          }
          else{
            ?>
            swal('You need to login first','','warning',{
              closeOnClickOutside:false,
            });
            <?php
          }
           ?>
          return false;
        });
        $('#schedule').datetimepicker({
          defaultDate:'+1970/01/02',
          minDate:'+1970/01/02',
          minTime:'8:00',
          maxDate:new Date().setMonth(new Date().getMonth() + 1),
          maxTime:'20:00',
          step:30,
          format:'m/d/Y H:i',
          defaultTime:'8:00',
        });
        function schedulevalid(){
          if($('#schedule').val() == ""){
              $('#schedule').addClass('is-danger');
              $('#scheduleicon').addClass('fas fa-exclamation-triangle');
              $('#schedulemessage').html("Select your schedule");
          }
          else {
              $('#schedule').removeClass('is-danger');
              $('#scheduleicon').removeClass('fas fa-exclamation-triangle');
              $('#schedulemessage').html("");
          }
        }
        function clear(){
          $('#schedule').val('');
          $('#schedule').removeClass('is-danger');
          $('#scheduleicon').removeClass('fas fa-exclamation-triangle');
          $('#schedulemessage').html("");
        }
        function valid(){
          if($('#schedule').val() != ""){
            var f = $('#vform2').serializeArray();
            var d = $('#schedule').val();
            f.push({name: 'rdate', value: d});
            $.ajax({
              url:'../php/reservation.php',
              method:'POST',
              data: f,
              success:function(data){
                $('.modal').removeClass('is-active');
                swal('Success, Wait for the confirmation','','success',{
                  closeOnClickOutside:false,
                })
                .then((value) => {
                  window.location = 'cameraparts.php';
                });
              }
            })
          }
        }
        function Validate(){
          schedulevalid();
          valid();
          return false;
        }
        <?php 
        if(isset($_GET['item'])){
          ?>
          $('#uid').val('<?php echo $row[0] ?>');
          $('#partsname').html('<?php echo $row[2] ?>');
          $('#brandname').html('<?php echo $row[3] ?>');
          $('#title').html("MetroFocus | "+'<?php echo $row[3] ?>');
          $('#brandbread').html('<?php echo $row[3] ?>');
          $('#description').html('<?php echo $row[7] ?>');
          $('#price').html("&#8369;"+'<?php echo number_format($row[5],2,'.',',') ?>');
          $('#image').append('<img src="../../Admin/php/parts/upload/'+'<?php echo $row[1] ?>'+'" alt="image">');
          <?php
          $num = $row[6];
          if($num < 1){
            ?>
            $('#avail').html('Out of stock');
            $('#avail').addClass('has-text-danger');
            $('#reserve').prop('disabled', true);
            $('#addtocart').prop('disabled', true);
            <?php
          }
          else{
            ?>
            $('#avail').html('Available');
            $('#avail').addClass('has-text-success');
            $('#reserve').prop('disabled', false);
            $('#addtocart').prop('disabled', false);
            <?php
          }
           ?>
          <?php
        }
        else{
          header('Location: cameraparts.php');
        }
        ?>
      </script>
    </body>
    </html>
    <?php
  }
  else{
    header('Location: cameraparts.php');
  }

?>