<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

	<style type="text/css">
		.content {
			max-width: 380px;
			margin: auto;
		}

		.title-registration {
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 32px;
			line-height: 37px;
			color: #333333;
			margin-bottom: 64px;
		}


		/*===== CHECKBOX =====*/
		.check {
			height: 65.81px;
			background-color: #EAEAEA !important;
			padding: 15px;
		}

		label.indented-checkbox-text {
			letter-spacing: 1px !important;
			font-size: 14px;
		}

		input[type="checkbox"]{
			width: 17px;
			height: 17px;
			background-color : #F4F3F3;
		}


		/*===== BUTTON =====*/
		.btn{
			background-color: #1EE06C;
			color: white;
			text-transform: capitalize;
			font-size: 16px;
			border-radius: 8px;
			box-shadow: 1px 6px 14px rgba(0, 0, 0, 0.25) !important;
		}

		/*===== INPUT FIELD =====*/
		input[type="text"], input[type="password"], input[type="number"], input[type="email"] {
			background-color : #F4F3F3;
		}

		input[type="text"], input[type="password"], input[type="number"], input[type="email"] {
			width: 100%;
			border: 2px solid #1EE06C;
			border-radius: 4px;
			margin: 8px 0;
			outline: none;
			padding: 12px;
			box-sizing: border-box;
			transition: 0.3s;
		}

		.inputWithIcon input[type="text"], input[type="number"], input[type="email"], input[type="password"] {
		  	padding-left: 50px;
		}

		.inputWithIcon {
		 	position: relative;
		}

		.inputWithIcon i {
			position: absolute;
			left: 0;
			top: 8px;
			padding: 15px 15px;
			color: #aaa;
			transition: 0.3s;
		}

		.inputWithIcon svg {
			position: absolute;
			left: 0;
			top: 8px;
			padding: 15px 15px;
			color: #aaa;
			transition: 0.3s;
		}


	</style>
</head>

<body style="background-color: #F4F3F3;">

	<div class="content mt-5">

		<h5 class="title-registration text-center py-4">Create Account</h5>

		<form class="" style="color: #757575;" action="#!">

		    <div class="inputWithIcon">
			  	<input type="text" placeholder="Name">
			  	<i class="fa fa-user fa-lg" aria-hidden="true"></i>
			</div>

			<div class="inputWithIcon">
			  	<input type="number" placeholder="+234">
			  	<svg width="50" height="50" viewBox="0 0 150 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="50" height="100" fill="#008000"/>
					<rect x="100" width="50" height="100" fill="#008000"/>
					<rect x="50" width="50" height="100" fill="white"/>
				</svg>
			</div>

			<div class="inputWithIcon">
			  	<input type="email" placeholder="Email">
			  	<i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
			</div>

			<div class="inputWithIcon">
			  	<input type="password" placeholder="Password">
			  	<i class="fas fa-lock fa-lg" aria-hidden="true"></i>
			</div>

			<div class="check mt-3">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="defaultUncheckedDisabled2">
					<label class="custom-control-label indented-checkbox-text" for="defaultUncheckedDisabled2">I understand agree to terms and conditions guarding this corporation</label>
				</div>
			</div>


			<button class="btn btn-rounded btn-block my-4" type="submit">Create Account</button>


		</form>

		</div>

		</div>
	</div>



	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

</body>

</html>
