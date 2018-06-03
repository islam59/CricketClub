<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Social Link Control Options !
                    <a href="<?php echo base_url(); ?>index.php/Siteoption/Copypower" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                </h2>   
                <h5>Copyright & Power Content Control Options !</h5>
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
                            <div class="col-md-9">
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Facebook" method="post">
                                    <div class="form-group">
                                        <label>Facebook Page Links !</label>
                                        <input type="text" name="facebook" class="form-control" value="<?php echo $copypower->facebook; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Facebook !</button>
                                </form>
                                <hr/>
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Twitter" method="post">
                                    <div class="form-group">
                                        <label>Twitter Page Links !</label>
                                        <input type="text" name="twitter" class="form-control" value="<?php echo $copypower->twitter; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Twitter !</button>
                                </form>
                                <hr/>
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Youtube" method="post">
                                    <div class="form-group">
                                        <label>Youtube Channel Links !</label>
                                        <input type="text" name="youtube" class="form-control" value="<?php echo $copypower->youtube; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Youtube !</button>
                                </form>
                                <hr/>
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Instagram" method="post">
                                    <div class="form-group">
                                        <label>Instagram Links !</label>
                                        <input type="text" name="instagram" class="form-control" value="<?php echo $copypower->instagram; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Instagram !</button>
                                </form>
    						</div>
                               
                            <div class="col-md-3" >
                                <div class="panel panel-back noti-box pull-right" style="background: #ba3c0e; transform:rotate(-50deg);">
                                    <span class="icon-box  set-icon" style="animation: sun 5s infinite; animation-timing-function: linear; margin:0px; padding:0px;"><a href="<?php echo $copypower->facebook; ?>" target="_blank">
                                        <i class="fa fa-facebook"></i></a>
                                    </span>
                                </div>

                                <div class="panel panel-back noti-box pull-right" style="background: #3b3baf; transform:rotate(0deg);">
                                    <span class="icon-box  set-icon" style="animation: sun 5s infinite; animation-timing-function: linear; margin:0px; padding:0px;"><a href="<?php echo $copypower->twitter; ?>" target="_blank">
                                        <i class="fa fa-twitter"></i></a>
                                    </span>
                                </div>

                                <div class="panel panel-back noti-box pull-right" style="background: red; transform:rotate(0deg);">
                                    <span class="icon-box set-icon" style="animation: sun 5s infinite; animation-timing-function: linear; margin:0px; padding:0px;"><a href="<?php echo $copypower->youtube; ?>" target="_blank">
                                        <i class="fa fa-youtube"></i></a>
                                    </span>
                                </div>
                                <div class="panel panel-back noti-box pull-right" style="background: #27064f; transform:rotate(50deg);">
                                    <span class="icon-box set-icon" style="animation: sun 5s infinite; animation-timing-function: linear; margin:0px; padding:0px;"><a href="<?php echo $copypower->instagram; ?>" target="_blank">
                                        <i class="fa fa-instagram"></i></a>
                                    </span>
                                </div>
    						</div>

  
                        </div>
                    </div>
                </div><!-- End Form Elements -->
                    <div class="alert alert-info" style="margin-top:4%;">
                       <b>Notice # </b>
                       The section copyright must need to included. If you want to ignore it !! The visual of website footer's looks like not pretty !!
                    </div>
            </div>
        </div>
	</div><!-- /. PAGE INNER  -->
</div>

