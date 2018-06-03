
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            User List 
                            <a href="<?php echo base_url(); ?>index.php/Userprofile/home" class="btn btn-sm btn-danger pull-right" style="border-radius: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url(); ?>index.php/Userprofile/userprofileForm" class="btn btn-sm btn-primary pull-right" style="border-radius: 0px;"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New User</a>
                        </h2>   
                    <h5>Wellcome to Userlist Control</h5>
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
                             Userprofile in Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Login</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th style="text-align: right;">Access</th>
                                            <th style="text-align: right;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach($users as $user){ ?>
                                        <tr class="odd gradeX">
                                            <td>
<?php if($user->login == 1){ ?>
<i class="fa fa-eye fa-2x" aria-hidden="true" style="animation: mymove 3s infinite; animation-timing-function: linear;" ></i> &nbsp; 
<i class="fa fa-eye fa-2x" aria-hidden="true" style="animation: mymove 3s infinite; animation-timing-function: linear;" ></i> 
<?php }else{ ?>
<i class="fa fa-eye fa-2x" aria-hidden="true"></i> &nbsp;  
<i class="fa fa-eye fa-2x" aria-hidden="true"></i> 
<?php } ?>
                                                    
                                            </td>
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->role; ?></td>
                                            <td style="text-align: right;">
<?php if($user->access==1){ ?>        
<a href="" class="btn btn-xs btn-info" style="border-radius: 0px;">ON</a>
<a href="<?php echo base_url(); ?>index.php/Userprofile/accessOFF/<?php echo $user->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">OFF</a>
<?php }else{ ?>
<a href="<?php echo base_url(); ?>index.php/Userprofile/accessON/<?php echo $user->id; ?>" class="btn btn-xs btn-default" style="border-radius: 0px;">ON</a>
<a href="" class="btn btn-xs btn-info" style="border-radius: 0px;">OFF</a>
<?php } ?>
                                            </td>
                                            <td style="text-align: right;">
<a href="<?php echo base_url(); ?>index.php/Userprofile/userprofileView/<?php echo $user->id; ?>" class="btn btn-xs btn-primary" style="border-radius: 0px;">View</a>
<a href="<?php echo base_url(); ?>index.php/Userprofile/passwordUpdate/<?php echo $user->id; ?>" class="btn btn-xs btn-warning" style="border-radius: 0px;">Edit</a>
<a href="<?php echo base_url(); ?>index.php/Userprofile/removeProfile/<?php echo $user->id; ?>" class="btn btn-xs btn-danger" style="border-radius: 0px;">Delete</a>
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

