
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            About Options -History!
                            <a href="<?php echo base_url(); ?>index.php/Aboutoption/History" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                        </h2>   
                    <h5>Wellcome to About's Data Control Options !</h5>
                    <?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             About Club Data | History
                        </div>
                        <div class="panel-body">
<div class="form form-horizontal">
<?php echo form_open_multipart('Aboutoption/HistoryUpdateForm'); ?>

    <div class="form-group">        
        <div class="col-sm-12">
            
            <center>
                <img src="<?php echo base_url(); ?>assist/images/about/<?php if(isset($aboutData)){ echo $aboutData->franchaizes_logo; } ?>" style="width:30%; height:40%; box-shadow: 0px 0px 2px teal; ">
            </center>
            <input type="hidden" name="old_logo" value="<?php if(isset($aboutData)){ echo $aboutData->franchaizes_logo; } ?>">
        </div>
    </div>
  </div>
  <div class="form-group">
    <label for="changelogo" class="col-sm-2 control-label">Change About Logo</label>
    <div class="col-sm-10">
      <input type="file" name="franchaizes_logo" class="form-control" style="border-radius: 0px;">
      <p style="color:red;">Image Must will be JPG, JPEG, PNG format !</p><br/>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Franchaizy's</label>
    <div class="col-sm-10">
        <textarea name="franchaizes_body" class="form-control" rows="14" style="border-radius: 0px">
            <?php if(isset($aboutData)){ echo $aboutData->franchaizes_body; } ?>
        </textarea>
        <p style="color:yellow;"> N. B. You Can Write in HTML Format, with HTML tag for Pretty Show !</p>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Coach</label>
    <div class="col-sm-10">
        <textarea name="coach_body" class="form-control" rows="14" style="border-radius: 0px">
            <?php if(isset($aboutData)){ echo $aboutData->coach_body; } ?>
        </textarea>
        <p style="color:teal;"> N. B. You Can Write in HTML Format, with HTML tag for Pretty Show !</p>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Sponsor's</label>
    <div class="col-sm-10">
        <textarea name="sponsor_body" class="form-control" rows="14" style="border-radius: 0px">
            <?php if(isset($aboutData)){ echo $aboutData->sponsor_body; } ?>
        </textarea>
        <p style="color:teal;"> N. B. You Can Write in HTML Format, with HTML tag for Pretty Show !</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Update About Content !</button>
    </div>
  </div>
</form>
</div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


        </div>
               
    </div>

