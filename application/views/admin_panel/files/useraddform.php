<form action="<?php echo base_url(); ?>index.php/Userprofile/useraddform" method="post" class="form-horizontal" role="form">
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> ADD NEW USER
		</center></h3>

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username !" style="border-radius: 0px;">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password !" style="border-radius: 0px;">
    </div>
  </div>
  <div class="form-group">
    <label for="role" class="col-sm-2 control-label">Select Role</label>
    <div class="col-sm-10">
      <select name="role" class="form-control" id="role" style="border-radius: 0px;">
      	<option value="">Select User Role !</option>
      	<option value="ADMIN">ADMIN</option>
      	<option value="EDITOR">EDITOR</option>
      	<option value="SCORER">SCORER</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Save As User</button>
    </div>
  </div>
</form>