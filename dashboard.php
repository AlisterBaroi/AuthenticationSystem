<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 
	include('header.php');
	if (!isset($_SESSION['user'])) {
		header("location: login.php");
	}
	
?>
<div class="p-5 bg-danger">
	<h1 class="text-warning text-center p-5 font-weight-bold display-1">You Are Logged In</h1>

</div>
<img src="" alt="" class="slider">
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 

	include('footer.php');
?>