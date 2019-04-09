<?php
	include('header.php');

	if (isset($_SESSION['user'])) {
		header("location: dashboard.php");
	}

	if (isset($_POST["reset"])) {
		
		$email = $conn->real_escape_string($_POST["email"]);
		
		$data = $conn->query("SELECT id FROM user WHERE email = '$email'");

		if ($data->num_rows > 0) {
			$tkey = sha1(date('Y/m/d-H:i:s').substr(str_shuffle($email), 0, 11));
			$url = "http://domain.com/reset.php?token=$tkey&email=$email";

			//mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n");

			$conn->query("UPDATE user SET tokenKey='$tkey', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");

			echo "<script>alert('Please check your email inbox to reset your password')</script>";
			header("location: reset.php?tokenKey=$tkey&email=$email");

		} elseif (empty($email)){
			echo "<script> alert('Please provided your user email')</script>";
		}else{
			echo "<script> alert('This email is not registered')</script>";
		}
	}

?>
<br>
<form class="col-lg-3 p-3 m-auto bg-light border rounded border-info" action="" method="post">
	<div class="p-3">
		<h1 class="text-center text-dark">Enter Email</h1>
	</div>
	<div class="form-group px-1">
		<div class="d-flex justify-content-center align-content-center col-lg-12 px-0">

			<div class="border rounded border-lite justify-text-center col-2 pt-1 px-auto mx-0">
				<i class="fas fa-envelope-open-text fa-lg"></i>
			</div>

			<div class="col-lg-10 mx-0 px-0">
				<input type="text" class="form-control" placeholder="Email Address" name="email">
			</div>

		</div>
	</div>
</div>
<div class="form-group d-flex pt-2 px-auto">
	<input class="btn btn-info col-sm-10 m-auto mx-auto" type="submit" name="reset" value="Reset Password">
</div>
</form>