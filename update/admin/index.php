<?php
$title = "site-home";

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/browse.css">
	<link rel="stylesheet" href="css/my-book.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Library - <?php echo $title; ?></title>
</head>

<body>

	<nav id="nav-lms">
		<span id="logo">
			<img src="img/logo.png" alt="School Logo" id="logo-img" />
			<span id="logo-name">
				<h2>
					Banquerohan <br />
					National High School
				</h2>
			</span>
		</span>

		<ul id="nav-links">
			<li><a href="menu.php" class="nav-link"> Dashboard</a></li>
			<li><a href="index.php" class="nav-link"> Dashboard</a></li>
		</ul>
	</nav>
	<header id="library-header">
		<h1 class="header-name">BNHS LIBRARY</h1>
	</header>

	<div class="span9">
		<center>
			<div class="card" style="width: 50%;">
				<img class="card-img-top" src="images/profile2.png" alt="Card image cap">
				<div class="card-body">

					<?php
					$rollno = $_SESSION['RollNo'];
					$sql = "select * from LMS.user where RollNo='$rollno'";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();

					$name = $row['Name'];
					$category = $row['Category'];
					$email = $row['EmailId'];
					$mobno = $row['MobNo'];
					?>
					<i>
						<h1 class="card-title">
							<center><?php echo $name ?></center>
						</h1>
						<br>
						<p><b>Email ID: </b><?php echo $email ?></p>
						<br>
						<p><b>Mobile number: </b><?php echo $mobno ?></p>
						</b>
					</i>

				</div>
			</div>
			<br>
			<a href="edit_admin_details.php" class="btn btn-primary">Edit Details</a>
		</center>
	</div>




	<?php require_once 'includes/footer.php'; ?>