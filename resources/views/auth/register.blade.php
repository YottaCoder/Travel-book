

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	
    <link rel="icon" type="image/png" href="{{asset('loginassets/images/icons/favicon.ico')}}"/>
 
    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/fonts/iconic/css/material-design-iconic-font.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/animate/animate.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/css-hamburgers/hamburgers.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/animsition/css/animsition.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/select2/select2.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/vendor/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('loginassets/css/main.css')}}">
  
<style>
	.icon {
	  display: inline-block;
	  width: 100px; /* Adjust as needed */
	  height: 100px; /* Adjust as needed */
	  background-image: url('loginassets/images/bg-03.png');
	  background-size: cover;
	}
	select{
		/* width: 25vw; */
		line-height: 1.5;
		border: none;
		border-radius: 10px;
		color:white;
		padding: 15px 10px;
		/* background-color:  hsla(0, 0%, 0%, 0); */
		background-color:transparent;
	}
	select:focus{
		background-color: #4692F5;
		transform: scale(1.01);
	}
  </style>
  
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginassets/images/bg-02.jpeg');">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<i class="icon"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate="Select User Type">
						<select class="input100" name="usertype" required>
							<option value="" selected disabled hidden>Select User Type</option>
							<option value="Traveler">Traveler</option>
							<option value="Tour Owner">Tour Owner</option>
							<option value="Hotel Owner">Hotel Owner</option>
							<option value="Airline">Airline </option>
						</select>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="name" name="name" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder=""></span>						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password_confirmation" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

<!-- 
					<div class="wrap-input100 validate-input" data-validate="Enter Phone Number">
						<input class="input100" type="tel" name="phone" placeholder="Phone Number" onKeyPress="if(this.value.length==10) return false;" >						
						<span class="focus-input100" data-placeholder=""></span>
					</div> -->

					

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-12" style="color: white;">
						Already have an account ? 
						<a class="" href="{{route('login')}}" style="color: white !important; font-size: 1rem !important;">&nbsp;Login</a>
					</div>

					

					
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
  
	
	<script src="{{asset('loginassets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
 
	<script src="{{asset('loginassets/vendor/animsition/js/animsition.min.js')}}"></script>
 
	<script src="{{asset('loginassets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loginassets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
 
	<script src="{{asset('loginassets/vendor/select2/select2.min.js')}}"></script>
 
	<script src="{{asset('loginassets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('loginassets/vendor/daterangepicker/daterangepicker.js')}}"></script>
 
	<script src="{{asset('loginassets/vendor/countdowntime/countdowntime.js')}}"></script>
 
	<script src="{{asset('loginassets/js/main.js')}}"></script>

</body>
</html>