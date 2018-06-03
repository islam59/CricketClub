

  <div class="col-sm-12 col-md-8" style="box-shadow:0px 0px 20px red;">


        <div class="col-sm-12" style="padding: 10px 0px; width:45%; float:left;">
          <img src="<?php echo base_url('assist/images/management/'); ?><?php echo $profile->image; ?>" alt="N/A" class="img img-responsive" style="height: 250px;">
          <h2><?php echo $profile->name; ?></h2>
          <?php echo $profile->title; ?>
        </div>
        <div class="form col-sm-12" style="padding: 10px 0px; width:45%; float:right;">
          <h3 style="color:teal; "> &nbsp; Update Profile </h3><hr/>
            <?php echo form_open_multipart('Managementoptions/ManagementUpdateForm'); ?>
              <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
              <input type="hidden" name="old_image" value="<?php echo $profile->image; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Profile Name</label>
                <input name="name" type="text" value="<?php echo $profile->name; ?>" class="form-control" id="exampleInputEmail1" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Profile Title</label>
                <input name="title" type="text" value="<?php echo $profile->title; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Title !" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input <span style="color: red; font-size:10px;">( File Type- JPEG, JPG OR PNG )</span></label>
                <input name="image" type="file" id="exampleInputFile" class="form-control" style="border-radius: 0px;">
              </div>
              <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Profile !</button>
              <a href="<?php echo base_url('index.php/Managementoptions/Management'); ?>" class="btn btn-danger" style="border-radius:0px;">Cancel</a>
            </form>
        </div>
  </div> 