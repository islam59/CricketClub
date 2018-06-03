<!--*******************************************************************************************************************-->
<!--**Footer**-->
<section class="section-footer clearfix" id="footer">
	<div class="container clearfix">
		<div class="col-sm-12 col-md-7 col-lg-7 clearfix wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s" style="text-align: left; ">
			<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="width:100%; height:300px;">
		</div>
		<div class="col-sm-12 col-md-5 col-lg-5 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s" style="text-align: right;">
				<a href="<?php if(isset($siteData)){ echo $siteData->facebook; } ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="<?php if(isset($siteData)){ echo $siteData->twitter; } ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="<?php if(isset($siteData)){ echo $siteData->youtube; } ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				<a href="<?php if(isset($siteData)){ echo $siteData->instagram; } ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>

			<Br/>
			<div class="col-sm-12 col-md-12 col-lg-12  wow fadeInRight" data-wow-duration="2s" data-wow-delay="0s" style="margin-top:30px; text-align: right;">
				Copyright &copy; <?php if(isset($siteData)){ echo $siteData->copyright; } ?> <br/>
				Powered By # <?php if(isset($siteData)){ echo $siteData->powered_by; } ?>
				<br/><br/>
				<a href="<?php echo base_url(); ?>index.php/Login" style="font-size: 10px; padding: 5px 15px;">Admin Login</a>
			</div>
		</div>

	</div>	
</section>
<!--*******************************************************************************************************************-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assist/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--jquery added-->
    <script src="<?php echo base_url(); ?>assist/js/jquery.js"></script>
    <!--menu animation shrink added-->
    <script src="<?php echo base_url(); ?>assist/js/navshrink.js"></script>    
  </body>
</html>