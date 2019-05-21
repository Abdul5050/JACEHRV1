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
                        	<p style="background-color:#009; width:auto; background:url(images/infoBg.png) no-repeat; font-weight:bold; padding:5px 20px; color:#fff;">Working With Us</p>
                            <p class="clear"></p>
                            <p id="aClients2">
                            	We are an equal opportunity organization. We look out for the best individuals with excellent career objectives and development initiatives; who have the basic skills of self and team work motivation, influence and relationship building for the organization's growth.<br /><br />
                                We train and remodel these skills to meet up with organizational standards of result oriented and quality services delivery orientation.

                            </p>
                            <br />
                            <h4>Apply Here</h4>
                            <p class="clear"></p>
                            <form action="" method="post">
                                <table id="Tabl" cellspacing="10">
                                	<tr>
                                    	<td>Name</td>
                                        <td><input type="text" name="name" placeholder="" required="required" /></td>
                                    </tr>
                                    <tr>
                                    	<td style="width:150px;">Position Sought</td>
                                        <td><input type="text" name="position" placeholder="" required="required" /></td>
                                    </tr>
                                    <tr>
                                    	<td>Email</td>
                                        <td><input type="email" name="email" placeholder="" required="required" /></td>
                                    </tr>
                                    <tr>
                                    	<td>Phone No</td>
                                        <td><input type="text" name="phoneNo" placeholder="" required="required" /></td>
                                    </tr>
                                    <tr>
                                    	<td></td>
                                        <td><input type="submit" name="apply" value="Apply" id="SubmIta" style="width:120px; box-shadow:inset 0px 10px 12px #4f32ae; color:#fff;" /></td>
                                    </tr>
                                </table>
                            </form>
                            
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