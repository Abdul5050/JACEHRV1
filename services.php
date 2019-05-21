<?php
	include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Virtual Assistant On Demand - jacehr.com</title>
  <link rel="stylesheet" href="cptngood/assets/bootstrap.min.css">
  <link rel="stylesheet" href="cptngood/assets/font-awesome.css">
  <link rel="stylesheet" href="cptngood/style/normalize.css">
  <link rel="stylesheet" href="cptngood/assets/bootstrap.min.css" />
  <link rel="stylesheet" href="css/aside_menu.css" />
  <link rel="stylesheet" href="cptngood/style/main.css">
  <link rel="stylesheet" href="css/layout.css" />
  <link rel="stylesheet" href="css/responsive.css" />


<?php //flash work starts ?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/imageCycle.js"></script>
  <script type="text/javascript">
    $(function() {
      if (!$('.pics').length > 0) return false;
      $('.pics').cycle('fade');
    });
  </script>
  <style type="text/css" media="screen">
    .picsWrap {width: 100%; height:100%; border: 1px solid #ddd;}
    img {border-bottom: 1px solid #fff;}
    .picsWrap p {padding: 10px; margin: 0;}
	.blackbutton {
		height: 40px;
	   width: 100px;
	}
  </style>
<?php //flash work ends ?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '439953183498940');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=439953183498940&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
	<div id="wrapper2">
    	<div id="header">
        	<?php Head();?>
        </div><!--header-->
        
        <div id="menu" style="width: 100%;padding-bottom:0px;">
        	<?php Menu();?>
        </div><!--menu-->
        
        <div id="banner">
        	<?php banner(); ?>
        </div><!--banner-->
  <div class="container" style="padding:0">
	<div class="row">
	   <div class="col-md-12">
        <div id="content">
        	<div id="contents_in">
				<div class="row">
					<div class="col-md-8">
						<div id="contents_in_left">            	    
							<div id="TextD" style="margin:0;">
								<br>
								<div id="imag"><img src="images/core.jpg" height="148" width="150" /></div>
								<div id="TheText">
									<p class="Pd1"><b>SERVICES</b></p>
								   <!-- <p class="Pd2"><a href="about.php">Read More</a></p>	-->
									<p class="clear"></p>
									<p class="Pd3" style="line-height:40px;">
										
										(1) <a href="fbads" style="color:#009ACD; font-weight:bold;">Facebook Ads</a><br>
										
										(2) <a href="emailmgt" style="color:#00868B; font-weight:bold;">Email Newsletter Management</a><br>
										
										(3) <a href="contentmgt" style="color:#009ACD; font-weight:bold;">Content Creation & Management</a><br>
										
										(4) <a href="seo" style="color:#00868B; font-weight:bold;">Search Engine Optimization (SEO)</a><br>
										
										(5) <a href="webdesign" style="color:#009ACD; font-weight:bold;">Website Design & Maintenance</a><br><br>
									
									</p>
							<p class="Pd2"><a style="color:#fff" href="contactus">Get in touch</a></p><br><br>
								</div><!--TheText-->
								<div class="clear"></div>
							</div><!--TextD-->
						</div><!--contents_in_left-->
					</div>
					<div class="col-md-4">						 
						<div id="contents_in_right">
							<?php Content_right();?>
						</div><!--contents_in_right-->
						<div class="clear"></div>
					</div>
				</div>
			
            
               
            </div><!--contents_in-->
        </div><!--content-->
   </div>
   </div>
   </div>
        <div id="footer" style="width: 100%;">
        	<?php Foot();?>
        </div><!--footer-->
    </div><!--wrapper-->
<script type="text/javascript" src="js/jquery/asidebar.jquery.js"></script>
</body>
</html>