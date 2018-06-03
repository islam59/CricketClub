
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Sponsor Options !
                            <a href="<?php echo base_url(); ?>index.php/Sponsoroption/Sponsor" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url(); ?>index.php/Sponsoroption/SponsorAdd" class="btn btn-sm btn-primary pull-right" style="border-radius: 0px;"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Sponsor</a>
                        </h2>   
                    <h5>Wellcome to Sponsor's Control Options !</h5>
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
                             Sponsor List !
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                                        <tr>
                                            <th>Sl</th>
                                            <th>Sponsor's</th>
                                            <th></th>
                                            <th style="text-align: right;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $i = 0; foreach ($sponsors as $sponsor) { $i++; ?>
 <tr class="odd gradeX">
    <td style="line-height: 70px;"><?php echo $i; ?></td>
    <td><img src="<?php echo base_url(); ?>assist/images/sponsor/<?php echo $sponsor->sponsor_logo; ?>" style="width:100px; height:70px;"></td>
    <td style="line-height: 70px;"><?php echo $sponsor->link; ?></td>

    <td style="text-align: right; line-height: 70px;">
        <a href="<?php echo base_url(); ?>index.php/Sponsoroption/SponsorUpdate/<?php echo $sponsor->id; ?>" class="btn btn-sm btn-warning" style="border-radius: 0px;">Edit</a>
        
        <a href="<?php echo base_url(); ?>index.php/Sponsoroption/SponsorDelete/<?php echo $sponsor->id; ?>/<?php echo $sponsor->sponsor_logo; ?>" class="btn btn-sm btn-danger" style="border-radius: 0px;">Delete</a>
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

