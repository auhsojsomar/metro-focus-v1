<?php 
//session_start();
if(isset($_GET['item'])){
  ?>
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

  <title id="title">MetroFocus | Brand</title>
  <div class="">
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
            <form id="vform" method="POST" class="control" onsubmit="return Validate();">
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
                         input:hover,input:focus{
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
                      <button id="reserve" class="button reserve" type="submit" style="margin-top: 10px;">
                        reserve
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
    <!-- <section class="section contentWrapper">
      <div class="tabs is-centered main-menu" id="tabNav">
        <ul>
          <li class="is-active" data-target="pane-1" id="1">
            <a>
              <span class="icon is-small"><i class="fas fa-check" aria-hidden="true"></i></span>
              <span>Description</span>
            </a>
          </li>
          <li data-target="pane-2" id="2">
            <a>
              <span class="icon is-small"><i class="fas fa-sticky-note" aria-hidden="true"></i></span>
              <span>Tech Specs</span>
            </a>
          </li>
          <li data-target="pane-3" id="3">
            <a>
              <span class="icon is-small"><i class="fas fa-comments" aria-hidden="true"></i></span>
              <span>Reviews</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- tabs end 
      <div class="tab-content">
        <div class="tab-pane" id="pane-1">
          <div class="columns">
            <div class="column is-two-fifths">
              <figure>
                <img src="../includes/CANON.jpg" alt="Image" class="image">
              </figure>
            </div>
            <div class="column">
              <div class="container is-fluid" id="descriptions">
                <h2 class="title">Some text here</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta natus non temporibus quibusdam, vero expedita quae consequuntur, voluptate, ratione assumenda et. Facere sunt quaerat non similique nobis vitae ullam fugiat!</p>
              </div>
            </div>
          </div>
          <div class="columns reverse-in-mobile">
          <div class="column is-two-fifths">
              <figure>
                <img src="../includes/CANON.jpg" alt="Image" class="image">
              </figure>
            </div>
            <div class="column">
              <div class="container is-fluid" id="descriptions">
                <h2 class="title">Some text here</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta natus non temporibus quibusdam, vero expedita quae consequuntur, voluptate, ratione assumenda et. Facere sunt quaerat non similique nobis vitae ullam fugiat!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- pane-1 end 

        <!-- UNCOMMENT THIS SHIT AND SEE THE PROBLEM 

        <div class="tab-pane" id="pane-2">
          <h2 class="heading">
            Tech Specs
          </h2>
          <div class="container table-wrapper" >
            <table class="table">
              <tbody>
                <tr>
                  <th>Name</th>
                  <td>camera name</td>
                </tr>
                <tr>
                  <th>Brand</th>
                  <td>camera brand</td>
                </tr>
                <tr>
                  <th>Dimensions</th>
                  <td>11.60 x 8.54 x 0.20 in (295 x 217 x 5 mm)</td>
                </tr>
                <tr>
                  <th>Weight</th>
                  <td>0.68 lbs (310 g)</td>
                </tr>
                <tr>
                  <th>Features</th>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, omnis eligendi laborum architecto</td>
                </tr>
                <tr>
                  <th>Warranty</th>
                  <td>1-year limited hardware warranty</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
       
        <div class="tab-pane" id="pane-3">
          <div class="rating-and-reviews">
            <div class="columns is-mobile">
              <div class="column is-two-fifths">
                <div class="container">
                  <h2 class="heading">Ratings and Reviews</h2>
                  <div class="histogram">
                    <div class="container is-fluid">
                      <span class="rating" aria-hidden="true">5.0</span>
                      <div class="rating-stars">
                        <!-- //stars rating - dito mag gegenerate ng star base sa reviews
                        //yun lang hindi ko alam papaano code nun hahaha xD 
                        <span class="icon is-small">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </span>
                      </div>
                    </div>
                    <span class="has-text-grey">To rate and review, please sign in.</span>
                    <div class="field">
                      <p class="control">
                        <a href="loginpage.php">
                          <button class="button is-grey" name="btnLogin">Sign in</button>
                        </a>
                      </p>
                    </div>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns is-mobile">
              <div class="column">
                <div class="container">
                  <p class="subtitle">All user reviews</p>
                  <div class="field" style="float: left !important;">
                    <div class="control">
                      <p class="subtitle">Filter by</p>
                      <div class="select is-small">
                        <select>
                          <option>All ratings</option>
                          <option>5 stars</option>
                          <option>4 stars</option>
                          <option>3 stars</option>
                          <option>2 stars</option>
                          <option>1 stars</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="field" style="float: right !important;">
                    <div class="control">
                      <p class="subtitle">Sort by</p>
                      <div class="select is-small">
                        <select>
                          <option>Most helpful</option>
                          <option>Most recent</option>
                          <option>Highest rated</option>
                          <option>Lowest rated</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- pane-3 end 
      </div>
        <!-- tab-content end 
    </section> -->
  </div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/sweetalert.min.js"></script>
  <script src="../js/navbar-burger.js"></script>
  <script src="../js/jquery.nice-number.js"></script>
  <?php include('../includes/footer.php'); ?>
  <script>
    $(function(){

      $('input[type="number"]').niceNumber({
        // auto resize the number input
          autoSize: true,

          // the number of extra character
          autoSizeBuffer: 2,

          // custom button text
          buttonDecrement: '-',
          buttonIncrement: "+",

          // 'around', 'left', or 'right'
          buttonPosition: 'around'
      });

    });
    $(document).ready(function(){
      <?php 
      if(isset($_GET['item'])){
        ?>
        $('#uid').val('<?php echo $row[0] ?>');
        $('#partsname').html('<?php echo $row[2] ?>');
        $('#brandname').html('<?php echo $row[3] ?>');
        $('#title').html("MetroFocus | "+'<?php echo $row[3] ?>');
        $('#brandbread').html('<?php echo $row[3] ?>');
        $('#description').html('<?php echo $row[7] ?>');
        $('#price').html("&#8369;"+'<?php echo $row[5] ?>');
        $('#image').append('<img src="../../Admin/php/parts/upload/'+'<?php echo $row[1] ?>'+'" alt="image">');
        <?php
        $num = $row[6];
        if($num == 0){
          ?>
          $('#avail').html('Out of stock');
          $('#avail').addClass('has-text-danger');
          $('#reserve').prop('disabled', true);
          <?php
        }
        else{
          ?>
          $('#avail').html('Available');
          $('#avail').addClass('has-text-success');
          $('#reserve').prop('disabled', false);
          <?php
        }
         ?>
        <?php
      }
      else{
        header('Location: cameraparts.php');
      }

       ?>
    });
    function Validate(){
      <?php 
      if(isset($_COOKIE['username'])){
        ?>
        var fr = $('#vform').serialize();
        $.ajax({
          url:'../php/reservation.php',
          method:'POST',
          data:fr,
          success:function(data)
          {
            swal('Success, Wait for the confirmation','','success',{
              closeOnClickOutside:false,
            })
            .then((value) => {
              window.location = '../index.php';
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
    }
    document.querySelectorAll("#tabNav li").forEach(function(navEl) {
    navEl.onclick = function() { toggleTab(this.id, this.dataset.target); }
  });

  function toggleTab(selectedNav, targetId) {
    var navEls = document.querySelectorAll("#tabNav li");

    navEls.forEach(function(navEl) {
      if (navEl.id == selectedNav) {
        navEl.classList.add("is-active");
      } else {
        if (navEl.classList.contains("is-active")) {
          navEl.classList.remove("is-active");
        }
      }
    });

    var tabs = document.querySelectorAll(".tab-pane");

    tabs.forEach(function(tab) {
      if (tab.id == targetId) {
        tab.style.display = "block";
      } else {
        tab.style.display = "none";
      }
    });
  }
  </script>
  <?php
}
else{
  header('Location: cameraparts.php');
}
?>

