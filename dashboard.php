<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 
	include('header.php');
	if (!isset($_SESSION['user'])) {
		header("location: login.php");
	}else {
		$uname = $_SESSION['user'];
		//echo "<script>alert('Welcome $uname')</script>";
	}

	
?>
<div class="row mx-0 px-0 d-flex">
	<div class="container card card-body col-lg-2 ml-0 bg-dark text-white border border-white">
			<img class="card-img-top rounded-circle" src="images/2.png" alt="Card image">
				<h4 class="card-title mt-2 text-center"><?php echo ($uname)?></h4>
				<p class="card-text text-center">Some example text some example text. John Doe is an architect and engineer</p>
				<a href="profile.php" class="btn btn-info">Profile</a>
	</div>

		<div class="alert alert-dismissible bg-danger col-lg-10 border border-top border-white">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h1 class="text-warning text-center p-5 font-weight-bold display-1">Welcome <?php echo ($uname)?></h1>
			<h1 class="text-warning text-center font-weight-bold display-4">You Are Logged In</h1>
		</div>
	
</div>
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 

	include('footer.php');
?>