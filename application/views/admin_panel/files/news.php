
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            News Options !
                            <a href="<?php echo base_url('index.php/Newsoption/News'); ?>" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('index.php/Newsoption/AddNews'); ?>" class="btn btn-sm btn-primary pull-right" style="border-radius: 0px;"><i class="fa fa-plus-square" aria-hidden="true"></i> Add News</a>
                        </h2>   
                    <h5>Wellcome to News Control Options !</h5>
<?php $msg = $this->session->flashdata('msg'); if(isset($msg)){ echo $msg; } ?><!--===Confirmation message==-->
<?php if(isset($addform)){ echo $addform; } ?><!--===form included==-->

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             News List Table !
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Login</th>
                                             <th>Images</th>
                                            <th>News Title</th>                                           
                                            <th style="text-align: right;">Position</th>
                                            <th style="text-align: right;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php  $i = 0; foreach($Newses as $News){  $i++; ?>
    <tr class="odd gradeX">
        <td style="line-height: 50px;"><?php echo $i; ?></td>
        <td><img src="<?php echo base_url(); ?>assist/images/news/<?php echo $News->news_image; ?>" alt="N/A" style="width:100px; height:50px;"></td>
        <td style="line-height: 50px;"><?php echo $News->news_title; ?></td>
        <td style="text-align: right; line-height: 50px;">
<?php 
	$type = $News->type; 
	if($type==2){
?>
<a href="<?php echo base_url('index.php/Newsoption/PositionLeft'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Left</a>
<a href="<?php echo base_url('index.php/Newsoption/PositionCenter'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Center</a>
<a href="" class="btn btn-xs btn-success" style="border-radius: 0px;">Right</a>
<?php 
	}elseif($type==3){
?>
<a href="" class="btn btn-xs btn-success" style="border-radius: 0px;">Left</a>
<a href="<?php echo base_url('index.php/Newsoption/PositionCenter'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Center</a>
<a href="<?php echo base_url('index.php/Newsoption/PositionRight'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Right</a>
<?php 
	}else{
?>
<a href="<?php echo base_url('index.php/Newsoption/PositionLeft'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Left</a>
<a href="" class="btn btn-xs btn-success" style="border-radius: 0px;">Center</a>
<a href="<?php echo base_url('index.php/Newsoption/PositionRight'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">Right</a>
<?php 
	}
?>
        </td>
                                            <td style="text-align: right; line-height: 50px;">
<a href="<?php echo base_url(); ?>index.php/Userprofile/userprofileView/<?php echo $News->id; ?>" class="btn btn-xs btn-primary" style="border-radius: 0px;">Click On SiteView</a>
<a href="<?php echo base_url('index.php/Newsoption/EditNews'); ?>/<?php echo $News->id; ?>" class="btn btn-xs btn-warning" style="border-radius: 0px;">Edit</a>
<a href="<?php echo base_url('index.php/Newsoption/NewsRemove'); ?>/<?php echo $News->id; ?>/<?php echo $News->news_image; ?>" class="btn btn-xs btn-danger" style="border-radius: 0px;">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


        </div>
               
    </div>

