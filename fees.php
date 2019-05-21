<?php
	include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Virtual Assistant On Demand - jacehr.com</title>
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/assets/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.jacehr.com/cptngood/assets/font-awesome.css">
  <link rel="stylesheet" href="https://www.jacehr.com/cptngood/style/normalize.css">
  <link rel="stylesheet" href="https://www.jacehr.com/cptngood/assets/bootstrap.min.css" />
<link rel="stylesheet" href="https://www.jacehr.com/css/aside_menu.css" />
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/style/main.css">
<link rel="stylesheet" href="https://www.jacehr.com/css/layout.css" />
<link rel="stylesheet" href="https://www.jacehr.com/css/responsive.css" />

<?php //flash work starts ?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.mi.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  
  <script src="https://www.jacehr.com/js/imageCycle.js"></script>
  
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
		#SubmIta {
			border-radius:4px;background-color:#2a166c;padding:7px 15px;font-size:12px;dtext-shadow:0px 1px 0px #eee;font-weight:bold;width:auto;border:1px solid #eee;cursor:pointer; text-decoration:none;
		}
		#Tabl {
			margin: 20px 0 0 0;
			font-size:18px;	
		}
		#Tabl td{
			width:100px;
		}
		#Tabl input, textarea{
			padding:7px;font-size:13px;color:#333;border:1px solid #777;border-radius:2px;transition:.5s ease-in-out;box-shadow:inset 0px 10px 12px #ccc;width:250px;
		}
		#TextD h4{
			margin: 0px 0 0 0;
		}
		#contents_in_right {
			border-left: 1px solid #b0b0b0;	
		}
		.blackbutton {
			height: 40px;
		   width: 100px;
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
            	<div id="contents_in_leftD">
					<div class="row">
						<div class="col-md-8" style="margin-top:0px;">
                	<div id="TextD" style="margin:0;">
                    	<div id="TheTextD" style="margin-top:0px;">
                        	<p style="background-color:#009; width:auto; background:url(https://www.jacehr.com/images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Rates and Fees</p>
                            <p class="clear"></p>
                            <div id="SubsLinks">
                            <p style="line-height:24px;"> <strong>Hourly Rate</strong> = $25/hour<br><br>
                        <strong>Email:</strong> va@jacehr.com<br /><br />
                            </p>
                            
                            <br /><br />
                            
                        <a href="schedulecall"><p style="background-color:#009; width:auto; background:url(https://www.jacehr.com/images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Click Here to Pay</p></a>
                            
                        </div>
                            
                        </div><!--TheTextD-->
                    </div><!--TextD-->
					</div>
				</div>
                </div><!--contents_in_leftD-->
                
				
                <div class="clear"></div>
            </div><!--contents_in-->
        </div><!--content-->
		</div>
	</div>
  </div>
        <div id="footer">
        	<?php Foot();?>
        </div><!--footer-->
        
    </div><!--wrapper-->
	<script type="text/javascript" src="https://www.jacehr.com/js/jquery/asidebar.jquery.js"></script>
</body>
</html>