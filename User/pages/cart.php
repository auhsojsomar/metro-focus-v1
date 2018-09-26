<?php session_start();
if(isset($_COOKIE['username'])){
include '../includes/db.php';
$email = $_COOKIE['email'];
$sql = mysqli_query($con,"SELECT user,parts.name,parts.price,cart.quantity,parts.quantity,cart.id,image,brand,item_id FROM cart,parts WHERE item_id = parts.id AND type = 'Parts' AND user = '$email' ORDER BY cart.id DESC");
$sql2 = mysqli_query($con,"SELECT user,accessories.name,accessories.price,cart.quantity,accessories.quantity,cart.id,image,brand,item_id FROM cart,accessories WHERE item_id = accessories.id AND type = 'Accessories' AND user = '$email' ORDER BY cart.id DESC");
$total = 0;
$sql3 = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$email'");
$badge = mysqli_fetch_array($sql3);
$sql4 = mysqli_query($con,"SELECT * FROM cart WHERE user = '$email'");
$number = mysqli_num_rows($sql4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MetroFocus | Cart</title>
	<!-- bulma core css -->
	<link rel="icon" href="../../icon.ico">
	<link rel="stylesheet" href="../bulma/css/bulma.min.css">
	<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-accordion/dist/css/bulma-accordion.min.css">
	<!-- font awesome css + icons -->
	<link rel="stylesheet" href="../fontawesome/css/all.css">
	<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="../css/faq.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/jquery.nice-number.css">
	<link rel="stylesheet" href="../css/cart.css">
	<link rel="stylesheet" href="../css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
</head>
<style>
	@media screen and (min-width: 570px) {
		
	}
</style>
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
								<a href="cameraparts.php" class="navbar-item" style="background: none !important;">Camera
									Parts</a>
							</div>
							<div class="navbar-item">
								<a href="cameraaccessories.php" class="navbar-item" style="background: none !important;">Accessories</a>
							</div>
						</div>
						<style>
							#btnhover:hover {
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
					">
									<?php echo $_COOKIE['username']; ?></span>
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
			<div class="container">
				<h2 style="margin-bottom: 30px;"><i class="far fa-shopping-cart"></i> Cart</h2>
				<form method="POST" id="fer">
					<?php 
					for ($i=0; $i <= $number; $i++) { 
					while($row = mysqli_fetch_array($sql)){
						$total += $row[2]*$row[3];
						?>
						<table id="ref" style="background-color: #071425;color:whitesmoke;font-size: 20px;border-radius: 10px">
							<tr>
								<td style="width: 1%"><img style="border-radius: 10px;min-width: 128px;" class="image is-128x128" src="../../Admin/php/parts/upload/<?php echo $row[6] ?>" alt="Pictures"></td>
								<td style="
										text-align: left;
										width: 50%;
										max-width: 50px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
								"><?php echo $row[1] ?><br><span style="font-size: 17px"><?php echo $row[7] ?></span></td>
								<td style="width: 10%"><?php echo number_format($row[2],2,'.',',') ?></td>
								<td id="price" style="width: 10%;"><?php echo number_format($row[2]*$row[3],2,'.',',') ?></td>
								<td style="float: right;">
									<input readonly id="<?php echo $row[5] ?>" name="qquantity[]" type="number" min="1" max="<?php echo $row[4] ?>" value="<?php echo $row[3] ?>">
									<button id="<?php echo $row[5] ?>" class="button is-danger is-small"style="margin-top: 4px;"name="delete" id="delete" type="button"><i class="fal fa-trash"></i></button>
								</td>
							</tr>
						</table>
						<input type="hidden" name="item_id[]" value="<?php echo $row[8] ?>">
						<input type="hidden" name="categ[]" value="Parts">
						<?php
					}
					?>
				<!-- <h2 style="margin-bottom: 30px;">Accessories</h2> -->
					<?php 
					while($row = mysqli_fetch_array($sql2)){
						$total += $row[2]*$row[3];
						?>
						<table id="ref" style="background-color: #071425;color:whitesmoke;font-size: 20px;border-radius: 10px">
							<tr>
								<td style="width: 1%"><img style="border-radius: 10px;min-width: 128px;" class="image is-128x128" src="../../Admin/php/accessories/upload/<?php echo $row[6] ?>" alt="Pictures"></td>
								<td style="
										text-align: left;
										width: 50%;
										max-width: 50px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
								"><?php echo $row[1] ?><br><span style="font-size: 17px"><?php echo $row[7] ?></span></td>
								<td style="width: 10%"><?php echo number_format($row[2],2,'.',',') ?></td>
								<td id="price" style="width: 10%;"><?php echo number_format($row[2]*$row[3],2,'.',',') ?></td>
								<td style="float: right;">
									<input readonly id="<?php echo $row[5] ?>" name="qquantity[]" type="number" min="1" max="<?php echo $row[4] ?>" value="<?php echo $row[3] ?>">
									<button id="<?php echo $row[5] ?>" class="button is-danger is-small"style="margin-top: 4px;"name="delete" id="delete" type="button"><i class="fal fa-trash"></i></button>
								</td>
							</tr>
						</table>
						<input type="hidden" name="item_id[]" value="<?php echo $row[8] ?>">
						<input type="hidden" name="categ[]" value="Accessories">
						<?php
					}
					}
					?>
				<button disabled class="button reserve" type="button" id="showReserveModal">Reserve</button>
				<span id="sub">Sub Total: <span><?php echo number_format($total,2,'.',',') ?></span></span>
				<input type="hidden" name="cart_count" value="<?php echo $number ?>">
				</form>
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
	<script src="../node_modules/bulma-extensions/bulma-accordion/dist/js/bulma-accordion.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/navbar-burger.js"></script>
	<script src="../js/jquery.nice-number.js"></script>
	<script src="../js/sweetalert.min.js"></script>
	<script src="../js/jquery.datetimepicker.full.min.js"></script>
	<?php include('../includes/footer.php'); ?>
	<script>
		<?php 
		if($badge[0] < 1){
			?>
				$('#badge').removeClass('badge is-badge-warning is-badge-left');
			<?php
		}
		 ?>
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
		$('button[name="delete"]').click(function() {
		   var id = $(this).attr('id');
		   $.ajax({
			url:'../php/cartdelete.php',
			method:'POST',
			data:{uid:id},
			success:function(val){
			   location.reload();
			}
		   });
		});
		$('.nice-number').find('button[type="button"]').click(function(){
			var id = $(this).siblings('input').attr('id');
			var quantity = $(this).siblings('input[type="number"]').val();
			$.ajax({
			url:'../php/cartquantity.php',
			method:'POST',
			data:{uid:id,quan:quantity},
			success:function(val){
				location.reload();
			}
		   });
		});
		var total = <?php echo $total ?>;
		if(total < 1){
			$('.button.reserve').prop('disabled',true);
		}
		else {
			$('.button.reserve').prop('disabled',false);
			
		}
		// $('.button.reserve').click(function(){
		//      var vform = $('#fer').serialize();
		//      $.ajax({
		//         url:'../php/cartadd.php',
		//         method:'POST',
		//         data:vform,
		//         success:function(data){
		//             swal('Wait for the confirmation','','success',{
		//                 closeOnClickOutside:false,
		//             })
		//             .then((value) => {
		//                 window.location = '../';
		//             });
		//         }
		//      });
		// });

		$('#showReserveModal').click(function(){
			$('.modal').addClass('is-active');
		});
		$('#modal-close').click(function(){
			$('.modal').removeClass('is-active');
		});
		$('.delete').click(function(){
			$('.modal').removeClass('is-active');
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
		    var vform = $('#fer').serializeArray();
		    var d = $('#schedule').val();
		    vform.push({name: 'rdate', value: d});
			    $.ajax({
				    url:'../php/cartadd.php',
				    method:'POST',
				    data:vform,
				    success:function(data){
					    swal('Wait for the confirmation','','success',{
					    closeOnClickOutside:false,
			    	})
				    .then((value) => {
				        window.location = '../';
				    });
			    	}
			    });
		  	}
		}
		function Validate(){
		  schedulevalid();
		  valid();
		  return false;
		}
	</script>
</body>
</html>
<?php
}
else{
	header('Location: ../');
}
