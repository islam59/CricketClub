
<!--*******************************************************************************************************************-->
<!--**Sponsors**-->
<section class="section-sponsors container clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0s" id="sponsor">

	<h3 style="color:#4169E1; "><img src="<?php echo base_url(); ?>assist/images/logo.png" alt="" style="width:50px; height: 50px; padding:5px;">Sponsors</h3> 
<?php 
	$i = 0; 
	foreach ($sponsorData as $sponsor) {
		$i++; 
?>
	<span class="sponsor-logo">
		<a href="<?php if(isset($sponsor)){ echo $sponsor->link; } ?>">
			<img src="<?php echo base_url(); ?>assist/images/sponsor/<?php if(isset($sponsor)){ echo $sponsor->sponsor_logo; } ?>" alt="no-sponson">
		</a>
	</span>
	<?php if($i == 4){ echo '<br/> <br/>'; } ?>
<?php 
}
?>
	<br/>
</section>
<!--*******************************************************************************************************************-->