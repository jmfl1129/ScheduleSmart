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
	
	$q = "SELECT * FROM events WHERE type = :name OR type = 'public';";
	$query = $conn->prepare($q);
	$query->bindValue(':name', $_COOKIE['organizer']);
	echo $_COOKIE['organizer'];
	$query->execute();
		  
	
?>




<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 
	
	<link rel="stylesheet" href="../css/css_in_most_pages.css">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>
<meta charset="utf-8"/>
<body>

	<!-- navigation bar on top -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
    <a class="navbar-brand" href="../index.php">ScheduleSmart Org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">My member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createevent.php">Create my own event</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="options.php">Option</a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="myevents.php"> <?php echo $_COOKIE['name']; ?> </a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../logout.php">Log out</a>
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
                <div> <h1>row 1</h1>  </div>
		  
		<?php 
			for ($i = 0; $i < ($_SESSION['page'] - 1) * 6; $i++){
				$row = $query->fetch(\PDO::FETCH_ASSOC);
			}
			
			$j = 0;
			
			while($row = $query->fetch(\PDO::FETCH_ASSOC) && $j < 3){
				echo $row['photolink'];
				echo $row['ename'];
				echo $row['type'];
				
		
		?>
		
                
                <div class="col-3 d-flex align-items-stretch">
                  <div class="card h-200">
                    <img class='card-img-top' src= <?php echo "'..". $row['photolink'] . "'"; ?> alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title"><?php echo $row['ename']; ?>
							<?php if($row['type'] != 'public') { ?>
							<a class="badge badge-info"><?php echo $row['type']; ?></a> <?php } ?> </h5>
							<a href="javascript:void(0);" data-href=<?php echo"getContent.php?id=${row['id']}"; ?> class="openPopup">Details</a>

						</div>
                    </div>
				  </div>
                </div>
				
			<?php $j++;
			} ?>
			
            </div>
            <br>    
            
            <!-- second row of events at a different t ime -->
            <div class="row justify-content-md-center">
                <div> <h1>row 2</h1>  </div>
                
				<?php while($row = $query->fetch(\PDO::FETCH_ASSOC) && $j < 6){
				
				?>
				
				<div class="col-3 d-flex align-items-stretch">
                  <div class="card h-200">
                    <img class="card-img-top" src= <?php echo  "'..". $row['photolink'] . "'"; ?> alt="Image not found ">
                    <div class="card-body">
                        <div class="col text-center">
                            <h5 class="card-title"><?php echo $row['ename']; ?>
							<?php if($row['type'] != 'public') { ?>
							<a class="badge badge-info"><?php echo $row['type']; ?></a> <?php } ?></h5>
							<a href="javascript:void(0);" data-href=<?php echo"getContent.php?id=${row['id']}"; ?> class="openPopup">Details</a>

						</div>
                    </div>
				  </div>
                </div>
				
			<?php $j++;
			} ?>
			
            </div>
            
        </div>

		

	</div>

  <!-- Pagination -->
  <form method="POST" action="myevents.php">
  
	  <ul class="pagination justify-content-center">
		<li class="page-item">
		  <button class="page-link" aria-label="Previous" name="Previous">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
			  </button>
		</li>
		<li class="page-item">
		  <button class="page-link" name="1">1</button>
		</li>
		<li class="page-item">
		  <button class="page-link" name="2">2</button>
		</li>
		<li class="page-item">
		  <button class="page-link" name="3">3</button>
		</li>
		<li class="page-item">
		  <button class="page-link" name="Next" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
			  </button>
		</li>
	  </ul>
  
  </form>
  
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
	 startbootstrap.com/snippets/portfolio-four-column/https://www.codexworld.com/bootstrap-modal-dynamic-content-jquery-ajax-php-mysql/
	 https://mdbootstrap.com/docs/jquery/forms/search/
-->


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Events detail:</h4>
            </div>
            <div class="modal-body">
				<?php echo '<h4>'.$row_m['ename'].'</h4>';
					  echo '<p> abstract: '.$row_m['abstract'].'</p>';
					  echo '<img src= \''. $row_m['photolink'].'\'>';
					  echo '<p> type: '.$row_m['type'].'</p>';
					  echo '<p> venue: '.$row_m['venue'].'</p>';
					  echo '<p> time: '.$row_m['time'].'</p>';
					  echo '<p> vacancies: '.$row_m['vacancies'].'</p>';
					  echo '<p> duration: '.$row_m['duration'].'</p>';
					  echo '<p> date: '.$row_m['date'].'</p>';
				?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Go back</button>
				<a type="button" class="btn btn-primary" href="takeaphoto_dude.php">Join</a>
            </div>
        </div>
      
    </div>
</div>

</body>

<?php

include 'getContent.php';
include 'pages.php';

?>

<script type="text/javascript">
	$(document).ready(function(){
    $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#myModal').modal({show:true});
        });
    }); 
});
</script>

</html>