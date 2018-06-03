
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Management Options !
                            <a href="<?php echo base_url('index.php/Managementoptions/Management'); ?>" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>

                        </h2>   
                    <h5>Wellcome to Management Control Options !</h5>
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
      <img src="<?php echo base_url('assist/images/management/'); ?><?php echo $management->image; ?>" alt="" style="width:100%; height:200px;">
      <div class="caption">
        <h3><?php echo $management->name; ?> <small>
        <br/><?php echo $management->title; ?></small></h3>
        <p>
            <a href="<?php echo base_url('index.php/Managementoptions/ManagementUpdate/'); ?><?php echo $management->id; ?>" class="btn btn-warning btn-sm" style="border-radius: 0px;" >Update</a>
            <a href="<?php echo base_url('index.php/Managementoptions/RemoveProfile/'); ?><?php echo $management->id; ?>/<?php echo $management->image; ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" >Remove</a>  
        </p>
      </div>
    </div>
  </div>
<?php 
    }
?>

   <div class="col-sm-12 col-md-4">
    <div class="thumbnail" style="background: rgba(0,0,0,0.9); border-radius: 0px; color: white;">
        <h3 style="color:teal; "> &nbsp; Add New Profile </h3><hr/>
        <div class="form">
            <?php echo form_open_multipart('Managementoptions/ManagementAddForm'); ?>
              <div class="form-group">
                <label for="exampleInputEmail1">Profile Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name !" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Profile Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title !" style="border-radius: 0px;">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input <span style="color: red; font-size:10px;">( File Type- JPEG, JPG OR PNG )</span></label>
                <input name="image" type="file" id="exampleInputFile" class="form-control" style="border-radius: 0px;">
              </div>
              <button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px;">Add New !</button>
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

