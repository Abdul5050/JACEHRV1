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
  <div class="table-responsive">
	<table class="js-basic-example">
	<thead><tr>
	    <th>#</th>
		<th>Title</th>
		<th>Date</th>
		<th>Action</th>
	</tr></thead><tbody>
	<?php
		try {

			$stmt = $db->query('SELECT postID, postTitle, postDate FROM jace_posts ORDER BY postID DESC');
			$no = 1;
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$no++.'</td>';
					echo '<td>'.$row['postTitle'].'</td>';
				echo '<td>'.date('jS M Y', strtotime($row['postDate'])).'</td>';
				?>

				<td>
					<a href="edit-post.php?id=<?php echo $row['postID'];?>"class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>  
					<a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')"class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</tbody></table></div>
<br><br>
	<p><a href='add-post.php'class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add Post</a></p>
<br><br>
</div></div>
                         
                         
                     </div>
                     
                     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="assets/bootstrap.min.js" type="text/javascript"></script>
     <script src="assets/jquery.dataTables.js" type="text/javascript"></script>
     <script src="assets/jquery-datatable.js" type="text/javascript"></script>