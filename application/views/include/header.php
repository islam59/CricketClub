<!DOCTYPE html>
<html>
  <head>
    <title>CricketCLUB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assist/css/bootstrap.css" rel="stylesheet">
    <!-- fontawsome icon style -->
    <link href="<?php echo base_url(); ?>assist/css/font-awesome.min.css" rel="stylesheet">
    <!-- customize style -->
    <link href="<?php echo base_url(); ?>assist/css/style.css" rel="stylesheet">
    <!-- wow animation style -->
    <link href="<?php echo base_url(); ?>assist/css/animate.css" rel="stylesheet">


    <!--menu animation wow.js added-->
    <script src="<?php echo base_url(); ?>assist/js/wow.min.js"></script>
    <script>
            new WOW().init();
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url('<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->background_image; } ?>');">
<!--*******************************************************************************************************************-->
<section class="section-header container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top wow fadeIn" data-wow-duration="2s" data-wow-delay="0s" role="navigation" style="width: 100%;">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar" style="color:#4169E1;"></span>
	      <span class="icon-bar" style="color:#4169E1;"></span>
	      <span class="icon-bar" style="color:#4169E1;"></span>
	    </button>
	    <a class="navbar-brand" href="#" style="color:white; font-weight: bold; ">
	    	<!--<b style="color:#4169E1;">Cricket</b>CLUB-->
	    	<img src="<?php echo base_url(); ?>assist/images/<?php if(isset($siteData)){ echo $siteData->logo; } ?>" alt="cht-vikings" class="header-logo-image">
	    </a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="<?php echo base_url(); ?>index.php/Cricket" class="menu-link-item">Home</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/About" class="menu-link-item">About</a></li>
	      <!--- <li><a href="schedule.html" class="menu-link-item">Results & Scheedule</a></li> -->
	      <li><a href="<?php echo base_url(); ?>index.php/News" class="menu-link-item">News</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/Gallery" class="menu-link-item">Gallery</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/Teams" class="menu-link-item">Teams & Managements</a></li>
	      <li>&nbsp; &nbsp; &nbsp; </li>
	    </ul>
	  </div><!-- /.navbar-collapse -->
	</nav>
</section>
<!--*******************************************************************************************************************-->