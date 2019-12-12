<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php
	include('header.php');
	if (!isset($_SESSION['user'])) {
		header("location: login.php");
	}else {
		// $uname = $_SESSION['user'];
		// $sql = "SELECT * FROM user WHERE name = '$uname';";
		// $result = mysqli_query($conn, $sql);
		// $rcheck = mysqli_num_rows($result);
		// if ($rcheck > 0) {
		// 	while ($row = mysqli_fetch_assoc($result)) {
		// 	$email = $row['email'];
		// 	}
		// }
	}
	
?>

<div class="row mx-0 px-0">
	<!-- Nav tabs -->
	<h1 class="text-center text-dark py-3 px-0 m-0 border rounded border-info col-lg-12 bg-light">Settings</h1>
	<div class="col-lg-2 mx-0 px-0">
		<ul class="nav nav-tabs flex-column bg-light" role="tablist">
			<li class="nav-item">
				<a class="nav-link border-info active" data-toggle="tab" href="#userinfo">General</a>
			</li>
			<li class="nav-item">
				<a class="nav-link border-info" data-toggle="tab" href="#changepass">Security</a>
			</li>
			<li class="nav-item">
				<a class="nav-link border-info" data-toggle="tab" href="#profilesettings">Profile Settings</a>
			</li>
			
		</ul>
	</div>
	<!-- Nav tabs End-->
	<div class="col-lg-10 mx-0 px-0 border">
		

		<!-- Tab panes -->
		<div class="tab-content">
			<div id="userinfo" class="tab-pane active">

				
				<form class="col-lg-4 p-3 mx-auto my-4 bg-light border rounded border-info" action="" method="post">

					<!-- USER INFO TEXT START -->
					<div class="py-3">
						<h1 class="text-center text-dark">User Info</h1>
						<hr>
					</div>
					<!-- USER INFO TEXT END -->
					<!-- User name Start -->
					<div class="form-group p-1 d-flex px-auto">
						<!-- Icon -->
						<div class="border rounded col-2 pt-1">
							<i class="fas fa-user fa-lg"></i>
						</div>
						<!-- Input -->
						<div class="col-lg-10 mx-0 px-0">
							<input type="text" class="form-control" value="<?php echo ($uname)?>" placeholder="User Name" name="uuname">
						</div>
						
					</div>
					<!-- User name End -->
					<!-- User name Start -->
					<div class="form-group p-1 d-flex px-0">
						<!-- Icon -->
						<div class="border rounded col-2 pt-1">
							<i class="fas fa-envelope-open-text fa-lg"></i>
						</div>
						<!-- Input -->
						<div class="col-lg-10 mx-0 px-0">
							<input type="text" class="form-control" value="<?php echo ($email)?>" placeholder="Email Address" name="uemail">
						</div>
						
					</div>
					<!-- User name End -->
					<div class="form-group d-flex pt-2">
						<input class="btn btn-info col-sm-10 m-auto" type="submit" name="submit" value="Update User Info">
					</div>
				</form>
				
			</div>
			<div id="changepass" class="container tab-pane fade">

				<form class="col-lg-4 p-3 mx-auto my-4 bg-light border rounded border-info" action="" method="post">

					<!-- USER INFO TEXT START -->
					<div class="py-3">
						<h1 class="text-center text-dark">Update Password</h1>
						<hr>
					</div>

					<!-- USER INFO TEXT END -->
					<!-- User name Start -->
					<div class="form-group p-1 d-flex px-auto">
						<!-- Icon -->
						<div class="border rounded col-2 pt-1">
							<i class="fas fa-lock fa-lg"></i>
						</div>
						<!-- Input -->
						<div class="col-lg-10 mx-0 px-0">
							<input type="text" class="form-control" placeholder="New Password" name="upass">
						</div>
					</div>
					<!-- User name End -->
					<!-- User name Start -->
					<div class="form-group p-1 d-flex px-0">
						<!-- Icon -->
						<div class="border rounded col-2 pt-1">
							<i class="fas fa-unlock fa-lg"></i>
						</div>
						<!-- Input -->
						<div class="col-lg-10 mx-0 px-0">
							<input type="text" class="form-control" placeholder="Confirm Passowrd" name="ucpass">
						</div>
						
					</div>
					<!-- User name End -->
					<div class="form-group d-flex pt-2">
						<input class="btn btn-info col-sm-10 m-auto" type="submit" name="upass" value="Update Passowrd">
					</div>
				</form>
			</div>
			<div id="profilesettings" class="container tab-pane fade"><br>
				<h3>Menu 2</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
			</div>
			<!-- Tab panes End-->
		</div>
	</div>
</div>
</div>
<!--
<div class="p-5 bg-danger">
<h1 class="text-warning text-center p-5 font-weight-bold display-1"><?php echo ($uname)?> settings</h1>
<p class="text-warning text-center p-0 m-0 font-weight-bold">Email = <?php echo ($e)?> </p>
<h1 class="text-warning text-center font-weight-bold display-4">You Are Logged In</h1>
</div> -->
<?php
	include('footer.php');
?>