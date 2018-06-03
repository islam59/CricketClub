<!--*******************************************************************************************************************-->
<section class="section-management container clearfix" id="teams">
		<div class="about-header col-sm-12 col-md-12 col-lg-12 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="" class="">	
		</div>
<!--*******************************************************************************************************************-->
		<div class="row clearfix">
<?php
	foreach ($galleries as $gallery) {
?>
		  <div class="col-sm-12 col-md-3 co-lg-3 clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
		  	<a href="" data-toggle="modal" data-target="#myModal">    
			    <img src="<?php echo base_url(); ?>assist/images/gallery/<?php echo $gallery->image; ?>" alt="palyer2" class="gallery-img">	  	
		  	</a>
		  </div>
<?php 
	}
?>
	
		</div>
</section>
<!--*******************************************************************************************************************-->

<div class="clearfix"></div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white; margin:30px; font-size:2em;">X</button>
  <div class="modal-dialog" style="background-color: white; width: 85%; height:550px; margin-top:3%;">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
<?php 
	$i = 0; 
	foreach ($galleries as $gallery) {
		$i++; 
?>
		    <div class="item <?php if($i == 1){ echo 'active'; }?>">
		      <img src="<?php echo base_url();?>assist/images/gallery/<?php echo $gallery->image; ?>" alt="gl-1" style="width: 100%; height:550px; ">
		    </div>
<?php } ?>
		  </div>

		  	<!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
		</div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->