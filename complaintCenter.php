<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
</head>
<body background="pictures/random/complaintCenterBg.jpg">

	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<div class="container text-light">
		<div class="row mt-2">
			<div class="col">
				<div>
					<h1>Complaint Center</h1>
					<p>Please send us details about the incident you would like to report. Our Complaint Center will analyze your complaint and take the appropriate measures in order that the reported situation will not occur at any other time in the future.</p>
				</div>
				<div>
					<form method="POST" action="complainConfirmation.php">
						<div class="form-group pt-3">
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
						</div>
						<div class="form-group">
							<label for="complaint">Complain:</label>
							<textarea name="complaint" id="complaint" class="form-control" placeholder="Write your complaint here" required></textarea>
						</div>
						<div class="form-group pt-2">
							<input type="submit" class="form-control btn btn-success" name="sendComplain" value="Send Complain">
						</div>
					</form>
				</div>
			</div>
			<div class="col my-auto">
				<img src="pictures/random/complaintCenter.jpg" class="img-fluid">
			</div>
		</div>
	</div>


	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>