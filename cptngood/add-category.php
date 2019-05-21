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
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/jquery.dataTables.css">
     <link rel="stylesheet" href="assets/font-awesome.css">
    <link rel="stylesheet" href="style/normalize.css">
  <link rel="stylesheet" href="style/main.css">
  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
	  }
  }
  </script>
    
     <hr />
                   <!-- CHART & CHAT  SECTION -->
                 <div class="">
                  
                    
                     <div class="col-lg-12">
<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<div class="alert alert-success"><h3>Post '.$_GET['action'].'.</h3></div>'; 
	} 
	?>
  <p><a href="categories.php">Categories Index</a></p>

	<h2>Add Category</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($catTitle ==''){
			$error[] = 'Please enter the Category.';
		}

		if(!isset($error)){

			try {

				$catSlug = slug($catTitle);

				//insert into database
				$stmt = $db->prepare('INSERT INTO jace_posts_categories (catTitle,catSlug) VALUES (:catTitle, :catSlug)') ;
				$stmt->execute(array(
					':catTitle' => $catTitle,
					':catSlug' => $catSlug
				));

				//redirect to index page
				redirect('categories.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>

	<form action='' method='post'>

		<p><label>Title</label><br />
		<input type='text' name='catTitle' value='<?php if(isset($error)){ echo $_POST['catTitle'];}?>'></p>

		<p><input class="btn btn-success btn-lg btn-flat btn-rect"type='submit' name='submit' value='Submit'></p>

	</form>



<br><br>
</div></div>
                         
                         
                     </div>
                     
                     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="assets/bootstrap.min.js" type="text/javascript"></script>
     <script src="assets/jquery.dataTables.js" type="text/javascript"></script>
     <script src="assets/jquery-datatable.js" type="text/javascript"></script>