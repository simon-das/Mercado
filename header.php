<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<!--store name-->
		<a href="#" class="navbar-brand ml-3 text-primary"><strong><em>Mercado</em></strong></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      	<!--links and sign-in and log-in-->
      	<div class="collapse navbar-collapse" id="menu">
      		<!--links-->
      		<ul class="navbar-nav mx-auto">
      			<li class="nav-item active">
      				<a href="index.php" class="nav-link">HOME</a>
      			</li>
      			<li class="nav-item active">
      				<a href="seeAllPC.php" class="nav-link">PC/LAPTOP</a>
      			</li>
      			<li class="nav-item active">
      				<a href="seeAllMobile.php" class="nav-link">MOBILE/CAMERA</a>
      			</li>
      			<li class="nav-item active">
      				<a href="seeAllTV.php" class="nav-link">TV/DSLR</a>
      			</li>
      			<li class="nav-item active">
      				<a href="seeAllSunglass.php" class="nav-link">WATCH/SUNGLASS</a>
      			</li>
      			<li class="nav-item active">
      				<a href="seeAllClothes.php" class="nav-link">CLOTH</a>
      			</li>
      		</ul>
      		<!--log-in-->
      		<ul class="navbar-nav mx-auto">
      			<li class="nav-item dropdown">
      				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="login_dropdown" 
      				aria-haspopup="true">
      					Log in
      				</a>
      				<div class="dropdown-menu bg-secondary border-dark" arialabelledby="login_dropdown">
      					<a href="#login_seller" class="dropdown-item border text-light" data-toggle="modal">
      						Supplier
      					</a>
      					<a href="#login_admin" class="dropdown-item border text-light" data-toggle="modal">
      						Admin
      					</a>
      				</div>
  				</li>
      		</ul>
      		<!--search bar-->
      		<form class="form-inline" method="POST" action="searchResult.php">
      			<input type="text" class="form-control mr-1" name="search" placeholder="Search here" >
      			<button class="btn btn-success" type="submit">SEARCH</button>
      		</form>
      	</div>
	</nav>




	<!-- Modals for login-->
	<!-- for supplier -->
	<div class="modal" id="login_seller">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Login as a supplier</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	       		<form action="afterLoginSupplierChecking.php" method="POST">
				  <div class="form-group">
				    <label for="username_seller">User name:</label>
				    <input type="text" class="form-control" id="username_seller" name="username_seller" required>
				  </div>
				  <div class="form-group">
				    <label for="password_seller">Password:</label>
				    <input type="password" class="form-control" id="password_seller" name="password_seller" required>
				  </div>
				  <button type="submit" class="btn btn-primary float-right">login</button>
				</form>
	       	</div> 

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <a href="#signup" data-toggle="modal" data-dismiss="modal">Create an account</a>
	      </div>

	    </div>
	  </div>
	</div>

	<!-- for admin -->
	<div class="modal" id="login_admin">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Login as admin</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	       		<form action="afterLoginAdminChecking.php" method="POST">
				  <div class="form-group">
				    <label for="user_admin">User name:</label>
				    <input type="text" class="form-control" id="user_admin" name="user_admin" required>
				  </div>
				  <div class="form-group">
				    <label for="password_admin">Password:</label>
				    <input type="password" class="form-control" id="password_admin" name="password_admin" required>
				  </div>
	       	</div>
			   

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">login</button>
			</form>
	      </div>
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
	       	<div class="modal-body">
	       		<form method="POST" action="signup.php">
				  <div class="form-group">
				    <label for="signup_firstName">First Name:</label>
		  	 		<input type="text" id="signup_firstName" name="signup_firstName" required>
				  </div>
				  <div class="form-group">
				    <label for="signup_lastName">Last Name:</label>
		  	 		<input type="text" id="signup_lastName" name="signup_lastName" required>
				  </div>
				  <div class="form-group">
							<label for="signup_sex">Select your sex:</label>
							<select class="form-control" name="signup_sex" id="signup_sex" required>
						        <option value="" disabled selected>Select sex</option>
						        <option>male</option>
						        <option>female</option>
						        <option>other</option>
						    </select>
						</div>
				  <div class="form-group">
				  	<label for="signup_email">Email Address:</label>
		  	 		<input type="Email" id="signup_email" name="signup_email" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_phone">Phone Number:</label>
		  	 		<input type="tel" id="signup_phone" name="signup_phone" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_address">Address:</label>
		  	 		<input type="text" id="signup_address" name="signup_address" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_user">User Name:</label>
		  	 		<input type="text" id="signup_user" name="signup_user" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_pass">Password:</label>
		  	 		<input type="password" id="signup_pass" name="signup_pass" required>
				  </div>
	       	</div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
				<input type="submit" name="submit" value="Sign-up" class="btn btn-primary">
		      </div>
	      	</form>
	    </div>
	  </div>
	</div>




</body>
</html>