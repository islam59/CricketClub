<div style="width:100%; margin:0px auto; padding:4% 10%;" class="alert-success"> 
    <strong>Username  # </strong><?php if(isset($profile)){ echo $profile->username;  } ?><br/>
    <strong>User Role # </strong><?php if(isset($profile)){ echo $profile->role;  } ?><br/>
    <strong>Access    # </strong><?php if(isset($profile)){ if($profile->access==1){ echo 'ON';}else{ echo 'OFF'; }  } ?><br/>
    <strong>Created By# </strong><?php if(isset($profile)){ echo $profile->created_by;  } ?>
</div>