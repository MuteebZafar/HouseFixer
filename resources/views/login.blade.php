<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	
	<!--Main CSS File -->
	<link href="style.css" rel="stylesheet">
	<!--- Bootstrap Link --->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!--- Jquery Link --->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

	

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
					
					<form id="login-form-doctor" method="POST" Action="authentication">
					@csrf
						<div class="form-group">
							<label for="InputEmail">Email address</label>
							<input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
							<span style="color:red">@error('email'){{$message}}@enderror</span>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword">Password</label>
							<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Enter Your Password">
							<span style="color:red">@error('password'){{$message}}@enderror</span>
						</div>
						
						<br> 
						<div class="text-center">
							<button type="submit" id="login-btn-doc" class="btn btn-primary">LOGIN</button>
						</div>
					</form>
					
				</div>
					<!--- <div id="doctor-type">
					<p class="text-center">Hello <strong>Doctor</strong>! Please login to continue.</p>
					</div>
					
					<div id="patient-type">
					<p class="text-center">Hello <strong>Patient</strong>! Please login to continue.</p>
					</div>
				--->
				
					<!--- 
						<div id="patient-form">
					<p class="text-center">Hello <strong>Patient</strong>! Please login to continue.</p>
					
					<form id="login-form-patient">
					
						<div class="form-group">
							<label for="InputEmail1">Email address</label>
							<input type="email" name="email-P-login" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" name="password-P-login" class="form-control" id="InputPassword1" placeholder="Enter Your Password">
						</div>
						
						<br> 
						<div class="text-center">
							<button type="submit" id="login-btn-patient" class="btn btn-primary">LOGIN</button>
					</form>
						</div>--->
					
					
				</div>
				

				<p class="text-center">New Member? <u><strong><a href="signup-form.html">Create Your Account</a></strong></u></p>
			
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
	
	$("#doctor-btn").click(function(){
		$("#doctor-type").show();
		$("#patient-type").hide();
	});
	
	$("#patient-btn").click(function(){
		$("#patient-type").show();
		$("#doctor-type").hide();
	});

});

</script>
</body>
</html>