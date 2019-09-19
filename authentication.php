<?php
	session_start();
	include('config.php'); // Database connection

	/*====== Authentication for Registration ======*/
	if (isset($_POST['register'])) {

		$name = mysqli_real_escape_string($conn, $_POST['name']); // Define variables for Name
		$mobile = $_POST['mobile']; // Define variable for Phone Number
		$email = $_POST['email']; // Define variable for Email
		$password = $_POST['password']; // Define variable for Password
		$en_password = md5($password); // Hash the Password
		
		$query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
		$result = mysqli_query($conn, $query);
		$user = mysqli_fetch_assoc($result);

		if($user) { // If the email exists

			if ($user['email'] === $email) {
		    	echo "<script>alert('Sorry...this email has been registered already.');</script>";
		    }

		} else {

		    $register = "INSERT INTO users(name, mobile, email, password) values ('$name', '$mobile', '$email', '$en_password')";
		
			$row = mysqli_query($conn, $register);
				echo "<script>alert('Registration successful, please login.');
				window.location.href='index.php';</script>";
		}

	}

	
	/*====== Authentication for Login ======*/
	if (isset($_POST['login'])) {

		$email = $_POST['email']; // Define variable for Email
		$password = $_POST['password']; // Define variable for Password

		$en_password = md5($password); // Hash the Password

		$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$en_password' ");
		$count = mysqli_fetch_assoc($result);
		
		if($count > 0) {
		    $_SESSION['login'] = $_POST['email'];
		    $_SESSION['id'] = $count['id'];
		    echo "<script>window.location.href='dashboard.php'</script>";
		    exit();
		
		} else {
		    echo "<script>alert('Invalid username or password.');
		    window.location.href='index.php';</script>";
			}
	}	
	
?>