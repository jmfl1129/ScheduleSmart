<?php
function login($email, $password){
  $db = parse_url(getenv("DATABASE_URL"));
  $conn = new PDO("pgsql:". sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
    ));
	
  // check if the email is wrong or not
  $q = 'SELECT FROM users WHERE email = :name;';
  $query = $conn->prepare($q);
  $query->bindValue(':name', $email);
  $query->execute();
  if($query->rowCount() == 0){
	  $message = "This email is not validate. Please signup with it or check if the email is wrong";
	  echo "<script window.location.reload();\n
			type='text/javascript'>alert('$message'); 
			 </script>";
  }
  
  else{
  
	  // check for login successful or not
	  $q = 'SELECT * FROM users WHERE email = :name AND password = :password;';
	  $query = $conn->prepare($q);
	  $query->bindValue(':name', $email);
	  $query->bindValue(':password', $password);
	  $query->execute();
	  if($query->rowCount() == 0){
		  $message = "Login unsuccessfully";
		  echo "<script window.location.reload();\n
				type='text/javascript'>alert('$message'); 
				 </script>";
	  }
	  else{
		if($row = $query->fetch(\PDO::FETCH_ASSOC)){
			setcookie('logged', '', time() - 3600);
			setcookie('email', '', time() - 3600);
			setcookie('id', '', time() - 3600);
			setcookie('logged', 'true', time() + (86400 * 30), "/");
			setcookie('email', $email, time() + (86400 * 30) , "/");
			setcookie('id', $row['id'], time() + (86400 * 30) , "/");
			setcookie('name', $row['name'], time() + (86400 * 30) , "/");
			header('Location: index.php'); 
		}
		  
	  }
  
  }
}

session_start();
if (isset($_POST['login'])){
    login(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>ScheduleSmart</title> 

	<link rel="stylesheet" href="css/css_in_most_pages.css">
	<link rel="stylesheet" href="css/css_login.css">

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
    <a class="navbar-brand" href="index.php">ScheduleSmart Org</a>
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
		  <a class="nav-link" href="login.php">Sign in</a>
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
  <h1 class="my-4">Login Now!!
  <br>
    <small>check your user mode(s)</small>
  </h1>

</div>


	<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
	<div class="container" align="center">
		

		<!-- form used to log in -->
	<form method="POST" action="login.php" class="form-signin">
	<h5> Please enter your email address and password </h5>
	<br>
	  <div class="form-group col-sm-5">
	    <label for="inputEmail"></label>
	    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email address">
	  </div>
	  <div class="form-group col-sm-5">
	    <label for="inputPassword"></label>
	    <input type="password" class="form-control" name="password" placeholder="Password">
	  </div>
	  <br>
	  <br>
	  <button type="submit" name= "login" class="btn btn-lg btn-primary btn-block text-uppercase col-sm-5" >Submit</button>
	  <br>
	  <a class="btn btn-lg btn-primary btn-block text-uppercase col-sm-5" href = "sscreateaccount.php">Sign up</a>
	  <br>
	  <button class="btn btn-lg btn-google btn-block text-uppercase col-sm-5" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
	  <br>
      <button class="btn btn-lg btn-facebook btn-block text-uppercase col-sm-5" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
             
	</form>
	<!-- END of form used to log in --></p>
    </div>
  </div>
</div>

	<script type="text/javascript">
		//TODO if organizer button is checked, check if user is organizer, and send to organizer interface **************

		//TODO if  organizer button is NOT checked, send to user interface *******************************
	</script>
    

    

    	



	

</body>
</html>