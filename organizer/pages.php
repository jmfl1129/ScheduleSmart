<?php

	session_start();

	if(isset($_POST['Previous'])){
		if($_SESSION['page'] == 2)
			$_SESSION['page'] = 1;
		else if ($_SESSION['page'] == 3)
			$_SESSION['page'] = 2;
	}
	
	if(isset($_POST['1']))
		$_SESSION['page'] = 1;
	
	if(isset($_POST['2']))
		$_SESSION['page'] = 2;
	
	if(isset($_POST['3']))
		$_SESSION['page'] = 3;
	
	if(isset($_POST['Next'])){
		if($_SESSION['page'] == 1)
			$_SESSION['page'] = 2;
		else if ($_SESSION['page'] == 2)
			$_SESSION['page'] = 3;
	}
	
?>
		