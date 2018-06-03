<form action="<?php echo base_url('index.php/Resultoptions/ResultUpdateForm'); ?>" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> Update Match Schedule !
		</center></h3>

  <input type="hidden" name="id" value="<?php echo $resultdata->id; ?>">
  <div class="form-group">
    <label for="teamone" class="col-sm-2 control-label">Team One</label>
    <div class="col-sm-10">
      <input type="text" name="teamone" class="form-control" id="teamone" style="border-radius: 0px;" required="" value="<?php  echo $resultdata->teamone; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="team2" class="col-sm-2 control-label">Team Two</label>
    <div class="col-sm-10">
      <input type="text" name="teamtwo" class="form-control" id="team2" style="border-radius: 0px;" required="" value="<?php  echo $resultdata->teamtwo; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Touch Result</label>
    <div class="col-sm-10">
      <input type="text" name="touch" class="form-control" id="password" style="border-radius: 0px;" required="" value="<?php  echo $resultdata->touch; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="Result" class="col-sm-2 control-label">Match Result</label>
    <div class="col-sm-10">
      <input type="text" name="result" class="form-control" id="Result" style="border-radius: 0px;" required="" value="<?php  echo $resultdata->result; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Result !</button>
    </div>
  </div>
</form>