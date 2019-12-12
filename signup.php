<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php

	include('header.php');
	if (isset($_SESSION['user'])) {
		header("location: dashboard.php");
	}
	if (isset($_POST['submit'])) {

		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = sha1($_POST['pass']);
		$cpass = sha1($_POST['cpass']);

		$check = $conn->query("SELECT * FROM user WHERE name = '$uname' OR email = '$email'");

		if (empty($uname) || empty($email) ||empty($pass) || empty($cpass)) {
			echo "<script> alert('Please provided all informations!')</script>";
		}elseif (strlen($pass) <= 8) {
			echo "<script>alert('Password must be more than 8 characters')</script>";
		}elseif ($pass != $cpass) {
			echo "<script>alert('Password did not match')</script>";
		}elseif($check->num_rows > 0){
			echo "<script>alert('This name or email alredy exists')</script>";
		}else{
			$insert = $conn->query("INSERT INTO user(name,email,pass) VALUES ('$uname','$email','$pass')");
			if (!$insert) {
				echo "<script>alert('Due to an unexpected error we are unable to sign you up')</script>";
			}else {
				echo "<script>alert('Sign up successful')</script>";
			}
		}
	}
?>
<br>
<form class="col-md-3 p-3 m-auto border bg-light rounded border-info" action="" method="post">
	<div class="form-group d-flex justify-content-center pt-1 mb-0">
		<i class="fas fa-sign-in-alt fa-7x text-info"></i>
	</div>
	<div class="pb-2 mt-0">
		<h1 class="text-center text-dark">Sign Up</h1>
	</div>
	<!-- Uname Start -->
	<div class="form-group p-1 d-flex col-lg-12 px-0">
		<!-- Icon -->
		<div class="border rounded col-2 pt-1">
			<i class="fas fa-user fa-lg"></i>
		</div>
		<!-- Input -->
		<div class="col-lg-10 mx-0 px-0">
			<input type="text" class="form-control" placeholder="User Name" name="uname">
		</div>
		
	</div>
	<!-- Uname End -->
	<!-- Email Start -->
	<div class="form-group p-1 d-flex col-lg-12 px-0">
		<!-- Icon -->
		<div class="border rounded col-2 pt-1">
			<i class="fas fa-envelope-open-text fa-lg"></i>
		</div>
		<!-- Input -->
		<div class="col-lg-10 mx-0 px-0">
			<input type="email" class="form-control" placeholder="Email Address" name="email">
		</div>
	</div>
	<!-- Email End -->
	<!-- Password Start -->
	<div class="form-group p-1 d-flex col-lg-12 px-0">
		<!-- Icon -->
		<div class="border rounded col-2 pt-1">
			<i class="fas fa-lock fa-lg"></i>
		</div>
		<!-- Input -->
		<div class="col-lg-10 mx-0 px-0">
			<input type="password" class="form-control" placeholder="Password" name="pass">
		</div>
	</div>
	<!-- Password End -->
	<!-- Confirm Password Start -->
	<div class="form-group p-1 d-flex col-lg-12 px-0">
		<!-- Icon -->
		<div class="border rounded col-2 pt-1">
			<i class="fas fa-unlock fa-lg"></i>
		</div>
		<!-- Input -->
		<div class="col-lg-10 mx-0 px-0">
			<input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
		</div>
	</div>
	<!-- Confirm Password End -->
	<div class="form-group pt-2 d-flex col-lg-12 px-0">
		<input class="btn btn-lg btn-info col-sm-12" type="submit" name="submit">
	</div>
</form>

<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->

<?php
	include('footer.php');
?>