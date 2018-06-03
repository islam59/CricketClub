<div class="form form-horizontal" role="form">
  <?php echo form_open_multipart('Sponsoroption/SponsorAddForm'); ?>
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			<i class="fa fa-plus-square" aria-hidden="true"></i> ADD NEW SPONSOR
		</center></h3>

  <div class="form-group">
    <label for="link" class="col-sm-2 control-label">Links !</label>
    <div class="col-sm-10">
      <input type="text" name="link" class="form-control" id="link" placeholder="Enter HTTP// Links !" style="border-radius: 0px;">
    </div>
  </div>

  <div class="form-group">
    <label for="role" class="col-sm-2 control-label">Upload Logo !</label>
    <div class="col-sm-10">
        <input type="file" name="sponsor_logo" class="form-control">
        <p style="color:red;">File Type will be PNG, JPG, JPEG this type !</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Save New Sponsor !</button>
    </div>
  </div>
</form>
</div>