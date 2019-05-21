<?php
	include 'function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Al-jay Global Concepts</title>
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
                        	<p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Executive MD - Chief James</p>
                            <p class="clear"></p>
                            <p id="aClients2">
                            	Born and bred in Nigeria, <span style="font-weight:bold;">Chief James Onyedinma Nnadozie</span> studied Marketing at Yaba College of Technology where he graduated with honors. He is a shrewd businessman who believes in developing people by investing in them. Being a God-fearing person, transparency is his watchword in all of his undertakings.<br /><br />
                                He has held several positions such as Managing Director of Jay and Jay Global Concepts Nigeria Ltd, and Jaydozie Ventures Nigeria Ltd with branches in Banjul (The Gambia); and Freetown (Sierra Leone), subsidiaries of Aljay Global Concepts Nigeria Ltd.<br /><br />
                                He spends his leisure time either playing table tennis or golfing; or perhaps relaxing at the beach to watch the ocean waves.
                            </p>
                            <br /><br />
                            
                            <p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">CEO - Alex Uche Njoku</p>
                            <p class="clear"></p>
                            <p id="aClients2">
                            	As Chief Executive Officer of Al-jay Global Concepts, <span style="font-weight:bold;">Mr. Alex Njoku</span> is responsible for the day-to-day-operations of the company, as well as leading its business development and technology strategy. He co-founded the firm with Chief James Onyedinma Nnadozie in 2013.<br /><br />
                                He has also held different position as a project coordinator and a consultant on revenue recycle management, automated identity management and e-banking solution.<br /><br />
Alex holds a Bachelor’s degree in Economics and a Post Graduate Diploma in Information Management Technology. He is a member of the Computer Professionals of Nigeria (CPN), amongst other professional certifications.

                            </p>
                            <br /><br />
                        </div><!--TheTextD-->
                    </div><!--TextD-->
                </div><!--contents_in_leftD-->
                
				<div id="contents_in_rightD">
                	<img src="images/aljay-management-team-2.jpg" />
                    <br /><br />
                    <p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">EMD - Chief James Nnadozie</p>
                    
                    <br />
                    <img src="images/alex.jpg" />
                    <br /><br />
                    <p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">CEO - Alex Uche Njoku</p>
                    
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