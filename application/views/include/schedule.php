
<!--*******************************************************************************************************************-->
<section class="section-schedule container clearfix" id="schedule">
	<div class="col-sm-12 col-md-6 col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
		<div class="schedule-item">
			<div class="schedule-header">
				<img src="<?php echo base_url(); ?>assist/images/logo.png" alt="00" style="width:15%; height: 30px;"> Results
			</div>

<?php foreach ($results as $result) { ?>
			<div class="schedule-body">
				<h4>
					<?php if(isset($result)){ echo $result->teamone; } ?> Vs. <?php if(isset($result)){ echo $result->teamtwo; } ?>
					<small><br/> <?php if(isset($result)){ echo $result->touch; } ?></small>
				</h4>

<?php 
	if (preg_match("/Won/", $result->result)) {
?>
		<p style="color:teal;"><?php echo $result->teamone; ?> <?php echo $result->result; ?> !</p>
<?php 
	} else {
?>
		<p style="color:red;"><?php echo $result->teamone; ?> <?php echo $result->result; ?> !</p>
<?php 
	}
?>
				
			</div>
<?php } ?>
		</div>
	</div>	

	<div class="col-sm-12 col-md-6 col-lg-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
		<div class="schedule-item">
			<div class="schedule-header">
				<img src="<?php echo base_url(); ?>assist/images/logo.png" alt="00" style="width:15%; height: 30px;"> Schedule
			</div>
<?php 
	foreach ($schedules as $schedule) {
?>
			<div class="schedule-body">
				<h4>
					<?php if(isset($schedule)){ echo $schedule->teamone; } ?> Vs. <?php if(isset($schedule)){ echo $schedule->teamtwo; } ?>
					<small><br/> 
						<?php if(isset($schedule)){ echo $schedule->date; } ?> | <?php if(isset($schedule)){ echo $schedule->venue; } ?> | 
						<?php if(isset($schedule)){ echo $schedule->time; } ?>
					</small>
				</h4>
			</div>
<?php 
	}
?>


		</div>
	</div>	
</section>
<!--*******************************************************************************************************************-->