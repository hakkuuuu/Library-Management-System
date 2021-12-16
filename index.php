<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->

<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->

	<!-- Style -->
	<link rel="stylesheet" href="css\index.css" type="text/css" media="all">

	<!-- Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->

<body>

	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="index.php" method="post">
		<h1>Sign In</h1>
			<input type="text" class="input" Name="RollNo" placeholder="RollNo" required="">
			<input type="password" class="input" Name="Password" placeholder="Password" required="">
			<input class="button" type="submit" name="signin" ; value="Sign In">
		</form>
	</div>

	<div class="register form-container sign-in-container">
		<h1>Sign Up</h1>
		<form action="index.php" method="post">
			<input class="input" type="text" Name="Name" placeholder="Name" required>
			<input class="input" type="text" Name="Email" placeholder="Email" required>
			<input class="input" type="password" Name="Password" placeholder="Password" required>
			<input class="input" type="text" Name="PhoneNumber" placeholder="Phone Number" required>
			<input class="input" type="text" Name="RollNo" placeholder="Roll Number" required="">
			<input class="button" type="submit" name="signup" ; value="Sign Up">
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Login with your existing student account</p>
				<button class="ghost" id="signIn">Sign Up</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome to BNHS LMS</h1>
				<p>Enter your student information to access</p>
				<button class="ghost" id="signUp">Sign In</button>
			</div>
		</div>
	</div>
</div>
	<script src="action.js"></script>
	<?php
	if (isset($_POST['signin'])) {
		$u = $_POST['RollNo'];
		$p = $_POST['Password'];

		$sql = "select * from LMS.user where RollNo='$u'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$x = $row['Password'];
		$y = $row['Type'];
		if (strcasecmp($x, $p) == 0 && !empty($u) && !empty($p)) { //echo "Login Successful";
			$_SESSION['RollNo'] = $u;


			if ($y == 'Admin')
				header('location:admin/menu.php');
			else
				header('location:student/index.php');
		} else {
			echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
		}
	}

	if (isset($_POST['signup'])) {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$mobno = $_POST['PhoneNumber'];
		$rollno = $_POST['RollNo'];
		$type = 'Student';

		$sql = "insert into LMS.user (Name,Type,RollNo,EmailId,MobNo,Password) values ('$name','$type', '$rollno','$email','$mobno','$password')";

		if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Registration Successful')</script>";
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<script type='text/javascript'>alert('User Exists')</script>";
		}
	}

	?>

</body>
<!-- //Body -->

</html>