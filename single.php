<?php
include 'function.php';
require_once('cptngood/includes/config.php');
require_once('cptngood/includes/user.php');
require_once('cptngood/includes/protect.php');
?>
 <?php  



$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate, img FROM jace_posts WHERE postSlug = :postSlug');
$stmt->execute(array(':postSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exist redirect user.
if($row['postID'] == ''){
	//header('Location: ./');
	//exit;
$id = $_GET['id'];

    redirect(WEB_ROOT);

	
	
	
}else{
    


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $row['postTitle']; ?> Virtual Assistant On Demand - jacehr.com</title>
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/assets/bootstrap.min.css">
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/assets/font-awesome.css">
<!-- <link rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" /> -->
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/style/normalize.css">
<link rel="stylesheet" href="https://www.jacehr.com/css/aside_menu.css" />
<link rel="stylesheet" href="https://www.jacehr.com/cptngood/style/main.css">  
<link rel="stylesheet" href="https://www.jacehr.com/css/layout.css" />
<link rel="stylesheet" href="https://www.jacehr.com/css/responsive.css" />


<?php //flash work starts ?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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
</head>

<body>
	<div id="wrapper2">
    	<div id="header">
        	<?php Head();?>
        </div><!--header-->
        
        <div id="menu" style="width: 100%;padding-bottom:0px;">
        	<?php Menu();?>
        </div><!--menu-->
        
        <div id="banner" >
        	<?php banner(); ?>
        </div><!--banner-->
  <div class="container" style="padding:0">
	<div class="row" style="margin-top:0;margin-bottom:0">
	   <div class="col-md-12"> 
        <div id="content">
        	<div id="contents_in" style="width: 100%;" class="">
        	    
			<div class="row">
				<div class="col-md-8" style="margin-top:0px;">
		   
            	<section id="posts" class="append-1" >


			<?php	
				
					echo '<h1><span>'.$row['postTitle'].'</span></h1>';
					echo '<p>'.date('d F, Y', strtotime($row['postDate'])).' ';

						$stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM jace_posts_categories, jace_posts_categories_ids WHERE jace_posts_categories.catID = jace_posts_categories_ids.catID AND jace_posts_categories_ids.postID = :postID');
						$stmt2->execute(array(':postID' => $row['postID']));

						$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$links = array();
						foreach ($catRow as $cat)
						{
						    $links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
						}
						//echo implode(", ", $links);

					echo '</p><br>';
					$img = $row['img'];
							if($img !=""){
                                                       ?>

                <!-- Preview Image -->
                <img class="img-responsive" style="min-width: 205px; height: 205px;" src="<?php echo WEB_ROOT.'cptngood/img/'.$img;?>" alt="" title="">
<br/>
                                                        <?php }
					echo '<p>'.$row['postCont'].'</p>';				
				
			?>

                        </section>

				</div>
				
				<div class="col-md-4">					
					<div id='sidebar'>
						<?php require('sidebar.php'); ?>
					</div>  
				</div>
			</div>
                
				
                <div class="clear"></div>
            </div><!--contents_in-->
        </div><!--content-->
        </div>
     </div>
  </div>
        <div style="width: 100%;" id="footer" >
        	<?php Foot();?>
        </div><!--footer-->
    </div><!--wrapper-->
    <script src="https://www.jacehr.com/js/jquery-ui-1.10.3-custom.min.js"></script>
	<script src="https://www.jacehr.com/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://www.jacehr.com/js/jquery.blockUI.js"></script>
	<script src="https://www.jacehr.com/comments.js"></script>
	<script type="text/javascript" src="https://www.jacehr.com/js/jquery/asidebar.jquery.js"></script>
</body>
</html>
<?php } ?>