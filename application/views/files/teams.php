<!--*******************************************************************************************************************-->
<section class="section-about container clearfix" id="about">
		<div class="about-header col-sm-12 col-md-12 col-lg-12 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="" class="">			
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3 clearfix  wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
				<div class="schedule-header" style="margin-bottom: 10px;">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Managements
				</div>
				<!--***********-->
<?php 
	foreach ($managementData as $Mdata) {
?>
				<div class="row">
				  <div class="col-sm-12 col-md-12 col-lg-12">
				    <div class="thumbnail" style="border-radius: none; padding: 0px;">
				      <img src="<?php echo base_url(); ?>assist/images/management/<?php if(isset($Mdata)){ echo $Mdata->image; } ?>" alt="p1" style="width:100%; height:250px;">
				      <div class="caption caption-about">
				        <h3><?php if(isset($Mdata)){ echo $Mdata->name; } ?> <small><br/><?php if(isset($Mdata)){ echo $Mdata->title; } ?></small></h3>
				      </div>
				    </div>
				  </div>
				</div>
<?php 
	}
?>

		</div>
		<div class="col-sm-12 col-md-9 col-lg-9 clearfix wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s" style="background-color: rgba(0,0,0,0.6);">
				<div class="schedule-header row clearfix" style="margin-bottom: 10px;">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Teams & Players
				</div>
<!---->
<?php 
	foreach ($teamsData as $Tdata) {
?>
				  <div class="col-sm-12 col-md-3 col-lg-3">
				    <div class="thumbnail" style="border-radius: none; padding: 0px;">
				      <img src="<?php echo base_url(); ?>assist/images/teams/<?php if(isset($Tdata)){ echo $Tdata->image; } ?>" alt="p1" style="width: 100%; height: 190px;">
				      <div class="caption caption-about">
				        <h5 style="color:white; text-align: center;">
				        	<?php if(isset($Tdata)){ echo $Tdata->name; } ?>
				        	<small><br/><?php if(isset($Tdata)){ echo $Tdata->type; } ?></small>
				        </h5>
				      </div>
				    </div>
				  </div>
<?php 
	}
?>	  
<!---->
		</div>
</section>