
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Match Schedule Options !
                            <a href="<?php echo base_url('index.php/Scheduleoptions/Schedule'); ?>" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>

                            <a href="<?php echo base_url('index.php/Scheduleoptions/ScheduleAdd'); ?>" class="btn btn-sm btn-primary pull-right" style="border-radius: 0px;"><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp; Add New Schedule</a>
                        </h2>   
                    <h5>Wellcome to Match Schedule Control Options !</h5>
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
                             Schedule List Table !
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sl#</th>
                                            <th>Team1 Vs. Team2</th>
                                            <th>Venue</th>                                           
                                            <th>Date</th>
                                            <th>Time</th>                                            
                                            <th style="text-align: right;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php  $i = 0; foreach($schedules as $schedule){  $i++; ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><b><?php echo $schedule->teamone; ?></b> Vs. <b><?php echo $schedule->teamtwo; ?></b></td>
        <td><?php echo $schedule->venue; ?></td>
        <td><?php echo $schedule->date; ?></td>
        <td><?php echo $schedule->time; ?></td>
        <td style="text-align: right; ">
            <a href="<?php echo base_url('index.php/Scheduleoptions/ScheduleEdit/'); ?><?php echo $schedule->id; ?>" class="btn btn-xs btn-warning" style="border-radius: 0px;">Edit</a>
            <a href="<?php echo base_url('index.php/Scheduleoptions/RemoveSchedule/'); ?><?php echo $schedule->id; ?>" class="btn btn-xs btn-danger" style="border-radius: 0px;">Delete</a>
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

