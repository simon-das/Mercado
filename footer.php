<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!--footer-->
	<footer class="bg-dark mt-5">
		<div class="container pt-3">
			<div class="row text-light">
				<div class="col-md-3">
					<h6>Information</h6>
					<ul class="list-unstyled">
						<li><a href="complaintCenter.php">Complain center</a></li>
						<li><a href="contactUs.php">Contact us</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h6>Sell on Mercado</h6>
					<ul class="list-unstyled">
						<li><a href="#signup" data-toggle="modal">Get an account</a></li>
						<li><a href="sellingPolicy.php">Selling policy</a></li>
						<li><a href="termsAndCondition.php">Terms and conditions</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h6>About Us</h6>
					<ul class="list-unstyled">
						<li><a href="aboutUs.php">About Mercado</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h6>Developpers Information</h6>
					<ul class="list-unstyled">
						<li class="text-primary">Simon Das</li>
						<li><a href="mailto:sam1307.sp@gmail.com">sam1307.sp@gmail.com</a></li>
					</ul>
				</div>
				<div class="col text-right">
					Follow us on <a href="#">Facebok</a>
				</div>
			</div>
		</div>
	</footer>

	<div class="container-fluid bg-black">
		<div class="row">
			<div class="col">
				<div class="text-center text-light"> &#169; AUST CSE </div>
			</div>
		</div>
	</div>



<!-- modal for signup -->
<div class="modal" id="signup">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <div><h1>Sign Up</h1></div>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<form>
			  <div class="form-group">
			    <label for="signup_firstName">First Name:</label>
	  	 		<input type="text" id="signup_firstName" required>
			  </div>
			  <div class="form-group">
			    <label for="signup_lastName">Last Name:</label>
	  	 		<input type="text" id="signup_lastName" required>
			  </div>
			  <div class="form-group">
			  	<label for="signup_email">Email Address:</label>
	  	 		<input type="Email" id="signup_email" required>
			  </div>
			  <div class="form-group">
			  	<label for="signup_phone">Phone Number:</label>
	  	 		<input type="Number" id="signup_phone" required>
			  </div>
			  <div class="form-group">
			  	<label for="signup_address">Address:</label>
	  	 		<input type="text" id="signup_address" required>
			  </div>
			  <div class="form-group">
			  	<label for="signup_user">User Name:</label>
	  	 		<input type="text" id="signup_user" required>
			  </div>
			  <div class="form-group">
			  	<label for="signup_pass">Password:</label>
	  	 		<input type="password" id="signup_pass" required>
			  </div>
			</form> 

	      <!-- Modal footer -->
	      <div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Sign-up</button>
	      </div>
	    </div>
	  </div>
	</div>







</body>
</html>