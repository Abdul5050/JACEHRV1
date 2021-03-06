<?php
include 'function.php';
require_once('cptngood/includes/config.php');
require_once('cptngood/includes/user.php');
require_once('cptngood/includes/protect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Virtual Assistant On Demand - jacehr.com</title>
<link rel="stylesheet" href="cptngood/assets/bootstrap.min.css">
     <link rel="stylesheet" href="cptngood/assets/font-awesome.css">
    <link rel="stylesheet" href="cptngood/style/normalize.css">
  <link rel="stylesheet" href="cptngood/style/main.css">
  
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
        
        <div id="menu" style="width: 100%;">
        	<?php Menu();?>
        </div><!--menu-->
        
        <div id="banner">
        	<?php banner(); ?>
        </div><!--banner-->
        
        <div id="content">
        	<div id="contents_in" style="width: 100%;">
        	    	<div class="col-md-8">
        	     <section id="posts" class="span-15 append-1" >
				
            	<h1><span>ARCHIVES POSTS</span></h1>
            	
			<?php
				try {

					//collect month and year data
					$month = $_GET['month'];
					$year = $_GET['year'];

					//set from and to dates
					$from = date('Y-m-01 00:00:00', strtotime("$year-$month"));
					$to = date('Y-m-31 23:59:59', strtotime("$year-$month"));


					$pages = new Paginator('5','p');

					$stmt = $db->prepare('SELECT postID FROM jace_posts WHERE postDate >= :from AND postDate <= :to');
					$stmt->execute(array(
						':from' => $from,
						':to' => $to
				 	));

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->prepare('SELECT * FROM jace_posts WHERE postDate >= :from AND postDate <= :to ORDER BY postID DESC '.$pages->get_limit());
					$stmt->execute(array(
						':from' => $from,
						':to' => $to
				 	));
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
					if($comment <=1){
					$comments =  "1 Comment";
					}else{
					$comments =  $comment." Comments";
					}
					    
                            echo ' <article>';
                            
                            echo '<div class="date span-3">'.date('m M, Y', strtotime($row['postDate'])).'</div>
        <h2 style="text-transform:capitalize;"><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>
        ';
        $img = $row['img'];
							if($img !=""){
       echo' <img style="min-width: 205px; height: 205px;" src='. WEB_ROOT.'cptngood/img/'.$img.' alt="">';
							}
       echo' <p>'. mb_strimwidth($row['postCont'], 0, 750, '...').'</p>
        <div class="more"><a href="'.$row['postSlug'].'">Read more ...</a></div>';
							
							echo ' </article><hr>';
					}

					echo $pages->page_links("a-$month-$year&");

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
                
				
                <div class="clear"></div>
            </div><!--contents_in-->
        </div><!--content-->
        
        <div style="width: 100%;" id="footer" >
        	<?php Foot();?>
        </div><!--footer-->
    </div><!--wrapper-->
</body>
</html>