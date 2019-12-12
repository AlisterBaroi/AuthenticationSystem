<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 
	include('header.php');
	if (isset($_SESSION['user'])) {
		header("location: dashboard.php");
	}
?>
<div class="p-5 bg-warning">
	<h1 class="text-dark text-center p-5 font-weight-bold display-1">Simple Authentication System</h1>
	<h2 class="text-secondary text-center font-weight-bold">With Simple SignUp And LogIn Functionality</h2>
</div>
<img src="" alt="" class="slider">
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 

	include('footer.php');
?>