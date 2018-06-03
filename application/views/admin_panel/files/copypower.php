<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Copyright & Power Options !
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
                            <div class="col-md-6">
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Copyright" method="post">
                                    <div class="form-group">
                                        <label>Copyright Text !</label>
                                        <input type="text" name="copyright" class="form-control" value="<?php echo $copypower->copyright; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                        <p class="help-block">'Copyright &copy ' Already Included in Static Method !</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Copyright !</button>
                                </form>

    						</div>
                                
                            <div class="col-md-6" action="" method="post">
                                <form action="<?php echo base_url(); ?>index.php/Siteoption/Power" method="post">
                                    <div class="form-group">
                                        <label>Power Text !</label>
                                        <input type="text" name="powered_by" class="form-control" value="<?php echo $copypower->powered_by; ?>" style="border-radius: 0px; margin-top:1%;"/>
                                        <p class="help-block">'Powered By # ' Already Included in Static Method !</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update Power !</button>
                                </form>
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

