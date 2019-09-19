<?php
	session_start();
	include('config.php');

	if(strlen($_SESSION['login']) == 0) { 
    	header('location:index.php');
	} else {
		
?>

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
			padding: 10px;
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

		.field-icon {
			float: right;
			margin-right: 20px;
			margin-top: -40px;
			position: relative;
			z-index: 2;
			cursor: pointer;
		}

		.field-icon.active {
			color: dodgerblue;
		}

	</style>
</head>

<body style="background-color: #F4F3F3;">
	<?php
		$user_name = $_SESSION['login'];
		$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$user_name' ");

		while ($row = mysqli_fetch_array($query)) { 
	?>
	
	<div class="jumbotron container mt-5">
		<h4 class="font-weight-bold">Hello <?php echo $row['name']; ?>,</h4>
		<p class="lead">Welcome to TeamBravo's Dashboard</p>
		<hr class="my-4">
		<a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
	</div>

	<?php } ?>


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

<?php } ?>