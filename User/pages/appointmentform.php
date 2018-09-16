<?php //session_start(); ?>
<!-- bulma core css -->
		<link rel="icon" href="../../icon.ico">
	    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
	    <!-- font awesome css + icons -->
	    <link rel="stylesheet" href="../fontawesome/css/all.css">
	    <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

	    <link rel="stylesheet" href="../css/appointment.css">
	    <link rel="stylesheet" href="../css/footer.css">
	    <link rel="stylesheet" href="../css/bulma-calendar.min.css">

	    <title>MetroFocus | Appointment</title>
		
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
	                <div class="columns form-container is-centered">
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
	                            <!-- <div class="field">
	                                <p class="control">
	                                    <label for="label_lName">Choose date</label>
	                                    <input id="datepickerDemo" class="input" type="date" name="datepickerDemo">
	                                </p>
	                            </div> -->
	                            <div class="field">
	                        		<label class="label">Choose date</label>
		                            	<div class="control has-icons-right">
		                                	<input type="date" class="input" id="datestart" name="datestart" placeholder="Product Name" onchange="handler(event);">
		                                    <span class="icon is-small is-right">
		                                        <i id="dateicon" class=""></i>
		                                    </span>
		                                    <p class="help is-danger" id="datemessage"></p>
		                            	</div>
	                    		</div>
	                            <div class="field">
	                                <p class="control">
	                                    <label class="label">Choose time</label>
	                                    <div class="select" id="timedanger">
	                                    	<select name="timestart" id="timestart">
	                                    		<option selected="true" disabled="disabled">Select Time</option>
								        		<?php
								        			$awe = $_POST['datestart']; 
				        				        	include '../includes/db.php';
				        				        	$query = mysqli_query($con,'SELECT timestart FROM appointment WHERE datestart = "$awe"');
				        				        	$val = array("8:00AM - 9:00AM","9:00AM - 10:00AM","10:00AM - 11:00AM","11:00AM - 12:00PM","12:00PM - 1:00PM","1:00PM - 2:00PM","2:00PM - 3:00PM","3:00PM - 4:00PM","4:00PM - 5:00PM","5:00PM - 6:00PM","6:00PM - 7:00PM","7:00PM - 8:00PM");
				        				        	$arr = array();
				        				        	while($row = mysqli_fetch_array($query)){
				        				        		$arr[] = $row[0];
				        				        	}
				        				        	foreach ($val as $result) {
				        				        		if(!in_array($result, $arr))
				        				    		    {
				        				    		        ?>
				        				    		        <option value="<?php echo $result; ?>"><?php echo $result; ?></option>
				        				    		        <?php
				        				    		    }
				        				        	}
								                ?>
	                                    		<!-- <option value="8:00AM - 9:00AM">8:00AM - 9:00AM</option>
	                                    		<option value="9:00AM - 10:00AM">9:00AM - 10:00AM</option>
	                                    		<option value="10:00AM - 11:00AM">10:00AM - 11:00AM</option>
	                                    		<option value="11:00AM - 12:00PM">11:00AM - 12:00PM</option>
	                                    		<option value="12:00PM - 1:00PM">12:00PM - 1:00PM</option>
	                                    		<option value="1:00PM - 2:00PM">1:00PM - 2:00PM</option>
	                                    		<option value="2:00PM - 3:00PM">2:00PM - 3:00PM</option>
	                                    		<option value="3:00PM - 4:00PM">3:00PM - 4:00PM</option>
	                                    		<option value="4:00PM - 5:00PM">4:00PM - 5:00PM</option>
	                                    		<option value="5:00PM - 6:00PM">5:00PM - 6:00PM</option>
	                                    		<option value="6:00PM - 7:00PM">6:00PM - 7:00PM</option>
	                                    		<option value="7:00PM - 8:00PM">7:00PM - 8:00PM</option> -->
	                                    	</select>
	                                    </div>
	                                    <p class="help is-danger" id="timemessage"></p>
	                                </p>
	                            </div>
	                            <div class="field">
	                        		<label class="label">Contact Number</label>
		                            	<div class="control has-icons-right">
		                                	<input maxlength="11" class="input" id="cnumber" name="cnumber" placeholder="e.g. 09487564183">
		                                    <span class="icon is-small is-right">
		                                        <i id="cnumbericon" class=""></i>
		                                    </span>
		                                    <p class="help is-danger" id="cnumbermessage"></p>
		                                    <p class="note">We’ll occasionally send updates about your schedule to this number.</p>
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

	    <?php include('../includes/footer.php'); ?>
	        <script src="../js/jquery.min.js"></script>
	        <script src="../js/sweetalert.min.js"></script>
	        <script src="../js/navbar-burger.js"></script>
	        <script src="../js/moment.js"></script>
	        <script src="../js/bulma-calendar.min.js"></script>
	        <script>
	        	var concern = document.forms['vform']['concern'];
	        	var concern_err = document.getElementById('concernmessage');
	        	var datestart = document.forms['vform']['datestart'];
	        	var datestart_err = document.getElementById('datemessage');
	        	var timestart = document.forms['vform']['timestart'];
	        	var time_err = document.getElementById('timemessage');
	        	var cnumber = document.forms['vform']['cnumber'];
	        	var cnumber_err = document.getElementById('cnumbermessage');
	        	var remarks = document.forms['vform']['remarks'];
	        	var remarks_err = document.getElementById('remarksmessage');
	        	
	        	function concernvalid(){
	        		if(concern.value == ""){
	                    $('#concern').addClass('is-danger');
	                    $('#concernicon').addClass('fas fa-exclamation-triangle');
	                    concern_err.textContent = "Enter your concern";
	                }
	                else {
	                    $('#concern').removeClass('is-danger');
	                    $('#concernicon').removeClass('fas fa-exclamation-triangle');
	                    concern_err.textContent = "";
	                }
	        	}
	        	function datestartvalid(){
	        		if(datestart.value == ""){
	                    $('#datestart').addClass('is-danger');
	                    $('#dateicon').addClass('fas fa-exclamation-triangle');
	                    datestart_err.textContent = "Select the date of appointment";
	                }
	                else {
	                    $('#datestart').removeClass('is-danger');
	                    $('#dateicon').removeClass('fas fa-exclamation-triangle');
	                    datestart_err.textContent = "";
	                }
	        	}
	        	function timevalid(){
	        		if(timestart.value == "Select Time"){
	                    $('#timedanger').addClass('is-danger');
	                    time_err.textContent = "Select the time of appointment";
	                }
	                else {
	                    $('#timedanger').removeClass('is-danger');
	                    time_err.textContent = "";
	                }
	        	}
	        	function cnumbervalid(){
	        		if(cnumber.value == ""){
	                    $('#cnumber').addClass('is-danger');
	                    $('#cnumbericon').addClass('fas fa-exclamation-triangle');
	                    cnumber_err.textContent = "Enter your contact number";
	                }
	                else {
	                    $('#cnumber').removeClass('is-danger');
	                    $('#cnumbericon').removeClass('fas fa-exclamation-triangle');
	                    cnumber_err.textContent = "";
	                }
	        	}
	        	function remarksvalid(){
	        		if(remarks.value == ""){
	                    $('#remarks').addClass('is-danger');
	                    $('#remarksicon').addClass('fas fa-exclamation-triangle');
	                    remarks_err.textContent = "What is the problem?";
	                }
	                else {
	                    $('#remarks').removeClass('is-danger');
	                    $('#remarksicon').removeClass('fas fa-exclamation-triangle');
	                    remarks_err.textContent = "";
	                }
	        	}
	        	function ValidateAll(){
	        		if((concern.value != "")&&(datestart.value != "")&&(timestart.value != "Select Time")&&(cnumber.value != "")&&(remarks.value != "")){
	        			var asdasd = $('#vform').serialize();
	        			$.ajax({
	                        data:asdasd,
	                        type: "POST",
	                        url: "../php/appointment.php",
	                        success: function(data){
	                            swal({
	                              title: "Added Successfully",
	                              text: "",
	                              icon: "success",
	                              closeOnClickOutside: false,
	                            })
	                            .then((value) => {
	                            window.location = '../index.php';
	                        });
	                        }
	                    })
	        		}
	        	}
	        	function Validate(){
	        		<?php 
	        		if(isset($_COOKIE['username'])){
	        			?>
	        			concernvalid();
	        			datestartvalid();
	        			timevalid();
	        			cnumbervalid();
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
	        	$('#datestart').bind('input', function(){
	        		datestartvalid();
	        	});
	        	$('#timestart').bind('input', function(){
	        		timevalid();
	        	});
	        	$('#cnumber').bind('input', function(){
	        		cnumbervalid();
	        	});
	        	$('#remarks').bind('input', function(){
	        		remarksvalid();
	        	});
	        	$('#concern').blur('input', function(){
	        		concernvalid();
	        	});
	        	$('#datestart').blur('input', function(){
	        		datestartvalid();
	        	});
	        	$('#timestart').blur('input', function(){
	        		timevalid();
	        	});
	        	$('#cnumber').blur('input', function(){
	        		cnumbervalid();
	        	});
	        	$('#remarks').blur('input', function(){
	        		remarksvalid();
	        	});
	            $('#cnumber').bind('input', function() {
	                newval = $('#cnumber').val().replace(/[^0-9.]/g, "");
	                $('#cnumber').val(newval);
	            });
	            function handler(e){
	              alert(e.target.value);
	            }
	            document.addEventListener('DOMContentLoaded', function() {
	                var dt = new Date();
	                dt.setMonth(dt.getMonth() + 2);
	                var month = dt.getFullYear() + "-" + dt.getMonth() + "-" + dt.getDate();
	                var datePickers = bulmaCalendar.attach('[type="date"]', {
	                    overlay: false,
	                    minDate: Date(),
	                    maxDate: month
	                });
	                // datePickers now contains an Array of all datePicker instances
	                // To use Events API jus add a listener like below:
	                // datepickerInstance.on(event, function(datepicker) {});
	            });
	        </script>