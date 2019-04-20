<?php
?>

<!DOCTYPE html>
<html lang="en">
<head> <title>Members - SmartSchedule</title> </head>
<meta charset="utf-8"/>
<body>
	<h3>OpenSkedge Settings</h3>
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
	
</body>
</html>

<!-- reference from OpenSkedge -->
