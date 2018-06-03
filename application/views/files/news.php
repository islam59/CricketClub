<!--*******************************************************************************************************************-->
<section class="section-about container clearfix" id="about">
		<div class="about-header col-sm-12 col-md-12 col-lg-12 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="">			
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 clearfix ">
			<div class="news-page clearfix">
				<div class="schedule-header col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
					<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="00" style="width:15%; height: 30px;"> Latest News
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 clearfix" style="padding-top: 10px; ">
<!--////////////////////////////////////////////////////////////////////-->
	<a href="">
	  <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
<?php 
	foreach ($newsThree as $nthree) {
?>
	    <div class="thumbnail">
	      <img src="<?php echo base_url(); ?>assist/images/news/<?php if(isset($nthree)){ echo $nthree->news_image; } ?>" alt="" style="width: 100%;" class="news-img">
	      <div class="caption">
	        <h3><?php if(isset($nthree)){ echo $nthree->news_title; } ?></h3>
	        <p><?php if(isset($nthree)){ echo substr($nthree->news_body, 0, 60); } ?></p>        
	      </div>
	    </div><!--end 1news-->
<?php 
	}//end of foreach.
?>




	  </div>
	</a>
<!--////////////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////////////-->
	<a href="">
	  <div class="col-sm-6 col-md-7 col-lg-7 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">


<?php 
	foreach ($newsSeven as $NSeven) {
?>
	    <div class="thumbnail">
	      <img src="<?php echo base_url(); ?>assist/images/news/<?php if(isset($NSeven)){ echo $NSeven->news_image; } ?>" alt="" style="width: 100%;" class="news-img">
	      <div class="caption">
	        <h3><?php if(isset($NSeven)){ echo $NSeven->news_title; } ?></h3>
	        <p><?php if(isset($NSeven)){ echo substr($NSeven->news_body, 0, 260); } ?></p>        
	      </div>
	    </div><!--end 2 news..-->
<?php 
	}//end of foreach.
?>

	  </div>
	</a>
<!--////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////-->
	<a href="">
	  <div class="col-sm-6 col-md-2 col-lg-2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s">
<?php 
	foreach ($newsTwo as $NTwo) {
?>
	    <div class="thumbnail">
	      <img src="<?php echo base_url(); ?>assist/images/news/<?php if(isset($NTwo)){ echo $NTwo->news_image; } ?>" alt="" style="width: 100%;" class="news-img">
	      <div class="caption">
	        <h4><?php if(isset($NTwo)){ echo $NTwo->news_title; } ?></h4>       
	      </div>
	    </div><!--end 3 news..-->
<?php 
	}//end of foreach.
?>


	  </div>
	</a>
<!--////////////////////////////////////////////////////////////////////-->
				</div>
			</div>
		</div>
</section>
<!--*******************************************************************************************************************-->