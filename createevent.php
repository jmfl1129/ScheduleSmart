<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> 

	<title>Create event - ScheduleSmart</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<meta charset="utf-8"/>
<body>
	
	 
	<h1>Add event details</h1>
	
	<form action='/createevent.php' method="post">
        <h5>Event title:</h5><input type="text" name="e_title" value=""><br><br>
        <h5>Featured photo:</h5><input type="file" name="e_photo"><br><br>
        <h5>Event Date: </h5><input type="date" name="e_date"><input type="time" name= "e_time">
        <h5>Event Venue: </h5><input type="text" name="e_venue" value="" size=100><br><br>
	<h5>Abstract: </h5><input type="text" name="e_abstract" value="" size=100><br><br>
        <h5>Vacancy: </h5> <input type="text" name="e_vacancy" value=""><br><br>
	<label for="Type" class="required">Type</label>
		<select id="Type" name="Types">         
			<option value="private"  selected="selected">Private</option>           
			<option value="public" >Public</option>           
		</select>
        <input type="submit" value="Submit">   <input type="reset" value="reset">
        </form>
</body>
</html>
