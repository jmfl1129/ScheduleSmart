<?php

if(!empty($_GET['id'])){
	
	$q = "SELECT * FROM events WHERE id = :id;";
	$query = $conn->prepare($q);
	$query->bindValue(':id', $_GET['id']);
	$result = $query->execute();
	
	if($result)
		$row_m = $query->fetch(\PDO::FETCH_ASSOC);
	else{
		
		$message = "Internal error";
		echo "<script
			type='text/javascript'>alert('$message'); 
			 </script>";
	}
		  
}
?>