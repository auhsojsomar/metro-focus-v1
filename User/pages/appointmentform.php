<?php 
session_start();
if(isset($_COOKIE['email'])){
  include '../includes/db.php';
  $user = $_COOKIE['email'];
  $sql = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
  $num = mysqli_fetch_array($sql);
}
 ?>
<!-- bulma core css -->
		<link rel="icon" href="../../icon.ico">
	    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
	    <!-- font awesome css + icons -->
	    <link rel="stylesheet" href="../fontawesome/css/all.css">
	    <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

	    <link rel="stylesheet" href="../css/appointment.css">
	    <link rel="stylesheet" href="../css/footer.css">
	    <link rel="stylesheet" href="../css/bulma-calendar.min.css">
	    <link rel="stylesheet" href="../css/jquery.datetimepicker.min.css">
	    <link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">

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
	    <section class="hero">
	        <div class="hero-body">
	            <div class="container">
	                <div class="columns is-mobile">
	                    <div class="column">
	                        <h2 class="title header">MetroFocus</h2>
	                        <p class="subtitle">Our service that feels like home.</p>
	                    </div>
	                </div>
	                <div class="title-heading">
	                    <h2 class="text" style="font-size: 1.3rem; color: #2a2a2a!important; ">Request an Appointment</h2>
	                    <!-- <?php echo $message; ?> -->
	                </div>
	                <div class="columns is-mobile form-container is-centered">
	                    <div class="column is-half">
	                        <form onsubmit="return Validate()" method="POST" name="vform" id="vform" enctype="multipart/form-data"">
	                            <div class="field">
	                        		<label class="label">Concern</label>
		                            	<div class="control has-icons-right">
		                                	<input maxlength="200" class="input" id="concern" name="concern" placeholder="e.g. My lens is broken">
		                                    <span class="icon is-small is-right">
		                                        <i id="concernicon" class=""></i>
		                                    </span>
		                                    <p class="help is-danger" id="concernmessage"></p>
		                            	</div>
	                    		</div>
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
	                            <div class="field">
	                        		<label class="label">Remarks</label>
		                            	<div class="control has-icons-right">
		                                	<textarea class="textarea" id="remarks" name="remarks" placeholder=""></textarea>
		                                    <span class="icon is-small is-right">
		                                        <i id="remarksicon" class=""></i>
		                                    </span>
		                                    <p class="help is-danger" id="remarksmessage"></p>
		                            	</div>
	                    		</div>
	                            <hr>
	                            <button class="button is-success" type="submit" name="btnSubmit">Submit</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <?php include '../includes/footer.php'; ?>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../js/navbar-burger.js"></script>
        <script src="../js/moment.js"></script>
        <script src="../js/bulma-calendar.min.js"></script>
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
        	var space = /^[A-z]/;
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
        	var concern = document.forms['vform']['concern'];
        	var concern_err = document.getElementById('concernmessage');
        	var schedule = document.forms['vform']['schedule'];
        	var schedule_err = document.getElementById('schedulemessage');
        	var remarks = document.forms['vform']['remarks'];
        	var remarks_err = document.getElementById('remarksmessage');
        	
        	function concernvalid(){
        		if(concern.value == ""){
                    $('#concern').addClass('is-danger');
                    $('#concernicon').addClass('fas fa-exclamation-triangle');
                    concern_err.textContent = "Enter your concern";
                }
                else if(!space.test(concern.value)){
                	$('#concern').addClass('is-danger');
                    $('#concernicon').addClass('fas fa-exclamation-triangle');
                    concern_err.textContent = "Invalid format";
                }
                else {
                    $('#concern').removeClass('is-danger');
                    $('#concernicon').removeClass('fas fa-exclamation-triangle');
                    concern_err.textContent = "";
                }
        	}
        	function schedulevalid(){
        		if(schedule.value == ""){
                    $('#schedule').addClass('is-danger');
                    $('#scheduleicon').addClass('fas fa-exclamation-triangle');
                    schedule_err.textContent = "Select your schedule";
                }
                else {
                    $('#schedule').removeClass('is-danger');
                    $('#scheduleicon').removeClass('fas fa-exclamation-triangle');
                    schedule_err.textContent = "";
                }
        	}
        	function remarksvalid(){
        		if(remarks.value == ""){
                    $('#remarks').addClass('is-danger');
                    $('#remarksicon').addClass('fas fa-exclamation-triangle');
                    remarks_err.textContent = "What is the problem?";
                }
                else if(!space.test(remarks.value)){
                	$('#remarks').addClass('is-danger');
                    $('#remarksicon').addClass('fas fa-exclamation-triangle');
                    remarks_err.textContent = "Invalid format";
                }
                else {
                    $('#remarks').removeClass('is-danger');
                    $('#remarksicon').removeClass('fas fa-exclamation-triangle');
                    remarks_err.textContent = "";
                }
        	}
        	function ValidateAll(){
        		if((concern.value != "")&&(schedule.value != "")&&(remarks.value != "")&&(space.test(concern.value))&&(space.test(remarks.value))){
        			var asdasd = $('#vform').serialize();
        			$.ajax({
                        data:asdasd,
                        type: "POST",
                        url: "../php/appointment.php",
                        success: function(data){
                            if(data == 'Success'){
                        	    swal({
                        	      title: "Added Successfully",
                        	      text: "",
                        	      icon: "success",
                        	      closeOnClickOutside: false,
                        	    })
                        	    .then((value) => {
                        	    window.location = '../';
                            	});
                            }
                            else{
                            	swal(data,'','error',{
                            		closeOnClickOutside:false,
                            	});
                            }
                        }
                    })
        		}
        	}
        	function Validate(){
        		<?php 
        		if(isset($_COOKIE['username'])){
        			?>
        			concernvalid();
        			schedulevalid();
        			remarksvalid();
        			ValidateAll();
        			<?php
        		}
        		else{
        			?>
        			swal('You need to login first','','warning');
        			<?php
        		}
        		
        		?>
          		return false;
        	}
        	$('#concern').bind('input', function(){
        		concernvalid();
        	});
        	$('#remarks').bind('input', function(){
        		remarksvalid();
        	});
        	$('#concern').blur('input', function(){
        		concernvalid();
        	});
        	$('#schedule').blur('input', function(){
        		schedulevalid();
        	});
        	$('#remarks').blur('input', function(){
        		remarksvalid();
        	});
        </script>