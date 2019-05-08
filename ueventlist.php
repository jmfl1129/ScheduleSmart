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
	<script src="scripts/main.js"></script>


</head>
<meta charset="utf-8"/>
<body>

	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="/schedulesmart/organizer/myevents.php">ScheduleSmart</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="/schedulesmart/uevents.php">Event list<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/schedulesmart/umyevents.php">My events</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/schedulesmart/uoptions.php">Options</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<br>
	<br>
	<!-- END OF navigation bar on top -->

	
    
    <div class="container">

		<h1 align="center">Your upcoming events</h1>
		<br>
        
        <div class="row justify-content-md-center">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkOnlyFreeEvents">
                <label class="form-check-label" for="exampleCheck1">show only events when I'm free</label>
            </div>     
        </div>
        <br>

        <h3 align="center">Saturday, 10 May 2019</h3>
        <br>
        <!-- This holds all the events -->
		<div class="card-deck">
            <div class="row justify-content-md-center">
                <div> <h1>5PM</h1>  </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card h-200">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture1.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Chung Chi Chapel Service</h5>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture2.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Medicine Fair 2019</h5>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture3.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Meditation @ Learning Garden</h5>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <br>    
            
            <!-- second row of events at a different t ime -->
            <div class="row justify-content-md-center">
                <div> <h1>6PM</h1>  </div>
                
                <div class="col-3">
                  <div class="card h-200">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture4.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Student Expo</h5>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>     
                
                <div class="col-3">
                  <div class="card h-200">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture5.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Basketball with Jo <a class="badge badge-info">Private</a></h5>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-3">
                  <div class="card h-200">
                    <img class="card-img-top" src="/schedulesmartbak/images/Picture6.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">              
                            
                            <h5 class="card-title">CUSU Ball <a class="badge badge-info">CUSU</a></h5> 
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                  </div>
                </div>
                
                   
                
            </div>
            
        </div>
	</div>

	



	

</body>
</html>