<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	
	<!--- Bootstrap Link --->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!--- Jquery Link --->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

	<!--Main CSS File -->
	<link href="style.css" rel="stylesheet">

</head>
<body>

	<div class="container">
		<div class="form-body">
	
			<div class="row">
				
				<h3 class="text-center ">Choose Account Type</h3>
				
				<div class="button-type">
					<div class="radio-group row justify-content-between px-3 text-center a">
							<div id="doctor-btn" class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio ">
								<div class="flex-row">
									<div class="col">
										<div class="pic"> <img class="irc_mut img-fluid" src="doctor.png" > </div>
										<p>Doctor</p>
									</div>
								</div>
							</div>
							<div id="patient-btn" class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio ">
								<div class="flex-row">
									<div class="col">
										<div class="pic"> <img class="irc_mut img-fluid" src="man.png" > </div>
										<p>Patient</p>
									</div>
								</div>
							</div>
					</div>
				</div>
				
			</div>
		
			<div class="row">
			
				<div id="doctor-form">
					
				<!---	<p class="text-center">Hello <strong>Doctor</strong>! Please fill out this form to get started.</p>--->
					
					<form id="signup-form-doctor">
					
						<div class="form-group">
							<label for="InputName">Name</label>
							<input type="text" name="name-D" class="form-control" id="InputName" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label for="InputEmail">Email address</label>
							<input type="email" name="email-D" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword">Password</label>
							<input type="password" name="password-D" class="form-control" id="InputPassword" placeholder="Enter Your Password">
						</div>
						<div class="form-group">
							<label for="InputPhone">Phone</label>
							<input type="number" name="phone-D" class="form-control" id="InputPhone" placeholder="Enter Your Phone">
						</div>
						<div class="form-group">
							<label for="InputDate">Date of Birth</label>
							<input type="date" name="date-D" class="form-control" id="InputDate" placeholder="Enter Your Date of Birth">
						</div>
						<div class="form-group">
							<label for="InputAddress">Address</label>
							<input type="text" name="address-D" class="form-control" id="InputAddress" placeholder="Enter Your Address">
						</div>
						
						<br> 
						<div class="text-center">
							<button type="submit" id="signup-btn-doc" class="btn btn-primary">Creat Your Account</button>
						</div>
					</form>
					
				</div>
				
			<!--- 	<div id="patient-form">
					
					<p class="text-center">Hello <strong>Patient</strong>! Please fill out this form to get started.</p>
					
					<form id="signup-form-patient">
					
						<div class="form-group">
							<label for="InputName1">Name</label>
							<input type="text" name="name-P" class="form-control" id="InputName1" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label for="InputEmail1">Email address</label>
							<input type="email" name="email-P" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" name="password-P" class="form-control" id="InputPassword1" placeholder="Enter Your Password">
						</div>
						<div class="form-group">
							<label for="InputPhone1">Phone</label>
							<input type="number" name="phone-P" class="form-control" id="InputPhone1" placeholder="Enter Your Phone">
						</div>
						<div class="form-group">
							<label for="InputDate1">Date of Birth</label>
							<input type="date" name="date-P" class="form-control" id="InputDate1" placeholder="Enter Your Date of Birth">
						</div>
						<div class="form-group">
							<label for="InputAddress1">Address</label>
							<input type="text" name="address-P" class="form-control" id="InputAddress1" placeholder="Enter Your Address">
						</div>
						
						<br> 
						<div class="text-center">
							<button type="submit" id="signup-btn-patient" class="btn btn-primary">Create Your Account</button>
						</div>
					</form>
					
				</div>--->
				
				<p class="text-center">Already have an account? <u><strong><a href="login-form.html">Login Here</a></strong></u></p>
			
			</div>
		</div>
	</div>
	
<script type="text/javascript">

	
jQuery(document).ready(function( $ ){
	
	$('.radio-group .radio').click(function () {
		$('.selected .fa').removeClass('fa-check');
		$('.radio').removeClass('selected');
		$(this).addClass('selected');
	});
	
/* comment 	$("#doctor-btn").click(function(){
		$("#doctor-form").show();
		$("#patient-form").hide();
	});
	
	$("#patient-btn").click(function(){
		$("#patient-form").show();
		$("#doctor-form").hide();
	});
	*/
});

</script>
</body>
</html>