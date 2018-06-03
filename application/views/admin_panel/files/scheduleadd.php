<form action="<?php echo base_url('index.php/Scheduleoptions/ScheduleAddForm'); ?>" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> ADD NEW MATCH SCHEDULE !
		</center></h3>

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Team One</label>
    <div class="col-sm-4">
      <input type="text" name="teamone" class="form-control" id="username" placeholder="Enter Team One !" style="border-radius: 0px;" required="">
    </div>
    <label for="team2" class="col-sm-2 control-label">TeamTWO</label>
    <div class="col-sm-4">
      <input type="text" name="teamtwo" class="form-control" id="team2" placeholder="Enter Team Two !" style="border-radius: 0px;" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Venue</label>
    <div class="col-sm-10">
      <input type="text" name="venue" class="form-control" id="password" placeholder="Enter Venue & Address !" style="border-radius: 0px;" required="">
    </div>
  </div>

  <div class="form-group">
      <label for="role" class="col-sm-2 control-label">Match Time</label>
      <div class="col-sm-3">
        <input type="text" name="time" class="form-control" placeholder="Enter Time" required="">
      </div>
      <div class="col-sm-2">
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox1" name="unit" value="AM" required=""> AM
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox2" name="unit" value="PM" required=""> PM
          </label>
      </div>
    <label for="role" class="col-sm-2 control-label">Match Date</label>
    <div class="col-sm-3">
      <input type="date" name="date" class="form-control" required="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">ADD TO SCHEDULE !</button>
    </div>
  </div>
</form>