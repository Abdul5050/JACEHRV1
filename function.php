<?php
	function Head()
	{
?>	
	 <div class="aside">
      <div class="aside-header">
        <h3>Mobile Menu <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span></h3>
        
      </div>
      <div class="aside-contents">
        <div class="nav-wrapper">
			<ul id="navmenu">
				<li><a href="https://www.jacehr.com">Home</a></li>
				<li><a href="services">Services</a></li>
				<li><a href="fees">Fees</a></li>
				<li><a href="schedulecall">Schedule Call</a></li>
				<li><a href="whyme">Why Me?</a></li>
			<!--	<li><a href="blog">Blog</a></li>    -->
				<li><a href="contactus">Contact</a></li>

			</ul>
		</div>
      </div>
    </div>
    <div class="aside-backdrop"></div>
	
	<div class="container" style="background:url(https://www.jacehr.com/images/hbg.png) repeat-x;background-size:100% 100%;background-position:center center" >
		<div class="row" style="margin-bottom:0;">
			<div class="col-md-3">
				<div id="header_left">
					<a href="https://www.jacehr.com/">	<img src="https://www.jacehr.com/images/va-logo.png" height="63" width="200" /></a>
				</div><!--header_left-->
			</div>
			<div class="col-md-9">
				<div class="mobile_menu_toggle" style="display: flex;
				align-items: center;
				justify-content: flex-end;
				height: 100px;">
					<a style="font-size:28px" class="pull-right" href="#"   onclick="$('.aside').asidebar('open')"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
				</div>
				<!--<div id="header_right">
					<div id="socMedia-left">
					<p>connect on &rArr;</p>  
					</div> --> <!--socMedia-left-->
				  <!-- <div id="socMedia-right">
						<p class="SocImg"><a href="#"><img src="images/fb.png" width="48" height="51" /></a></p>
						<p class="SocImg"><a href="#"><img src="images/twit.png" width="48" height="51" /></a></p>
						<p class="SocImg"><a href="#"><img src="images/sykpe.png" width="48" height="51" /></a></p> -->
						<!-- <p class="clear"></p> -->
					<!--</div> --> <!--socMedia-right-->
					<!--<div class="clear"></div> -->
				</div><!--header_right-->
			</div>
		</div>
	</div>
	
	
		<!--<div class="clear"></div> -->
		<?php
	}
?>


<?php
	function Menu()
	{
?>
	<div class="container" style="background:url(https://www.jacehr.com/images/menuBg-2.png) no-repeat;padding: 10px 0 10px 20px;background-size: 100% 100%;background-position: center center;">
		<div class="row" style="margin-bottom:0;">
			<div class="col-md-12">
				<div id="sublink">
					<a href="https://www.jacehr.com/">Home</a>
				</div><!--sublink-->
				<!-- <div id="sublink">
					<ul>
						<li><a href="about">About</a></li>
					</ul>
				</div><!--sublink-->
				
				<div id="sublink">
					<ul>
						<li><a href="services">Services</a></li>
					</ul>
				</div><!--sublink-->
				
				<div id="sublink">
					<ul>
						<li><a href="fees">Fees</a></li>
					</ul>
				</div><!--sublink-->
				
				<div id="sublink">
					<ul>
						<li style="width:150px;font-weight:bold;"><a href="schedulecall">Schedule Call</a></li>
					</ul>
				</div><!--sublink-->
				
				<div id="sublink">
					<ul>
						<li><a href="whyme">Why Me?</a></li>
					</ul>
				</div><!--sublink-->
				
			<!--	<div id="sublink">
					<ul>
						<li><a href="blog">Blog</a></li>
					</ul>
				</div><!--sublink-->
				
				<div id="sublink">
					<a href="contactus">Contact</a>
				</div><!--sublink-->
				
			   <!-- <div class="clear"></div> -->
			</div>
		</div>
	</div>
            <?php
	}
?>


<?php
	function banner()
	{
?>
		<div class="container" style="padding:0">
			<div class="row" style="margin-bottom:0">
				<div class="col-md-12">
					<div style="position: relative; margin:auto" id="slideshow">
						<div class="pics">
							<img src="https://www.jacehr.com/images/banner.jpg" width="100%" alt="" title="" />
							<!-- <img src="images/ban2.JPG" width="100%" height="300px" alt="" title="" />
							<img src="images/ban1.jpg" width="100%" height="300px" alt="" title="" />
							<img src="images/ban4.jpg" width="100%" height="300px" alt="" title="" />
							<img src="images/ban5.JPG" width="100%" height="300px" alt="" title="" />
							<img src="images/ban6.JPG" width="100%" height="300px" alt="" title="" /> -->
						</div><!--end .pics-->
						<div id="blackband">
							 <div class="blackband">
								  <div class="row">
									<div class="col-md-8 col-sm-8 col-xs-8">
										<div class="blacktext"><p>AS A SOLOPRENEUR, YOU SHOULD FOCUS ON YOUR CORE BUSINESS. THAT'S EXACTLY WHAT I HELP YOU DO. </p>
										</div>
									   
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 pull-right">
										<div class="blackbutton">
										 <a href="contactus">Contact</a>
									   </div><!--button-->
									</div>
								  </div>
							 </div><!--blackband-->
						 </div><!--blackband-->
					</div><!--slideshow-->
				</div>
			</div>
		</div>
    <?php
	}
?>


<?php
	function Content_right()
	{
?>
		<div id="TextD" style="margin:0; border-bottom:0px;">
                    	<p class="Pd11"><b>About You</b></p>
                        <p class="clear"></p>
                        <div id="SubsLinks">
                        	<p style="text-align:left; background:#e6e6e6;  border-bottom-right-radius:30px; padding:10px 20px; line-height:33px;">
                            	<strong>Let's face it.</strong><br>. You're very busy.<br>. And hardworking.<br>. But you know you need help. <br>. And fast too. <br>. You need someone reliable.<br>. Someone you can trust to deliver.<br>. On time. Everytime.<br> . Without breaking the bank. 
                            </p>
                            
                        </div>
                        <br />
                        <p class="Pd11"><b>About Me</b></p>
                        <p class="clear"></p>
                        <div id="SubsLinks">
                        	<p style="text-align:left; background:#e6e6e6;  border-bottom-right-radius:30px; padding:10px 20px; line-height:24px;">
                            	I'm the one you're looking for.
                            </p>
                        </div>                        
                    </div><!--TextD-->
                    <?php
	}
?>


<?php
	function Foot()
	{
?>
	<div class="container" style="background:url('https://www.jacehr.com/images/fBg.png') repeat-x;background: #000;padding: 0px 20px;">
		<div class="row" style="margin-bottom:0;padding:15px">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<p style="font-size:16px;float:left; color:#fff;">VA On Demand. 2014 - <?php echo date('Y'); ?>   </p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<p style="margin-right:0px;">
					<a href="#" style="color:#0C3; text-decoration:none;">Design - CAPTAIN</a>
				 </p>
			</div>
		</div>
	</div>
  <?php
	}
?>