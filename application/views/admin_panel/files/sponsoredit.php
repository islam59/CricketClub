<div class="form form-horizontal" role="form">
  <?php echo form_open_multipart('Sponsoroption/SponsorUpdateForm'); ?>
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> ADD NEW SPONSOR
		</center></h3>
  
  <div class="form-group">
    <label for="link" class="col-sm-2 control-label">Links !</label>
    <div class="col-sm-10">
      <input type="text" name="link" class="form-control" id="link" style="border-radius: 0px;" value="<?php echo $sponsorDataById->link;  ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="role" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <img src="<?php echo base_url(); ?>assist/images/sponsor/<?php if(isset($sponsorDataById)){ echo $sponsorDataById->sponsor_logo; } ?>" style="width:200px; height:120px; box-shadow: 0px 0px 2px teal;">
    </div>
    <input type="hidden" name="id" value="<?php if(isset($sponsorDataById)){ echo $sponsorDataById->id; } ?>">  
    <input type="hidden" name="old_logo" value="<?php if(isset($sponsorDataById)){ echo $sponsorDataById->sponsor_logo; } ?>">
  </div>

  <div class="form-group">
    <label for="role" class="col-sm-2 control-label">Change Logo !</label>
    <div class="col-sm-10">
        <input type="file" name="sponsor_logo" class="form-control">
        <p style="color:red;">File Type will be PNG, JPG, JPEG this type !</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Sponsor !</button>
    </div>
  </div>
</form>
</div>