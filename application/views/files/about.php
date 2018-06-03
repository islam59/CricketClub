<!--*******************************************************************************************************************-->
<section class="section-about container clearfix" id="about">
		<div class="about-header col-sm-12 col-md-12 col-lg-12 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="" class="">			
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 clearfix ">
			<div class="about-page">
				<div class="schedule-header wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> About Vikings
				</div>
				<div class="about-body clearfix">
					<div class="col-sm-12 col-md-4 col-lg-4 clearfix wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
						<img src="<?php echo base_url(); ?>assist/images/about/<?php if(isset($aboutData)){ echo $aboutData->about_logo; } ?>" alt="00" class="img-thumnail" style="width:90%; ;" >
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8 clearfix wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
						<p><?php if(isset($aboutData)){ echo $aboutData->about_body; } ?></p>
					</div>
				</div>

				<div class="schedule-header wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> History of Vikings
				</div>
				<div class="about-body clearfix">
					<div class="col-sm-12 col-md-4 col-lg-4 clearfix wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
						<img src="<?php echo base_url(); ?>assist/images/about/<?php if(isset($aboutData)){ echo $aboutData->franchaizes_logo; } ?>" alt="00" style="width:90%; height: 100%;" >
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8 clearfix wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
						<p>
							<u><b>Franchaizes</b></u>
							<?php if(isset($aboutData)){ echo $aboutData->franchaizes_body; } ?>
						</p><br/><br/>
						<p>
							<u><b>Coach</b></u>
							<?php if(isset($aboutData)){ echo $aboutData->coach_body; } ?>
						</p><br/><br/>
						<p>
							<u><b>Sponsor's</b></u>
							<?php if(isset($aboutData)){ echo $aboutData->sponsor_body; } ?>
						</p>
					</div>
				</div>
				<div class="schedule-header wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Achievements of Vikings
				</div>
				<div class="about-body clearfix">
					<div class="col-sm-12 col-md-4 col-lg-4 clearfix wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
						<img src="<?php echo base_url(); ?>assist/images/about/<?php if(isset($aboutData)){ echo $aboutData->winnings_logo; } ?>" alt="00" style="width:90%; height: 100%;" >
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8 clearfix wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
					<?php if(isset($aboutData)){ echo $aboutData->winnings_body; } ?>
					</div>
				</div>
			</div>
		</div>
</section>
<!--*******************************************************************************************************************-->