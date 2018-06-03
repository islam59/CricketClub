<form action="<?php echo base_url('index.php/Scheduleoptions/ScheduleUpdateForm'); ?>" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> UPDATE MATCH SCHEDULE !
		</center></h3>

  <input type="hidden" name="id" value="<?php echo $scheduleById->id; ?>">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Team One</label>
    <div class="col-sm-4">
      <input type="text" name="teamone" class="form-control" id="username" style="border-radius: 0px;" value="<?php echo $scheduleById->teamone; ?>">
    </div>
    <label for="team2" class="col-sm-2 control-label">TeamTWO</label>
    <div class="col-sm-4">
      <input type="text" name="teamtwo" class="form-control" id="team2" style="border-radius: 0px;" required="" value="<?php echo $scheduleById->teamtwo; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Venue</label>
    <div class="col-sm-10">
      <input type="text" name="venue" class="form-control" id="password" style="border-radius: 0px;" required="" value="<?php echo $scheduleById->venue; ?>">
    </div>
  </div>

  <div class="form-group">
      <label for="role" class="col-sm-2 control-label">Match Time</label>
      <div class="col-sm-3">
        <input type="text" name="time" class="form-control" required="" value="<?php echo substr_replace($scheduleById->time," ",-2); ?>">
      </div>
      <div class="col-sm-2">
        <?php $u = substr($scheduleById->time,-2); //set u for am/pm ?>
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox1" name="unit" value="AM" <?php if($u == 'AM'){ echo 'checked'; } ?>> AM
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox2" name="unit" value="PM" <?php if($u == 'PM'){ echo 'checked'; } ?>> PM
          </label>
      </div>
    <label for="role" class="col-sm-2 control-label">Match Date</label>
    <div class="col-sm-3">
      <input type="date" name="date" class="form-control" required="" value="<?php echo $scheduleById->date; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">UPDATE SCHEDULE !</button>
    </div>
  </div>
</form>