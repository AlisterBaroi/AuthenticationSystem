<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	$conn = mysqli_connect("localhost","root","","authenticationsystem");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>	</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<script src="js/all.js"></script>
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark col-md-12">
			<!-- Brand -->
			<?php if(!isset($_SESSION['user'])){?>
			<a href="index.php" class="navbar-brand text-warning">AuthenticationSystem</a>
			<?php }else{?>
			<a href="" class="navbar-brand text-warning">AuthenticationSystem</a>
			<?php } ?>
			<!-- Brand End -->

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Toggler/collapsibe Button End -->

			<!-- Navbar links -->

			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="nav navbar-nav ml-auto">

				<!-- User Session Buttons -->

				<?php if(isset($_SESSION['user'])){
				$uname = $_SESSION['user'];
				$sql = "SELECT * FROM user WHERE name = '$uname';";
				$result = mysqli_query($conn, $sql);
				$rcheck = mysqli_num_rows($result);
				if ($rcheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
					$email = $row['email'];
			}
		}
				
				?>
				<li class="nav-item m-1 dropdown"> 
					<a class="dropdown-toggle nav-link btn btn-info text-white" data-toggle="dropdown" href="dashboard.php"><?php echo($uname)?></a>

					<div class="dropdown-menu dropdown-menu-right bg-info text-center py-0">
     				 	<a class="nav-link btn btn-sm btn-info text-white" href="dashboard.php">Dashboard</a>
     				 	<a class="nav-link btn btn-sm btn-info text-white" href="profile.php">Profile</a>
     					<a class="nav-link btn btn-sm btn-info text-white" href="settings.php">Settings</a>
     					<a class="nav-link btn btn-sm btn-info text-white" href="logout.php">Logout</a>
   				 	</div>
				</li>
				<!-- User Session Buttons End -->
				
				<!-- Default Buttons -->
				<?php }else{?>
				<li class="nav-item m-1"><a class="nav-link btn btn-sm btn-info text-white" href="login.php">Login</a></li>
				<li class="nav-item m-1"><a class="nav-link btn btn-sm btn-info text-white" href="signup.php">Signup</a></li>
				<?php } ?>
				<!-- Default Buttons End -->
			</ul>
			</div>
			<!-- Navbar links End -->
		</nav>
		<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->