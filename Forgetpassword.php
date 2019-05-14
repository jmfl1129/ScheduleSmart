<?php
function SendForgetPasswordEmail($email){
  $db = parse_url(getenv("DATABASE_URL"));
  $conn = new PDO("pgsql:". sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
    ));
	
  // check if the email have been used to register an account
  $q = 'SELECT FROM users WHERE email = :name;';
  $query = $conn->prepare($q);
  $query->bindValue(':name', $email);
  $result = $query->execute();
  if($result){
	  $result = $query->fetch(\PDO::FETCH_ASSOC);
	  $password = $result['password'];
	  $subject = 'Your password on ScheduleSmart';
	  $message = " Dear our faithful user, \r\n\r\n
					Here is your password: ${password}. \r\n
					Thank you for using ScheduleSmart! \r\n 
					Yours faithfully, \r\n
					ScheduleSmart developer";
	  mail($email, $subject, $message);
  }
  else{
	  
	  $message = "Wrong email";
	  echo "<script window.location.reload();\n
			type='text/javascript'>alert('$message'); 
			 </script>";
	  
  }
  
session_start();
if (isset($_POST['Submitemail'])){
    SendForgetPasswordEmail(htmlspecialchars($_POST['Email']));
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
	<form method="POST" action="Forgetpassword.php" class="form-signin">
	<h5> Please enter your registered email </h5>
	<br>
	  <div class="form-group">
	    <label for="email"></label>
	    <input type="text" class="form-control" id="inputName" name="Email" placeholder=" Email ">
	  </div>
	  <br>
	  <br>
	  <button type="submit" name="Submitemail" class="btn btn-lg btn-primary btn-block text-uppercase">Send the password to you through email</button>
	  <br>
	  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
	  <br>
      <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
             
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