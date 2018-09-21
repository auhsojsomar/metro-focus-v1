<?php
session_start();
// Set your timezone
date_default_timezone_set('Asia/Manila');
// Get prev & next month
if (isset($_GET['yF'])) {
    $ym = $_GET['yF'];
} else {
    // This month
    $ym = date('Y-F');
}
// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-F');
    $timestamp = strtotime($ym . '-01');
}
// Today
$today = date('Y-F-j', time());
// For H3 title
$html_title = date('Y / F', $timestamp);
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-F', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-F', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));
// Number of days in the month
$day_count = date('t', $timestamp);
 
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);
// Create Calendar!!
$weeks = array();
$week = '';
// Add empty cell
$week .= str_repeat('<td></td>', $str);
for ( $day = 1; $day <= $day_count; $day++, $str++) {
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        // Prepare for new week
        $week = '';
    }
}
?>
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-calendar/dist/css/bulma-calendar.min.css">
<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="../css/calendarevent.css">


<link rel="stylesheet" href="../css/footer.css">

<title>MetroFocus | Appointment</title>

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
<section class="hero" id="calendarContent">
  <div class="hero-body">
      <div class="container">
        <div class="columns is-mobile">
            <div class="column is-half">
                <h1 class="title">Make an Appointment</h1>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus rem mollitia corporis dignissimos, hic maxime dolorem officia aut magni harum reiciendis voluptas non blanditiis quaerat quae aliquam ipsum pariatur nam.
                </p>
            </div>
            <div class="column is-centered">
                <div class="container is-fluid">
                    <a href="appointmentform.php" class="button is-primary">Book now</a>
                </div>
                
            </div>
        </div>
        <div class="container" id="myCalendar">
              <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?yF=<?php echo $next; ?>">&gt;</a></h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sunday</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                    </tr>
                  </thead>
                  <tbody class="table is-bordered">
                    <tr>
                    <?php
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                    ?>
                    </tr>
                  </tbody>
                </table>
              </div>
      </div>
  </div>
</section>
<script src="../js/jquery.min.js"></script>
<script src="../js/navbar-burger.js"></script>
<script src="../node_modules/bulma-extensions/bulma-calendar/dist/js/bulma-calendar.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  var dt = new Date();
  var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
  var datePickers = bulmaCalendar.attach('[type="date"]', {
    overlay: false,
    minDate: '2018-1-31',
    maxDate: '2018-12-31'
  });
  // datePickers now contains an Array of all datePicker instances
  // To use Events API jus add a listener like below:
  // datepickerInstance.on(event, function(datepicker) {});
  });
</script>
