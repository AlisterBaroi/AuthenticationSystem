<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 
	include('header.php');
	if (!isset($_SESSION['user'])) {
		header("location: login.php");
	}else {
		$uname = $_SESSION['user'];
	}
	
?>
<style>
.file-upload {
    display: none;
}
.upload-button {
  font-size: 1.2em;
}
.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
</style>

<div class="row mx-0 px-0">
	<div class="container card card-body col-lg-3 ml-0 bg-dark text-white border border-white">
		<div class="">
			<img class="card-img-top profile-pic rounded-circle" src="images/2.png" alt="Card image">
			<div class="p-image">
				<i class="fa fa-camera upload-button fa-lg"></i>
				<input class="file-upload" type="file" name="file" accept="image/"/>
			</div>	
			
		</div>
				<!-- <p class="card-text text-center">Some example text some example text. John Doe is an architect and engineer</p> -->
				<!-- <a href="" class="btn btn-info mt-4">Update Picture</a> -->
				<h1 class="text-center my-1"><?php echo ($uname)?></h1>
				<!-- <input class="my-3" type="file" name="file">
				<input class="btn btn-info" type="submit" name="submit" value="Update Picture"> -->
				
</div>

		<form class="form-group col-lg-9">
			<h4 class="text-left my-2">User : <?php echo ($uname)?><br>Email : <?php echo ($email)?></h4>
			<h1 class="text-dark text-left font-weight-bold display-4">Description</h1>
			<textarea class="form-control my-2 border border-dark" rows="5" id="comment" placeholder="Give your description" name="text"></textarea>
			<button type="submit" class="btn btn-info">Update Description</button>


			<!-- <h1 class="text-warning text-center p-5 font-weight-bold display-1">Welcome <?php echo ($uname)?></h1>
			<h1 class="text-warning text-center font-weight-bold display-4">You Are Logged In</h1> -->
		</form>
	
	</div>
<!-- THIS PROJECT IS MADE BY ME: ALISTER ANIMESH BAROI
COPYRIGHT ALISTER ANIMESH BAROI -->
<?php 

	include('footer.php');
?>


<script>
$(document).ready(function() {

    
var readURL = function(input) {
		if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
						$('.profile-pic').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
		}
}


$(".file-upload").on('change', function(){
		readURL(this);
});

$(".upload-button").on('click', function() {
	 $(".file-upload").click();
});
});
</script>