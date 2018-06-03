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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
          @keyframes backColor { 
          000%{background-color: teal;}
          010%{background-color: blue;}
          020%{background-color: orange;}
          030%{background-color: yellow;}
          040%{background-color: red;}
          050%{background-color: green;}
          060%{background-color: red;}
          070%{background-color: yellow;}
          080%{background-color: orange;}
          090%{background-color: blue;}
          100%{background-color: teal;}
          }
        
        body{ background-color: green; animation-name: backColor;  animation-duration: 60s; }
    </style>
  </head>
  <body> 
<!--*******************************************************************************************************************-->

<!--*******************************************************************************************************************-->

<!--*******************************************************************************************************************-->
		
<div class="col-sm-12 col-md-4 col-lg-4"></div>
<div class="col-sm-12 col-md-4 col-lg-4">

	<form action="<?php echo base_url(); ?>index.php/User/loginForm" method="post" style="background-color: rgba(0,0,0,0.8); padding: 4%; margin-top:100px; color:white;" >
		<center><img src="<?php echo base_url(); ?>assist/images/logo.png" alt="" class="" style="height: 80px; width: 80px;"></center>	
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" style="border-radius: 0px;">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border-radius: 0px;">
	  </div>
	  <button type="submit" class="btn"  style="border-radius: 0px; background-color: #4169E1; color:white;" >Login as Admin</button>
	  <a href="<?php echo base_url(); ?>"  class=""  style="border-radius: 0px; margin-left:10px;" >Back To Page</a>
	</form>	
</div>


<!--*******************************************************************************************************************-->

<!--*******************************************************************************************************************-->


<!--*******************************************************************************************************************-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assist/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--jquery added-->
    <script src="<?php echo base_url(); ?>assist/js/jquery.js"></script>
    <!--menu animation shrink added-->
    <script src="<?php echo base_url(); ?>assist/js/navshrink.js"></script>
    
  </body>
</html>