<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	include('header.php');
	if (isset($_SESSION['user'])) {
		header("location: dashboard.php");
	}
	if (isset($_POST['forgot'])) {
		header("location: forget.php");
	}
	if (isset($_POST['submit'])) {

		$uname = $_POST['uname'];
		$pass = sha1($_POST['pass']);
		
		if (empty($uname) || empty($pass) ) {
			echo "<script> alert('Please provided all informations')</script>";
		}else{
			$login = $conn->query("SELECT * FROM user WHERE name = '$uname' AND pass = '$pass'");
			if ($login->num_rows == 0) {
				echo "<script> alert('Username or password did not match!')</script>";
			}else{
				$_SESSION['user'] = $uname;
				echo "<script> alert('Login Successfull')</script>";
				header("location: dashboard.php");
			}
		}
	}
?>
<br>
<form class="col-lg-3 p-3 m-auto bg-light border rounded border-info" action="" method="post">

	<!-- PROFILE ICON START -->
	<div class="form-group d-flex justify-content-center pt-1 mb-0">
		<i class="fas fa-user-circle fa-10x text-info"></i>
	</div>
	<!-- PROFILE ICON END -->

	<!-- LOGIN TEXT START -->
	<div class="pb-2 mt-0">
		<h1 class="text-center text-dark">Log In</h1>
	</div>
	<!-- LOGIN TEXT END -->

	<!-- User name Start -->
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
	<!-- User name End -->

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

	<div class="form-group d-flex pt-2">
		<input class="btn btn-info col-sm-5 m-auto" type="submit" name="forgot" value="Reset">
		<input class="btn btn-info col-sm-5 m-auto" type="submit" name="submit">
	</div>
</form>
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	include('footer.php');
?>