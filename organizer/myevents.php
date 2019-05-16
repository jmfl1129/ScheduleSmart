<?php
session_start();
	$db = parse_url(getenv("DATABASE_URL"));
  $conn = new PDO("pgsql:". sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
    ));
	
?>




<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 
	
	<link rel="stylesheet" href="css/css_in_most_pages.css">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



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
          <a class="nav-link" href="organizer/members.php">My member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="organizer/createevent.php">Create my own event</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="organizer/options.php">Option</a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="organizer/myevents.php"> <?php echo $_COOKIE['name']; ?> </a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="logout.php">Log out</a>
		</li>
		
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
		
			<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Upcoming Event
  <br>
    <small>listed in pages( check it out now! )</small>
  </h1>

</div>

	<div class="container">
	  <div class="card border-0 shadow my-5">
		<div class="card-body p-5">
		  <h1 class="font-weight-light">Choose what you want</h1>
		  
		<div class="card-deck">
            <div class="row justify-content-md-center">
                <div> <h1>5PM</h1>  </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card h-200">
                    <img class="card-img-top" src="../images/Picture1.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Chung Chi Chapel Service</h5>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>

						</div>
                    </div>
				  </div>
                </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card">
                    <img class="card-img-top" src="../images/Picture2.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Medicine Fair 2019</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card">
                    <img class="card-img-top" src="../images/Picture3.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Meditation @ Learning Garden</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>
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
                    <img class="card-img-top" src="../images/Picture4.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Student Expo</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>
                        </div>
                    </div>
                  </div>
                </div>     
                
                <div class="col-3">
                  <div class="card h-200">
                    <img class="card-img-top" src="../images/Picture5.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title">Basketball with Jo <a class="badge badge-info">Private</a></h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-3">
                  <div class="card h-200">
                    <img class="card-img-top" src="../images/Picture6.png" alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">              
                            
                            <h5 class="card-title">CUSU Ball <a class="badge badge-info">CUSU</a></h5> 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Details
							</button>
                        </div>
                    </div>
                  </div>
                </div>
                
                   
                
            </div>
            
        </div>

		

	</div>

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
    </li>
  </ul>
  
		  <div class="row justify-content-md-center">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkOnlyFreeEvents">
                <label class="form-check-label" for="exampleCheck1">show only events when I'm free</label>
            </div>     
        </div>
		

<!-- /.container -->
  <footer id="sticky-footer" class="py-4 bg-light text-dark-50">
    <div class="container text-center">
      <small>ScheduleSmart</small>
    </div>
  </footer>


</div>
</div>

<!-- reference startbootstrap.com/snippets/full-image-background/
	 startbootstrap.com/snippets/portfolio-four-column/https://stackoverflow.com/questions/55350639/how-to-open-bootstrap-modal-using-a-button-click
	 https://mdbootstrap.com/docs/jquery/forms/search/
-->


<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Event details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Go back</button>
        <a type="button" class="btn btn-primary" href="takeaphoto_dude.php">Join</a>
      </div>
    </div>
  </div>
</div>

</body>

<script type="text/javascript">

</script>

</html>