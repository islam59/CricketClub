<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Cover Options -Teams & Manageents !
                    <a href="<?php echo base_url(); ?>index.php/Coveroption/Cover" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                </h2>   
                <h5>Teams & Management Cover Photo Control Options !</h5>
                <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
            </div>
        </div><!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Element Examples
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>assist/images/cover/<?php echo $logobackground->management; ?>" alt="logo" style="width:100%; min-height:300px; max-height:300px;">

                                <?php echo form_open_multipart('Coveroption/ChangeLogo'); ?>
                                	<input type="hidden" name="logoname" value="<?php echo $logobackground->management; ?>">
                                    <div class="form-group"><hr/>
                                    	<input type="file" name="logo">
                                    	<p style="color:red;">Logo Must Be in PNG format & Transparent !</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px;">Update Management Cover Photo !</button>
                                </form>

    						</div>
                                
                            <div class="col-md-6" action="" method="post">
                                <img src="<?php echo base_url(); ?>assist/images/cover/<?php echo $logobackground->team; ?>" alt="logo" style="width:100%; min-height:300px; max-height:300px; ">
                                <?php echo form_open_multipart('Coveroption/ChangeBackground'); ?>
                                	<input type="hidden" name="backgroundname" value="<?php echo $logobackground->team; ?>">
                                    <div class="form-group"><hr/>
                                        <input type="file" name="background_image">
                                        <p style="color:red;">Background Can Be in PNG, JPG, JPEG format !</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px;">Update Team Cover Photo !</button>
                                </form>
    						</div>
                        </div>
                    </div>
                </div><!-- End Form Elements -->
                    <div class="alert alert-info" style="margin-top:4%;">
                       <b>Notice # </b>
                       The section Logo must be image type and Transparent Image is Best for It. No Text or Title Supported !. If you want to ignore it !! The visual of website header's looks like not pretty !!
                    </div>
            </div>
        </div>
	</div><!-- /. PAGE INNER  -->
</div>

