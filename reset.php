<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	include('header.php');

	if (isset($_SESSION['user'])) {
			header("location: dashboard.php");
		}


	if (isset($_GET["tokenKey"]) && isset($_GET["email"])) {
		
		$email = $conn->real_escape_string($_GET["email"]);
		$token = $conn->real_escape_string($_GET["tokenKey"]);

		$data = $conn->query("SELECT id FROM user WHERE email = '$email' AND tokenKey = '$token' AND tokenKey <> '' AND expire > NOW()");

		if ($data->num_rows > 0) {
			
			$tpasslogin = str_shuffle(date('Y/m/d-H:i:s').substr(str_shuffle($email), 0, 11));
			$tpassdb = sha1($tpasslogin);

			$conn->query("UPDATE user SET pass = '$tpassdb', tokenKey = '' WHERE email='$email'");

			//echo "Your new password is: $tpasslogin";
			echo "<script> alert('Your new password : $tpasslogin')</script>";
		} else {
			
			header("location: index.php");
			echo "<script>alert('Invalid link')</script>";
		}
	} else {
		header("Location: login.php");
	}
?>
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->