

  <div class="col-sm-12 col-md-8" style="box-shadow:0px 0px 20px red;">


        <div class="col-sm-12" style="padding: 10px 0px; width:45%; float:left;">
          <img src="<?php echo base_url('assist/images/teams/'); ?><?php echo $profile->image; ?>" alt="N/A" class="img img-responsive" style="height: 250px;">
          <h2><?php echo $profile->name; ?></h2>
          <?php echo $profile->type; ?>
        </div>
        <div class="form col-sm-12" style="padding: 10px 0px; width:45%; float:right;">
          <h3 style="color:teal; "> &nbsp; Update Profile </h3><hr/>
            <?php echo form_open_multipart('Teamsoptions/TeamUpdateForm'); ?>
              <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
              <input type="hidden" name="old_image" value="<?php echo $profile->image; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Player Name</label>
                <input name="name" type="text" value="<?php echo $profile->name; ?>" class="form-control" id="exampleInputEmail1" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Player Type !</label>
                <select name="type" class="form-control" style="border-radius: 0px;">
                  <option value="">Select Player Type !</option>
                  <option value="BATSMAN" <?php if($profile->type == 'BATSMAN'){ echo 'selected'; } ?>>BATSMAN</option>
                  <option value="BOWLER"  <?php if($profile->type == 'BOWLER'){ echo 'selected'; } ?>>BOWLER</option>
                  <option value="WK-BATSMAN"  <?php if($profile->type == 'WK-BATSMAN'){ echo 'selected'; } ?>>WK-BATSMAN</option>
                  <option value="C WK-BATSMAN"  <?php if($profile->type == 'C WK-BATSMAN'){ echo 'selected'; } ?>>C WK-BATSMAN</option>
                  <option value="C ALL-ROUNDER"  <?php if($profile->type == 'C ALL-ROUNDER'){ echo 'selected'; } ?>>C ALL-ROUNDER</option>
                  <option value="C BATSMAN"  <?php if($profile->type == 'C BATSMAN'){ echo 'selected'; } ?>>C BATSMAN</option>
                  <option value="C BOWLER"  <?php if($profile->type == 'C BOWLER'){ echo 'selected'; } ?>>C BOWLER</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input <span style="color: red; font-size:10px;">( File Type- JPEG, JPG OR PNG )</span></label>
                <input name="image" type="file" id="exampleInputFile" class="form-control" style="border-radius: 0px;">
              </div>
              <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Profile !</button>
              <a href="<?php echo base_url('index.php/Teamsoptions/Team'); ?>" class="btn btn-danger" style="border-radius:0px;">Cancel</a>
            </form>
        </div>
  </div> 