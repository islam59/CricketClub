
<!--*******************************************************************************************************************-->
<section class="section-slider container-fluid">
	<div id="carousel-example-generic" class="carousel slide wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s" data-ride="carousel">
	  <!-- Indicators -
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	-->
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
<?php 
	$i= 0; 
	foreach ($sliderData as $sliderImage) {
		$i++; 
?>
	    <div class="item <?php if($i == 1){ echo 'active'; }?> wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
	      <img src="<?php echo base_url(); ?>assist/images/slider/<?php if(isset($sliderImage)){ echo $sliderImage->images; } ?>" alt="slider1" class="slider-img" style="height: 650px; ">
	    </div>
<?php 
	}
?>
	  </div>

	  <!-- Controls 
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a> -->
	</div>
</section>
<section class="slider-overley clearfix">
	<h1>
		<!--<img src="assist/images/logo.png" alt="logo" >
		<b style="color:white;">Cricket</b>CLUB -->
	</h1>
</section>
<!--*******************************************************************************************************************-->