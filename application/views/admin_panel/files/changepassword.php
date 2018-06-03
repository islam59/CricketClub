<form action="<?php echo base_url(); ?>index.php/Userprofile/changePassword" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> Change Password		</center></h3>

  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-10">
      <input type="text" name="password" class="form-control" id="username" style="border-radius: 0px;" placeholder="Enter New Password !">
    </div>
  </div>
  <div class="form-group">
    <label for="c_password" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="c_password" name="c_password" class="form-control" id="c_password" style="border-radius: 0px;" placeholder="Confirm New Password !">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Change Password !</button>
    </div>
  </div>
</form>