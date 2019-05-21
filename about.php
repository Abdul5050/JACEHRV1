<?php
	include 'function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Virtual Assistant On Demand - jacehr.com</title>
<link rel="stylesheet" href="css/layout.css" />


<?php //flash work starts ?>
  <script src="js/jquery.min.js"></script>
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
  </style>
<?php //flash work ends ?>

	<style type="text/css">
    	#TextD {
			dborder: 1px solid #000;
			margin: 20px 0 0 0;
			padding-bottom: 10px;
			border-bottom: 0px  dotted #ddd;
		}
		
    </style>
    
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
	<div id="wrapper">
    	<div id="header">
        	<?php Head();?>
        </div><!--header-->
        
        <div id="menu">
        	<?php Menu();?>
        </div><!--menu-->
        
        <div id="banner">
        	<?php banner(); ?>
        </div><!--banner-->
        
        <div id="content">
        	<div id="contents_in">
            	<div id="contents_in_leftD">
                	<div id="TextD" style="margin:0;">
                    	<div id="TheTextD" style="margin-top:0px;">
                        	<p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Who We Are</p>
                            <p class="clear"></p>
                            <p id="aClients2">
                            	Al-Jay Global Concepts Limited is a Nigeria-based investment, business advisory and consultancy firm; founded to provide comprehensive world class advisory solutions to businesses globally.<br /><br />
                                We focus on providing informed consistent and market driven solutions and services to foreign investors irrespective of their business interests in Africa. We provide solutions as merchants for products marketing and sales, energy and power sector developers, infrastructure developers, financiers and government institutions.<br /><br />
                                Our concentration is mainly in developing and emerging economies of Middle and East Africa, where countries are experiencing huge development deficit. Our sister companies include Philly-Udo Nigeria Electrical company and Jay & Jay Nigeria Limited.
                            </p>
                            <br /><br />
                            <p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Our Approach</p>
                            <p class="clear"></p>
                            <p id="aClients2">
                            	At Al-Jay Global Concepts Limited we celebrate achievement and believe that trust is the cornerstone of a successful partnership. That is why we work extremely hard to build trusting, long lasting relationship with our clients.<br /><br />
                                Our management approach is founded on this relationship of trust which offers a transparent and comprehensive way of adopting the right tailored solution for our clients’ requirements.
                            </p>
                        </div><!--TheTextD-->
                    </div><!--TextD-->
                </div><!--contents_in_leftD-->
                
				<div id="contents_in_rightD">
                	<?php Content_right();?>
                </div><!--contents_in_rightD-->
                <div class="clear"></div>
            </div><!--contents_in-->
        </div><!--content-->
        
        <div id="footer">
        	<?php Foot();?>
        </div><!--footer-->
    </div><!--wrapper-->
</body>
</html>