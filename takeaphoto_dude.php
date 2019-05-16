<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 
	
	<link rel="stylesheet" href="css/css_in_most_pages.css">
	<link rel="stylesheet" href="css/css_login.css">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



	<style>
	#container {
		margin: 0px auto;
		width: 500px;
		height: 375px;
		border: 10px #333 solid;
	}
	#videoElement {
		width: 500px;
		height: 375px;
		background-color: #666;
	}
	</style>


</head>
<meta charset="utf-8"/>
<body>

	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
    <a class="navbar-brand" href="index.php">ScheduleSmart Org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
		<?php if(isset($_COOKIE['id'])){ 
				if(isset($_COOKIE['organizer'])){
		?>
		<li class="nav-item">
		  <a class="nav-link" href="organizer/myevents.php"> <?php echo $_COOKIE['name']; ?> </a>
		</li>
		<?php }  else { ?>
		<li class="nav-item">
		  <a class="nav-link" href="umyevents.php"> <?php echo $_COOKIE['name']; ?> </a>
		</li>
		<?php } ?>
		<li class="nav-item">
		  <a class="nav-link" href="logout.php">Log out</a>
		</li>
		<?php } else { ?>
		<li class="nav-item">
		  <a class="nav-link" href="login.php">Sign in</a>
		</li>
		<?php } ?>
		
		<li>
			<div class="active-pink-3 active-pink-4">
			  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</div>
		</li>
      </ul>
    </div>
  </div>
	</nav>
	<br>
	<br>
	<!-- END OF navigation bar on top -->


<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Smile!
  <br>
    <small>;)</small>
  </h1>

</div>


	<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
	<div class="container" align="center">
		

		<!-- form used to log in -->
	<form class="form-signin">
	<div id="container">
	<video autoplay="true" id="videoElement">
	
	</video>
</div>

<br>
<br>

	<button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Skip</button>

	</form>
	
	
	<!-- END of form used to log in --></p>
    </div>
  </div>
</div>

	<script type="text/javascript">
    'use strict';
		var video = document.querySelector("#videoElement");

		if (navigator.mediaDevices.getUserMedia) {
		  navigator.mediaDevices.getUserMedia({ video: true })
			.then(function (stream) {
			  video.srcObject = stream;
			})
			.catch(function (err0r) {
			  console.log("Something went wrong!");
			});
		}
		
		
		var canvas;
			function takeSnapshot() {
			  var img = document.querySelector('img') || document.createElement('img');
			  var context;
			  var width = video.offsetWidth
				, height = video.offsetHeight;

			  canvas = canvas || document.createElement('canvas');
			  canvas.width = width;
			  canvas.height = height;

			  context = canvas.getContext('2d');
			  context.drawImage(video, 0, 0, width, height);

			  img.src = canvas.toDataURL('images/xxx.png');
			  document.body.appendChild(img);
			}
		
	</script>
    


<!-- reference https://www.kirupa.com/html5/accessing_your_webcam_in_html5.htm 
				https://gist.github.com/anantn/1852070 -->    

    	



	

</body>
</html>