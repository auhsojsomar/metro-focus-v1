<?php 
session_start();
if(isset($_COOKIE['username'])){
	header('Location: ../');
}
?>
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="../css/signuppage.css">
<link rel="stylesheet" href="../css/footer.css">
<title>MetroFocus | Signup</title>

<section class="hero">
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
				    <a style="color: #FF7100;text-decoration: none;" href="loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
				        <span class="icon is-small">
								<i class="fas fa-sign-in-alt"></i>
								</span>
				        <span>Login</span>
				    </a>
				</div>
          </div>
        </nav>
      </div>
    </div>
</section>
<div class="hero">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-mobile">
				<div class="column">
					<h2 class="title header">MetroFocus</h2>
					<p class="subtitle">Our service that feels like home.</p>
				</div>
			</div>
			<div class="title-heading">
				<h2 class="text" style="font-size: 1.3rem; color: #2a2a2a!important; ">Create an account</h2>
			</div>
			<div class="columns form-container is-centered">
				<div class="column is-half">
					<form method="POST" name="signupform" id="signupform" onsubmit="return Validate();">
						<div class="field">
						  <label class="label">First Name</label>
						  <p class="control has-icons-right">
						    <input maxlength="200" class="input" type="text" placeholder="First Name" id="fname" name="fname">
						    <span class="icon is-small is-right">
						      <i id="fnameicon" class=""></i>
						      <p id="fnamemessage" class="help is-danger"></p>
						      <p id="fnamenote" class="note">Your name will be displayed on your profile page.</p>
						    </span>
						  </p>
						</div>
						<div class="field">
						  <label class="label">Last Name</label>
						  <p class="control has-icons-right">
						    <input maxlength="200" class="input" type="text" placeholder="Last Name" id="lname" name="lname">
						    <span class="icon is-small is-right">
						      <i id="lnameicon" class=""></i>
						      <p id="lnamemessage" class="help is-danger"></p>
						    </span>
						  </p>
						</div>
						<div class="field">
						  <label class="label">Email</label>
						  <p class="control has-icons-right">
						    <input maxlength="200" class="input" type="text" placeholder="Email" id="email" name="email">
						    <span class="icon is-small is-right">
						      <i id="emailicon" class=""></i>
						      <p id="emailmessage" class="help is-danger"></p>
						      <p id="emailnote" class="note">We’ll occasionally send updates about your account to this inbox. We’ll never share your email address with anyone.</p>
						    </span>
						  </p>
						</div>
						<div class="field">
						  <label class="label">Password</label>
						  <p class="control has-icons-right">
						    <input maxlength="200" class="input" type="password" placeholder="Password" id="password" name="password">
						    <span class="icon is-small is-right">
						      <i id="passwordicon" class=""></i>
						      <p id="passwordmessage" class="help is-danger"></p>
								<!-- <p id="passwordnote" class="note">Password must be more than 8 characters</p> -->
						    </span>
						  </p>
						</div>
						<div class="field">
						  <label class="label">Confirm Password</label>
						  <p class="control has-icons-right">
						    <input maxlength="200" class="input" type="password" placeholder="Confirm Password" id="cpassword" name="cpassword">
						    <span class="icon is-small is-right">
						      <i id="cpasswordicon" class=""></i>
						      <p id="cpasswordmessage" class="help is-danger"></p>
						    </span>
						  </p>
						</div>
						<hr>
						<p class="note">By clicking “Create an account” below, you agree to our terms of service and privacy statement. We’ll occasionally send you account related emails.</p>
						<hr>
						<button class="button is-success" type="submit" name="btnSubmit" >Create an account</button>
					</form>
				</div>
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
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var namereg = /^ /;
	var namereg2 = / $/;
	var nameregdot = /^\./;
	var fname = document.forms['signupform']['fname'];
	var fname_err = document.getElementById('fnamemessage');
	var lname = document.forms['signupform']['lname'];
	var lname_err = document.getElementById('lnamemessage');
	var email = document.forms['signupform']['email'];
	var email_err = document.getElementById('emailmessage');
	var password = document.forms['signupform']['password'];
	var password_err = document.getElementById('passwordmessage');
	var cpassword = document.forms['signupform']['cpassword'];
	var cpassword_err = document.getElementById('cpasswordmessage');
	var exist = "";
	function fnamevalid(){
		newval = $('#fname').val().replace(/[^A-z\s.]/g,"");
        $('#fname').val(newval);
        if(namereg.test(fname.value) || (nameregdot.test(fname.value))){
        	$('#fnameicon').addClass('fal fa-exclamation-triangle');
			$('#fnamemessage').html('Invalid format');
			$('#fname').addClass('is-danger');
        }
	    else if(fname.value == ""){
			$('#fnameicon').addClass('fal fa-exclamation-triangle');
			$('#fnamemessage').html('Enter your Firstname');
			$('#fname').addClass('is-danger');
		}
		else{
			$('#fnameicon').removeClass('fal fa-exclamation-triangle');
			$('#fnamemessage').html('');
			$('#fname').removeClass('is-danger');
		}
	}
	function lnamevalid(){
		newval = $('#lname').val().replace(/[^A-z.\s]/g,"");
        $('#lname').val(newval);
        if(namereg.test(lname.value) || (nameregdot.test(lname.value))){
        	$('#lnameicon').addClass('fal fa-exclamation-triangle');
			$('#lnamemessage').html('Invalid format');
			$('#lname').addClass('is-danger');
        }
		else if(lname.value == ""){
			$('#lnameicon').addClass('fal fa-exclamation-triangle');
			$('#lnamemessage').html('Enter your Lastname');
			$('#lname').addClass('is-danger');
		}
		else{
			$('#lnameicon').removeClass('fal fa-exclamation-triangle');
			$('#lnamemessage').html('');
			$('#lname').removeClass('is-danger');
		}
	}
	function emailvalid(){
		$.post('../php/email.php', {'email' : email.value}, function(data) {
			exist = data;
    		if (email.value == ''){
		        $('#emailmessage').html('Enter your email');
		        $('#email').addClass('is-danger');
		        $('#emailicon').addClass('fal fa-exclamation-triangle');
	        }
	        else if(data == "Exist"){
	            $('#email').addClass('is-danger');
		        $('#emailicon').addClass('fal fa-exclamation-triangle');
		        $('#emailmessage').html('Email is already used');
	        }
	        else if(regex.test(email.value)){
		        $('#email').removeClass('is-danger');
		        $('#emailicon').removeClass('fal fa-exclamation-triangle');
	            $('#emailmessage').html('');
	        }
	        else {
	            $('#email').addClass('is-danger');
		        $('#emailicon').addClass('fal fa-exclamation-triangle');
		        $('#emailmessage').html('Invalid Email');
	        }
	    });
	}
	function passwordvalid(){
		if (password.value.length == 0){
	    $('#passwordmessage').html('Enter your password');
	    $('#password').addClass('is-danger');
	    $('#passwordicon').addClass('fal fa-exclamation-triangle');
	  }
	  else if(password.value.length < 8){
	    $('#password').addClass('is-danger');
	    $('#passwordicon').addClass('fal fa-exclamation-triangle');
	    $('#passwordmessage').html('Password must be more than 8 characters!');
	  }
	  else {
	    $('#password').removeClass('is-danger');
	    $('#passwordicon').removeClass('fal fa-exclamation-triangle');
	    $('#passwordmessage').html('');
	  }
	}
	function cpasswordvalid(){
		if (cpassword.value.length == 0){
	    $('#cpasswordmessage').html('Enter your password');
	    $('#cpassword').addClass('is-danger');
	    $('#cpasswordicon').addClass('fal fa-exclamation-triangle');
	  }
	  else if(cpassword.value.length < 8){
	    $('#cpassword').addClass('is-danger');
	    $('#cpasswordicon').addClass('fal fa-exclamation-triangle');
	    $('#cpasswordmessage').html('Password must be more than 8 characters!');
	  }
		else if (cpassword.value != password.value){
	    $('#cpasswordmessage').html('Confirm your password');
	    $('#cpassword').addClass('is-danger');
	    $('#cpasswordicon').addClass('fal fa-exclamation-triangle');
	  }
	  else {
	    $('#cpassword').removeClass('is-danger');
	    $('#cpasswordicon').removeClass('fal fa-exclamation-triangle');
	    $('#cpasswordmessage').html('');
	  }
	}
	function validall(){
		if(namereg2.test(fname.value)){
			$('#fnameicon').addClass('fal fa-exclamation-triangle');
			$('#fnamemessage').html('Invalid format');
			$('#fname').addClass('is-danger');
		}
		if(namereg2.test(lname.value)){
			$('#lnameicon').addClass('fal fa-exclamation-triangle');
			$('#lnamemessage').html('Invalid format');
			$('#lname').addClass('is-danger');
		}
		else if((fname.value != "")&&(lname.value != "")&&(email.value != '')&&(regex.test(email.value))&&(password.value.length != 0)&&(password.value.length > 7)&&(cpassword.value.length != 0)&&(cpassword.value == password.value)&&(exist != "Exist")&&(!namereg.test(lname.value))&&(!namereg.test(fname.value))&&(!nameregdot.test(fname.value))&&(!nameregdot.test(lname.value))){
	    	$.ajax({
	    		data:$('#signupform').serialize(),
	    		method:"POST",
	    		url:"../php/signup.php",
	    		success:function(data){
	    			if(data == "Success"){
	    				swal("Signup Successfully","","success")
	    				.then((value) => {
	    					window.location = '../';
	    				});
	    			}
	    		}
	    	});    	    	
	    }
	}
	function Validate(){
		fnamevalid();
		lnamevalid();
		emailvalid();
		passwordvalid();
		cpasswordvalid();
		validall();
		return false;
	}
	$('#fname').bind('input', function(){
		fnamevalid();
	});
	$('#lname').bind('input', function(){
		lnamevalid()
	});
	$('#email').bind('input', function(){
	    emailvalid();
	});
	$('#password').bind('input', function(){
	  passwordvalid();
	});
	$('#cpassword').bind('input', function(){
	  cpasswordvalid();
	});
	$('#fname').blur(function(){
		fnamevalid();
	});
	$('#lname').blur(function(){
		lnamevalid();
	});
	$('#email').blur(function(){
		emailvalid();
	});
	$('#password').blur(function(){
		passwordvalid();
	});
	$('#cpassword').blur(function(){
		cpasswordvalid();
	});
</script>