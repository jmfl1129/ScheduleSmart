<?php
session_start();
if(!empty($_GET['id'])){
	$db = parse_url(getenv("DATABASE_URL"));
  $conn = new PDO("pgsql:". sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
    ));
	
	$q = "SELECT * FROM events WHERE id = :id;";
	$query = $conn->prepare($q);
	$query->bindValue(':id', $_GET['id']);
	$result = $query->execute();
	
	if($result)
		$row = $query->fetch(\PDO::FETCH_ASSOC);
	else{
		
		$message = "Internal error";
		echo "<script
			type='text/javascript'>alert('$message'); 
			 </script>";
	}
		  
}
?>