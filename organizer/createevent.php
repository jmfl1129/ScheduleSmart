<?php
	//this page allows an organzer to create new events or update events using an edit button
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>Create event - ScheduleSmart</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/schedulesmart/theme/custom.css">

</head>
<meta charset="utf-8"/>
<body>
	<body>

	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="/schedulesmart/organizer/myevents.php">ScheduleSmart Org</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item ">
	        <a class="nav-link" href="/schedulesmart/organizer/myevents.php">My events</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="/schedulesmart/organizer/createevent.php">Create event<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/schedulesmart/organizer/members.php">Members</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/schedulesmart/organizer/options.php">Options</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<br>
	<br>
	<!-- END OF navigation bar on top -->

	<div class="container">

		
		<div class="container" align="center">
		<h1>Add event details</h1>
		<br>
		<div class="row"> 
			<div class="col-sm-2 offset-md-3"><label for="ename"><b>Name</b></label></div>
    		<div class="col-sm-2"><input type="text" placeholder="Enter Username" name="uname" required></div>
		</div>
		<br>
		<div class="row"> 
			<div class="col-sm-2 offset-md-3"><label for="edate"><b>Date</b></label></div>
    		<div class="col-sm-2"><input type="password" placeholder="Enter Password" name="psw" required></div>
		</div>
		<br>
		<div class="row"> 
			<div class="col-sm-2 offset-md-3"><label for="etime"><b>Time</b></label></div>
    		<div class="col-sm-2"><input type="password" placeholder="Enter Password" name="psw" required></div>
		</div>
		<br>
		<div class="row"> 
			<div class="col-sm-2 offset-md-3"><label for="elocation"><b>Location</b></label></div>
    		<div class="col-sm-2"><input type="password" placeholder="Enter Password" name="psw" required></div>
		</div>
		<br>
		<div class="row"> 
			<div class="col-sm-2 offset-md-5"><button type="submit" class="btn btn-primary btn-lg btn-block">Save</button></div>
		</div>
	</div>

		<script type="text/javascript">
			//if event already exists, autofill old information
		</script>

	</div>

	



	

</body>
</html>
	
</body>
</html>