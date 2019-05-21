<?php
	include 'function.php';
?>
<!DOCTYPE html >
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
    .picsWrap {width: 100%; height:auto; border: 1px solid #ddd;}
    img {border-bottom: 1px solid #fff;}
    .picsWrap p {padding: 10px; margin: 0;}
	
  </style>
  
  <style type="text/css">
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
        	<div id="contents_in" style="width: 100%;">
			
				<div class="row">
				<div class="col-md-8">			
					<div id="contents_in_left">
						
						<p class="Pd11" style="width: 300px;"><b>Email Mgt. Strategy - View Rates & Pay</b></p>
						<iframe src="https://app.acuityscheduling.com/schedule.php?owner=16934739&appointmentType=9402939" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
						

					</div><!--contents_in_left-->
                </div>
				<div class="col-md-4">
				<div id="contents_in_right">
                	<p class="Pd11" style="width: 300px;"><b>Email Mgt. - What I can help you with</b></p>
                        <p class="clear"></p>
                        <div id="SubsLinks">
                            <p style="text-align:left; background:#e6e6e6;  border-bottom-right-radius:30px; padding:10px 20px; line-height:33px;">
                                <strong>. Build your email list from scratch.<br><br>. Send out your articles via email (weekly, monthly, etc.)<br><br>
                                . Develop custom email marketing strategy that works for you.<br><br>. Announce your products, services, or upcoming sales<br><br>
                                .  Set up Autoresponders (Mailchimp, Convert Kit)<br><br>. Identify & clean out non-responsive subscribers.</strong> <br>
                            </p>
                            
                        </div>
                        <br />
                        <p class="Pd11" style="width: 250px;"><b>Got any questions? Email me.</b></p>
                        <p class="clear"></p>
                        <div id="SubsLinks">
                            <p style="text-align:left; background:#e6e6e6;  border-bottom-right-radius:30px; padding:10px 20px; line-height:24px;">
                                va@jacehr.com
                            </p>
                        </div>
                        
                        <br />
                        
                </div><!--contents_in_right-->
                <div class="clear"></div>
				</div>
            </div><!--contents_in-->
        </div><!--content-->
        
        <div id="footer">
        	<?php Foot();?>
        </div><!--footer-->
    </div><!--wrapper-->
	<script type="text/javascript" src="js/jquery/asidebar.jquery.js"></script>
</body>
</html>