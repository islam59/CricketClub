<div class="form form-horizontal">
<?php echo form_open_multipart('Newsoption/NewsUpdateForm'); ?>
		<h3 style="background: teal; color:white; padding: 5px;"><center>
			Update News !
		</center></h3>

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><sup style="color:red;">*</sup>News Title#</label>
    <div class="col-sm-10">
      <input type="text" name="news_title" class="form-control" id="username" style="border-radius: 0px;" value="<?php echo $NewsData->news_title; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="role" class="col-sm-2 control-label"><sup style="color:red;">*</sup>Select Position #</label>
    <div class="col-sm-10">
      <select name="type" class="form-control" id="role" style="border-radius: 0px;">
      	<option value="">Select News Positions !</option>
      	<option value="3" <?php if($NewsData->type == 3){ echo 'selected'; }?> >LEFT</option>
      	<option value="7" <?php if($NewsData->type == 7){ echo 'selected'; }?>>CENTER</option>
      	<option value="2" <?php if($NewsData->type == 2){ echo 'selected'; }?>>RIGHT</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <img src="<?php echo base_url(); ?>assist/images/news/<?php echo $NewsData->news_image; ?>" alt="N/A" style="width:100%; height: 250px; box-shadow: 0px 0px 12px teal;">
      <input type="text" name="old_image" value="<?php echo $NewsData->news_image; ?>">
      <input type="text" name="id" value="<?php echo $NewsData->id; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Change Image# </label>
    <div class="col-sm-10">
      <input type="file" name="news_image" class="form-control"  style="border-radius: 0px; background: gray;">
      <p style="color:red;"> Image File Format Must Be any of these - JPG, PNG, JPEG !</p>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label"><sup style="color:red;">*</sup>News Content #</label>
    <div class="col-sm-10">
      <textarea name="news_body" class="form-control" rows="8" style="border-radius: 0px; text-align: justify;" >
        <?php echo $NewsData->news_body; ?>
      </textarea>
      <p style="color:teal">N.B. For Pretty Show; You Can Use the Html tag in your Content !</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update News</button>
      <a href="<?php echo base_url('index.php/Newsoption/News'); ?>" type="submit" class="btn btn-danger" style="border-radius: 0px;">Cancel</a>
    </div>
  </div>
</form>
</div>
