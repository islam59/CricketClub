
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Slider Control Options !
                            <a href="<?php echo base_url('index.php/Slideroptions/Slider'); ?>" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>

                        </h2>   
                    <h5>Wellcome to Slider Control Options !</h5>
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->


                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default row">
                        <div class="panel-heading">
                             News List Table !
                        </div>
                        <div class="panel-body" style="">
                          <?php if(isset($manForm)){ echo $manForm; } ?><!--===form included==-->
                        </div>
                        <hr/>

                        <div class="row">
<?php 
    foreach ($managements as $management) {
?>
 <div class="col-sm-12 col-md-4">
    <div class="thumbnail" style="border-radius: 0px; ">
      <img src="<?php echo base_url('assist/images/slider/'); ?><?php echo $management->images; ?>" alt="" style="width:100%; height:200px;">
      <div class="caption">
        <p>
            <a href="<?php echo base_url('index.php/Slideroptions/GalleryUpdate/'); ?><?php echo $management->id; ?>" class="btn btn-warning btn-sm" style="border-radius: 0px;" >Update</a>
            <a href="<?php echo base_url('index.php/Slideroptions/RemoveProfile/'); ?><?php echo $management->id; ?>/<?php echo $management->images; ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" >Remove</a>  
        </p>
      </div>
    </div>
  </div>
<?php 
    }
?>

   <div class="col-sm-12 col-md-4">
    <div class="thumbnail" style="background: rgba(0,0,0,0.9); border-radius: 0px; color: white;">
        <div class="form">
            <?php echo form_open_multipart('Slideroptions/GalleryAddForm'); ?>
              <div class="form-group">
                <label for="exampleInputFile">Upload <span style="color: red; font-size:10px;"> ( File Type- JPEG, JPG OR PNG )</span></label>
                <input name="images" type="file" id="exampleInputFile" class="form-control" style="border-radius: 0px;">
              </div>
              <button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px;">Uploads !</button>
            </form>
        </div>
    </div>
  </div>                          
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


        </div>
               
    </div>

