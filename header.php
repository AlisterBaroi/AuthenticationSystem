<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	include('db_conn.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>	</title>
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<script src="js/all.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.2.1.slim.min.js"></script>
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
				<?php if(isset($_SESSION['user'])){?>
				<li class="nav-item m-1"> <a class="nav-link btn btn-sm btn-info text-white" href="dashboard.php">Profile</a></li>
				<?php }else{?>
				<?php } ?>
				<?php if(!isset($_SESSION['user'])){?>
				<!-- 	<li class="nav-item m-1"> <a class="nav-link btn btn-sm btn-info text-white" href="index.php">Home</a></li> -->
				<li class="nav-item m-1"><a class="nav-link btn btn-sm btn-info text-white" href="login.php">LogIn</a></li>
				<li class="nav-item m-1"><a class="nav-link btn btn-sm btn-info text-white" href="signup.php">SignUp</a></li>
				<?php }else{?>
				<li class="nav-item m-1"><a class="nav-link btn btn-sm btn-info text-white" href="logout.php">LogOut</a></li>
				<?php } ?>
			</ul>
			</div>
			<!-- Navbar links End -->
		</nav>
		<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
