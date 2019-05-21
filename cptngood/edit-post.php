<?php require_once('includes/config.php');
require_once('includes/user.php');
require_once('includes/protect.php');
?>

<?php
if( $user->is_logged_in() ==""){ redirect('login.php'); }


if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM jace_posts WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	//delete post categories. 
	$stmt = $db->prepare('DELETE FROM jace_posts WHERE postID = :postID');
	$stmt->execute(array(':postID' => $_GET['delpost']));

	redirect('index.php?action=deleted');
	exit;
} 
?>
<head>
    <meta charset="UTF-8" />
    <title>JACEHR Admin Dashboard | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    
     <link rel="stylesheet" href="assets/font-awesome.css">
    <link rel="stylesheet" href="style/normalize.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  
    
     <hr />
                   <!-- CHART & CHAT  SECTION -->
                 <div class="">
                  
                    
                     <div class="col-lg-12">
<div id="wrapper">

	<?php include('menu.php');?>

	<p><a href="./">Blog Admin Index</a></p>

	<h2>Edit Post</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postID ==''){
			$error[] = 'This post is missing a valid id!.';
		}

		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postSlug ==''){
			$error[] = 'Please enter the URL.';
		}

		if($postCont ==''){
			$error[] = 'Please enter the content.';
		}

		if(!isset($error)){
		    
		    if (isset($_FILES['image']) && $_FILES['image']['size'] >0 && !empty($_FILES['image']) ){

 				 $photo   = $_FILES['image']['name'];
		    $temp = $_FILES['image']['tmp_name'];
                    $path = "img/"; 
					$ext = getExtension($photo);
					$uid = rand();
					$actual_image_name = time().$uid.".".$ext;
					//move_uploaded_file($tmp, $path.$actual_image_name)
			 if(move_uploaded_file($temp, $path.$actual_image_name)){
            $image = $actual_image_name;
                
				 
			 	}
			 	
			 		try {

				//$postSlug = slug($postTitle);

				//insert into database
				$stmt = $db->prepare('UPDATE jace_posts SET postTitle = :postTitle, postSlug = :postSlug, img = :img, postCont = :postCont WHERE postID = :postID') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postSlug' => $postSlug,
					':img' => $image,
					':postCont' => $postCont,
					':postID' => $_POST['postID']
				));

				//delete all items with the current postID
				$stmt = $db->prepare('DELETE FROM jace_posts_categories_ids WHERE postID = :postID');
				$stmt->execute(array(':postID' => $_POST['postID']));

				if(isset($_POST['catID'])){
					
						$stmt = $db->prepare('INSERT INTO jace_posts_categories_ids (postID,catID)VALUES(:postID,:catID)');
						$stmt->execute(array(
							':postID' => $_POST['postID'],
							':catID' => $_POST['catID']
						));
					
				}

				//redirect to index page
				redirect('index.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
			
}else{

			try {

				//$postSlug = slug($postTitle);

				//insert into database
				$stmt = $db->prepare('UPDATE jace_posts SET postTitle = :postTitle, postSlug = :postSlug, postCont = :postCont WHERE postID = :postID') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postSlug' => $postSlug,
					':postCont' => $postCont,
					':postID' => $_POST['postID']
				));

				//delete all items with the current postID
				$stmt = $db->prepare('DELETE FROM jace_posts_categories_ids WHERE postID = :postID');
				$stmt->execute(array(':postID' => $_POST['postID']));

				if(isset($_POST['catID'])){
					
						$stmt = $db->prepare('INSERT INTO jace_posts_categories_ids (postID,catID)VALUES(:postID,:catID)');
						$stmt->execute(array(
							':postID' => $_POST['postID'],
							':catID' => $_POST['catID']
						));
					
				}

				//redirect to index page
				redirect('index.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
			
}

		}

	}

	?>


	<?php
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {

			$stmt = $db->prepare('SELECT postID, postTitle, postSlug, postCont,img FROM jace_posts WHERE postID = :postID') ;
			$stmt->execute(array(':postID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>

	<form action='' method='post' enctype="multipart/form-data">
		<input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' class="form-control"value='<?php echo $row['postTitle'];?>'></p>
		
		<p><label>Post URL</label><br />
                    <input type='text' name='postSlug' class="form-control"value='<?php echo $row['postSlug'];?>'></p>

	<div class="box">
                                <header>
                                    
                                    <h5>Content</h5>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="active"><a href="#markdown" data-toggle="tab">JACEHR</a></li>
                                        <li><a href="#preview" data-toggle="tab">Preview</a></li>
                                    </ul>
                                </header>

                               
     <div id="div-3" class="body tab-content">
                                    <div class="tab-pane fade active in" id="markdown">
                                        <div class="wmd-panel">
                                            <div id="wmd-button-bar" class="btn-toolbar"></div>
                                            <textarea class="form-control wmd-input" rows="10"  id="wmd-input"name='postCont' rows="10">
<?php echo $row['postCont'];?>
                        </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="preview">
                                        <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                                    </div>
                                </div>
                            </div>
		

		<fieldset>
			<legend>Categories</legend>

			<?php

			$stmt2 = $db->query('SELECT catID, catTitle FROM jace_posts_categories ORDER BY catTitle');
			?> <select name='catID'  class='form-control wmd-input'> <?php
			while($row2 = $stmt2->fetch()){

				$stmt3 = $db->prepare('SELECT catID FROM jace_posts_categories_ids WHERE catID = :catID AND postID = :postID') ;
				$stmt3->execute(array(':catID' => $row2['catID'], ':postID' => $row['postID']));
				$row3 = $stmt3->fetch(); 

				if($row3['catID'] == $row2['catID']){
					$checked = 'selected=selected';
				} else {
					$checked = null;
				}

			   
    echo "<option value='".$row2['catID']."' $checked>".$row2['catTitle']."</option>";

		
			
		
			}
				?></select><?php
				$img =  $row['img'];
				if($img !=""){
				     $img =  $row['img'];
				}else{
				    $img ="demoUpload.jpg";
				}

			?>

		</fieldset>
		<br><br>
			   <link rel="stylesheet" href="assets/bootstrap-fileupload.min.css" />
			   <div class="col-md-12">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo WEB_ROOT; ?>cptngood/img/<?php echo $img; ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span>
									<span class="fileupload-exists">Change</span><input name="image"type="file" /></span>
                                    <a href="#" style=""class="btn btn-danger fileupload-exists" data-dismiss="fileupload">REMOVE</a>
                                </div>
                                <p>Upload a fixed image size of 589px by 200px</p>
                            </div>
                            <br><br>
          </div>

                <p><input class="btn btn-success btn-lg btn-flat "type='submit' name='submit' value='Submit'></p>

	</form>


       

</div></div>
                         
                         
                     </div>
                     
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
     <script src="<?php echo WEB_ROOT; ?>cptngood/assets/bootstrap-fileupload.js" type="text/javascript"></script>
     
  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
	  }
  }
  </script>
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>             
    