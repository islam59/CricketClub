<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
		    <li class="text-center">
                <img src="<?php echo base_url(); ?>assets/img/find_user.png" class="user-image img-responsive"/>
            </li>
            <li><a  href="<?php echo base_url()?>" target="_blank"><i class="fa fa-desktop"></i> Site Live View</a></li>					
            <li><a class="active-menu"  href="<?php echo base_url(); ?>index.php/Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li>
                <a href=""><i class="fa fa-cogs" aria-hidden="true"></i> Site Option<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url();?>index.php/Siteoption/Logobackground">Logo & Background</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Siteoption/Copypower">Copyright & Power Info</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Siteoption/Social">Social Links</a></li>
                    </ul>
            </li> 

            <li><a href="<?php echo base_url(); ?>index.php/Sponsoroption/Sponsor"><i class="fa fa-gift" aria-hidden="true"></i> Sponsor's</a></li> 
            <li>
                <a href="#"><i class="fa fa-book" aria-hidden="true"></i> About Club<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url(); ?>index.php/Aboutoption/About">Abouts</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Aboutoption/History">History</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Aboutoption/Winnings">Winnings</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('index.php/Newsoption/News');?>"><i class="fa fa-coffee" aria-hidden="true"></i> News</a></li> 
            <li>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Teams & Managements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('index.php/Teamsoptions/Team');?>">Teams</a></li>
                    <li><a href="<?php echo base_url('index.php/Managementoptions/Management');?>">Managements</a></li>
                    <li><a href="<?php echo base_url('index.php/Coveroption/Cover');?>">Cover</a></li>
                </ul>
            </li> 
			<li><a  href="<?php echo base_url('index.php/Galleryoptions/Gallery'); ?>"><i class="fa fa-bar-chart-o"></i> Photos / Gallery</a></li>	
            <li><a href="<?php echo base_url('index.php/Slideroptions/Slider'); ?>"><i class="fa fa-trophy" aria-hidden="true"></i> Slider Option</a></li> 
            <li>
                <a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Matches<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('index.php/Scheduleoptions/Schedule'); ?>">Match Schedules</a></li>
                    <li><a href="<?php echo base_url('index.php/Resultoptions/Result'); ?>">Match Results</a></li>
                </ul>
            </li>				
            <li><a href="<?php echo base_url();?>index.php/Userprofile/home"><i class="fa fa-sitemap"></i> User Control</a></li> 	
        </ul>
    </div>
</nav>  
