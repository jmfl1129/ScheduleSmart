<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<meta charset="utf-8"/>
<body>

	
	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <h1 class="navbar-brand" href="/schedulesmart">ScheduleSmart</h1>
	</nav>

	<br>
	<br>
	<!-- END OF navigation bar on top -->

	<div class="container" align="center">
		<h2>Log in</h2>
		<br>
		

		<!-- form used to log in -->
	<form>
	  <div class="form-group col-sm-5">
	    <label for="inputEmail">Email address</label>
	    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
	  </div>
	  <div class="form-group col-sm-5">
	    <label for="inputPassword">Password</label>
	    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
	  </div>
	  <div class="form-check col-sm-5">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="checkOrganizer">Sign in as organizer</label>
	  </div>
	  <br>
	  <button type="submit" class="btn btn-primary col-sm-5">Submit</button>
	  <br>
	  <br>
	  <button type="button" class="btn btn-primary col-sm-5" onclick="window.location.href='/schedulesmart/organizer/myevents.php'">
	  	DUMMY Organizer
	  </button>
	  <br>
	  <br>
	  <button type="button" class="btn btn-primary col-sm-5" onclick="window.location.href='/schedulesmart/ueventlist.php'">
	  	DUMMY User
	  </button>
	</form>
	<!-- END of form used to log in -->


	<script type="text/javascript">
		//TODO if organizer button is checked, check if user is organizer, and send to organizer interface **************

		//TODO if  organizer button is NOT checked, send to user interface *******************************
	</script>

	<div class="container">
    

    

    	



	

</body>
</html>