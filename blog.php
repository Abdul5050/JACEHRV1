

<?php
   include 'function.php';
   require_once('trim_words.php');
   require_once('cptngood/includes/config.php');
   require_once('cptngood/includes/user.php');
   require_once('cptngood/includes/protect.php');
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
         </div>
         <!--header-->
         <div id="menu" style="width: 100%;padding-bottom:0px;">
            <?php Menu();?>
         </div>
         <!--menu-->
         <div id="banner">
            <?php banner(); ?>
         </div>
         <!--banner-->
         <div class="container" style="padding:0">
            <div class="row">
               <div class="col-md-12">
                  <div id="content">
                     <div id="contents_in" style="width: 100%;">
						<div class="row">
							<div class="col-md-8" style="margin-top:0px;">
								  <section id="posts" class=" append-1" >
								  <h1><span>RECENT POSTS</span></h1>
								  <?php
									 try {
									 
										$pages = new Paginator('5','p');
									 
										$stmt = $db->query('SELECT postID FROM jace_posts');
									 
										//pass number of records to
										$pages->set_total($stmt->rowCount());
									 
										$stmt = $db->query('SELECT postID, postTitle, postSlug, postCont, postDate, img,username FROM jace_posts ORDER BY postID DESC '.$pages->get_limit());
										
										
										 while($row = $stmt->fetch()){
												$stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM jace_posts_categories, jace_posts_categories_ids WHERE jace_posts_categories.catID = jace_posts_categories_ids.catID AND jace_posts_categories_ids.postID = :postID');
													$stmt2->execute(array(':postID' => $row['postID']));
									 
													$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
									 
													$links = array();
													foreach ($catRow as $cat)
													{
														$links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
													}
													$mylinsk = implode(", ", $links);
													$c_fetch = $db->prepare('SELECT * FROM pcomment where pid= :pid');
													$c_fetch->execute(array(':pid' => $row['postID']));
									 
										//pass number of records to
										$comment = $c_fetch->rowCount();
										if($comment ==1){
										$comments =  "1 Comment";
										}else if($comment <1){
										$comments =  "0 Comment";
										}else{
										$comments =  $comment." Comments";
										}
											
															 echo ' <article>';
															 date_default_timezone_set('america/california');
															 
															 echo '<div class="date span-3">'.date('d M, Y', strtotime($row['postDate'])).'</div>
										 <h2 style="text-transform:capitalize;"><a href="post/'.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>
										 ';
										
												
										echo' <p>'.trim_words($row['postCont'],110, '...').'</p>
										 <div class="more"><a href="post/'.$row['postSlug'].'">Read more ...</a></div>';
												
												echo ' </article><hr>';
										} 
									 
										echo $pages->page_links();
									 
									 } catch(PDOException $e) {
										 echo $e->getMessage();
									 }
									 ?>
							   </section>
							 
							</div>
							<div class="col-md-4">
							   <div id='sidebar'>
								  <?php require('sidebar.php'); ?>
							   </div>
							</div>
							
						</div>
                     </div>
                     <!--contents_in-->
                  </div>
                  <!--content-->
               </div>
            </div>
         </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
         <div style="width: 100%;" id="footer" >
            <?php Foot();?>
         </div>
         <!--footer-->
      </div>
      <!--wrapper-->
   <script type="text/javascript" src="js/jquery/asidebar.jquery.js"></script>
   </body>
</html>
