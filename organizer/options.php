<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> 

    <title>Options - ScheduleSmart</title> 

    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<meta charset="utf-8"/>
<body>
	
    <!-- navigation bar on top -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/schedulesmart/organizer/myevents.php">ScheduleSmart Org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="/schedulesmart/organizer/myevents.php">My events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/schedulesmart/organizer/createevent.php">Create event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/schedulesmart/organizer/members.php">Members</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/schedulesmart/organizer/options.php">Options<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <!-- END OF navigation bar on top -->

    <!-- Options list -->
    <hr>
    <form action="/app/settings" method="post" >
        

        <div><label for="settings_brandName" class="required">Brand Name</label><input type="text" id="settings_brandName" name="settings[brandName]" required="required" value="OpenSkedge" /></div>
        <label for="settings_pruneAfter" class="required">Keep time clock data for</label>
        <div class="input-append">
            <input type="number" id="settings_pruneAfter" name="settings[pruneAfter]" required="required" class="span12" value="12" />
            <span class="add-on">weeks</span>
        </div>
        <div><label for="settings_weekStartDay" class="required">Week Start Day</label><select id="settings_weekStartDay" name="settings[weekStartDay]">            <option value="sunday"  selected="selected">Sunday</option>            <option value="monday" >Monday</option>            <option value="tuesday" >Tuesday</option>            <option value="wednesday" >Wednesday</option>            <option value="thursday" >Thursday</option>            <option value="friday" >Friday</option>            <option value="saturday" >Saturday</option></select></div>
        <div><label for="settings_weekStartDayClock" class="required">Week Start Day (Pay Period)</label><select id="settings_weekStartDayClock" name="settings[weekStartDayClock]">            <option value="sunday"  selected="selected">Sunday</option>            <option value="monday" >Monday</option>            <option value="tuesday" >Tuesday</option>            <option value="wednesday" >Wednesday</option>            <option value="thursday" >Thursday</option>            <option value="friday" >Friday</option>            <option value="saturday" >Saturday</option></select></div>
        <div><label for="settings_defaultTimeResolution" class="required">Default Time Resolution</label><select id="settings_defaultTimeResolution" name="settings[defaultTimeResolution]">            <option value="15 mins" >15 mins</option>            <option value="30 mins" >30 mins</option>            <option value="1 hour"  selected="selected">1 hour</option></select></div>
        <label for="settings_startHour" class="required">Schedule Start Hour</label>
        <div class="input-append bootstrap-timepicker">
            <input type="text" id="settings_startHour" name="settings[startHour]" required="required" class="span12" data-show-inputs="false" value="6:00 AM" />
            <span class="add-on"><i class="icon-time"></i></span>
        </div>
        <label for="settings_endHour" class="required">Schedule End Hour</label>
        <div class="input-append bootstrap-timepicker">
            <input type="text" id="settings_endHour" name="settings[endHour]" required="required" class="span12" data-show-inputs="false" value="8:00 PM" />
            <span class="add-on"><i class="icon-time"></i></span>
        </div>
        <div><label for="settings_massEmail">Mass Email Address (e.g. LISTSERV mailing list)</label><input type="email" id="settings_massEmail" name="settings[massEmail]" /></div><input type="hidden" id="settings__token" name="settings[_token]" value="u2f4915qLD2v58PtIqSrJz8tlR7hxm0AsmW0q09EJ3A" />

        <div class="form-actions">
            <button class="btn btn-primary" type="submit"><i class="icon-pencil icon-white"></i> Save Changes</button>
        </div>
    </form>
	<!-- END of Options list -->

</body>
</html>

<!-- reference from OpenSkedge -->
