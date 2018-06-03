<div class="col-sm-12 col-md-2"></div>
<div class="col-sm-12 col-md-8" style="box-shadow: 0px 0px 10px teal; ">
    <div class="thumbnail" style=" border-radius: 0px; ">
                <img src="<?php echo base_url('assist/images/gallery/'); ?><?php echo $profile->image; ?>" alt="N/A" class="img img-responsive" style="height: 220px; width:100%;">
        <div class="form">
            <?php echo form_open_multipart('Galleryoptions/GalleryUpdateForm'); ?>
              <input type="hidden" name="old_image" value="<?php echo $profile->image; ?>">
              <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
              <div class="form-group">
                <label for="exampleInputFile" style="padding: 3px;">Change Image <span style="color: red; font-size:10px;"> ( File Type- JPEG, JPG OR PNG )</span></label>
                <input name="image" type="file" id="exampleInputFile" class="form-control" style="border-radius: 0px;">
              </div>
              <button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px;">Uploads !</button>
            </form>
        </div>
    </div>
  </div> 