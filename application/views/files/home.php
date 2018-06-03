<!--*******************************************************************************************************************-->
<section class="section-about container clearfix" id="about">
		<div class="about-header col-sm-12 col-md-12 col-lg-12 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="">			
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 clearfix">
			
			<div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
			  	<a href="<?php echo base_url(); ?>index.php/About" style="text-decoration: none;">
				    <div class="thumbnail thumbnail-about">
				    	<div class="thumbnail-image">
				      		<img src="<?php echo base_url(); ?>assist/images/about/<?php if(isset($aboutData)){ echo $aboutData->about_cover; } ?>" alt="a3" class="thumb-img">
				  		</div>
				      <div class="caption caption-about">
				        <h3>About Vikings</h3>        
				        </p>
				      </div>
				    </div>
				</a>
			</div>	
			<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
				<a href="<?php echo base_url(); ?>index.php/News" style="text-decoration: none;">
				    <div class="thumbnail thumbnail-about">
				    	<div class="thumbnail-image">
				      		<img src="<?php echo base_url(); ?>assist/images/news/<?php if(isset($newsData)){ echo $newsData->news_image; } ?>" alt="a3" class="thumb-img">
				  		</div>
				      	<div class="caption caption-about">
				        	<h3>News</h3>
				      	</div>
				    </div>
				</a>
			</div>

		</div>

</section>

<!--*******************************************************************************************************************-->
<section class="section-schedule container clearfix" id="schedule">
	<div class="col-sm-12 col-md-6 col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
		<div class="schedule-item">
			<div class="schedule-header">
				<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Results
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
				<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Schedule
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
<section class="section-management container clearfix" id="teams">
		<h3 class=" wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="" class="" style="width:50px; height: 50px; padding:5px;">Teams & Managements
		</h3> 


  <div class="col-sm-12 col-md-6 co-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
	<a href="<?php echo base_url(); ?>index.php/Teams" style="text-decoration: none;">
	    <div class="thumbnail thumbnail-teams">
	    	<div class="img-teams-block">
	    	  <img src="<?php echo base_url(); ?>assist/images/cover/<?php if(isset($cover)){ echo $cover->management; }?>" alt="palyer2" class="teams-img">
	  		</div>
	      	<div class="caption caption-teams">
	        	<h4>Team Managements</h4>
	      	</div>
	    </div>
	</a>
  </div>

  <div class="col-sm-12 col-md-6 co-lg-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
  	<a href="<?php echo base_url(); ?>index.php/Teams" style="text-decoration: none;">
	    <div class="thumbnail thumbnail-teams">
	    	<div class="img-teams-block">
	    	  <img src="<?php echo base_url(); ?>assist/images/cover/<?php if(isset($cover)){ echo $cover->team; }?>" alt="palyer2" class="teams-img">
	  		</div>
	      	<div class="caption caption-teams">
	        	<h4>Team Players</h4>
	      	</div>
	    </div>
	</a>
  </div>

<?php $i = 1; foreach ($galleries as $gallery) {	$i++; ?>
  <div class="col-sm-12 col-md-4 co-lg-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s">
  	<a href="<?php echo base_url(); ?>index.php/Gallery" style="text-decoration: none;">
	    <div class="thumbnail thumbnail-teams">
	    	<div class="img-teams-block">
	    	  <img src="<?php echo base_url(); ?>assist/images/gallery/<?php echo $gallery->image; ?>" alt="palyer2" class="teams-img">
	  		</div>
	      	<div class="caption caption-teams">
	        	<h4>Events <?php echo $i; ?></h4>
	      	</div>
	    </div>
	</a>
  </div>
<?php } ?>

</section>
<!--*******************************************************************************************************************-->