<?php

if(!empty($_GET['id'])){
	
	$q1 = "SELECT * FROM events WHERE id = :id;";
	$query1 = $conn->prepare($q);
	$query1->bindValue(':id', $_GET['id']);
	$result5 = $query1->execute();
	
	if($result5)
		$row_m = $query1->fetch(\PDO::FETCH_ASSOC);
	else{
		
		$message = "Internal error";
		echo "<script
			type='text/javascript'>alert('$message'); 
			 </script>";
	}
		  
}
?>