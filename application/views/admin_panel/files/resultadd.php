<form action="<?php echo base_url('index.php/Resultoptions/ResultAddForm'); ?>" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> ADD NEW MATCH SCHEDULE !
		</center></h3>

  <div class="form-group">
    <label for="teamone" class="col-sm-2 control-label">Team One</label>
    <div class="col-sm-4">
      <input type="text" name="teamone" class="form-control" id="teamone" placeholder="Enter Team One !" style="border-radius: 0px;" required="">
    </div>
    <label for="team2" class="col-sm-2 control-label">TeamTWO</label>
    <div class="col-sm-4">
      <input type="text" name="teamtwo" class="form-control" id="team2" placeholder="Enter Team Two !" style="border-radius: 0px;" required="">
    </div>
  </div>
 
  <div class="form-group">
    <label for="toch" class="col-sm-2 control-label">Touch Winner </label>
    <div class="col-sm-4">
          <label class="checkbox-inline">
            <input type="radio" id="for" name="toch" value="1" required=""> Team One
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="toch" name="toch" value="2" required=""> Team Two
          </label>
    </div>

    <label for="inlineCheckbox1" class="col-sm-2 control-label">Choose To </label>
    <div class="col-sm-4">
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox1" name="role" value="BATTING" required=""> BATTING
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="inlineCheckbox2" name="role" value="BOWLING" required=""> BOWLING
          </label>
    </div>
  </div>

  <div class="form-group">
    <label for="toch" class="col-sm-2 control-label">Match Winner </label>
    <div class="col-sm-10">
          <label class="checkbox-inline">
            <input type="radio" id="for" name="winner" value="1" required=""> Team One
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="toch" name="winner" value="2" required=""> Team Two
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="toch" name="winner" value="STOPPED" required=""> Stopped
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="toch" name="winner" value="DRAW" required=""> Draw
          </label>
          <label class="checkbox-inline">
            <input type="radio" id="toch" name="winner" value="STUMP" required=""> STUMP
          </label>
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">WIN BY </label>
    <div class="col-sm-10">
      <input type="text" name="result" class="form-control" id="password" placeholder="ex- 4 Wickets / Runs / Innings etc !" style="border-radius: 0px;" required="">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">ADD TO RESULT !</button>
    </div>
  </div>
</form>