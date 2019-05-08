<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 

	<link rel="stylesheet" href="../css/css_in_most_pages.css">
	<link rel="stylesheet" href="../css/css_login.css">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<meta charset="utf-8"/>
<body>

	
	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
    <a class="navbar-brand" href="../organizer/myevents.php">ScheduleSmart Org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="../login.php">Sign in</a>
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
  <h1 class="my-4">Create your own event here
  <br>
    <small>fill the details of your own event</small>
  </h1>

</div>


	<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
	<div class="container" align="center">
		

		<!-- form used to log in -->
	<form class="form-signin">
	<h5> Add event details</h5>
	<br>
			
		<label for="ename"><b>Event Name</b></label>
		<div class="form-group col-sm-5"> 
			<input type="text" class="form-control" placeholder="Event Name" name="ename" required>
		</div>
		
		<label for="edate"><b>Date</b></label>
		<div class="form-group col-sm-5"> 
			<input type="date" class="form-control" placeholder="Enter Date" name="edate" required>
		</div>
		
		<label for="eduration"><b>Duration</b></label>
        <div class="form-group col-sm-5">
			<input type="number" class="form-control" placeholder="Enter Duration" name="eduration" required>
		</div>
		
		
		<label for="etime"><b>Time</b></label>
		<div class="form-group col-sm-5">
		    <input type="time" class="form-control" placeholder="Enter Time" name="etime" required>
		</div>
		
        <div class="form-group col-sm-5" id = "timehints">
		</div>
		<br>
		
		<label for="elocation"><b>Location</b></label>
		<div class="form-group col-sm-5">
			<input type="text" class="form-control" placeholder="Enter Location" name="elocation" required>
		</div>
		<br>
		
		<label  for="edescription"><b>Description</b></label>
		<div class="form-group col-sm-5"> 
			<input type="text" class="form-control" placeholder="Enter Event Description" name="edescription" required>
		</div>
		<br>
		<button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase col-sm-5">Done</button>
	  
	</form>
	<!-- END of form used to log in --></p>
    </div>
  </div>
</div>

	<script type="text/javascript">
		//TODO if organizer button is checked, check if user is organizer, and send to organizer interface **************
			 $(document).ready(function(){
                timehints = document.getElementById("timehints");
                timehints.innerHTML= "<button class='btn btn-lg btn-primary btn-block text-uppercase col-sm-12'>3:30 - 5:30 PM (2 unavailable) </button>"+
                    "<button class='btn btn-lg btn-primary btn-block text-uppercase col-sm-12'>6:00 - 7:00 PM (3 unavailable)</button>";
                
            });
		//TODO if  organizer button is NOT checked, send to user interface *******************************
	</script>
    

    

    	



	

</body>
</html>
