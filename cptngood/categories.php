<?php require_once('includes/config.php');
require_once('includes/user.php');
require_once('includes/protect.php');
?>

<?php
if( $user->is_logged_in() ==""){ redirect('login.php'); }


if(isset($_GET['delcat'])){ 

	$stmt = $db->prepare('DELETE FROM jace_posts_categories WHERE catID = :catID') ;
	$stmt->execute(array(':catID' => $_GET['delcat']));
	

	redirect('categories.php?action=deleted');
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
  function delcat(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'categories.php?delcat=' + id;
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
		echo '<div class="alert alert-success"><h3>Category '.$_GET['action'].'.</h3></div>'; 
	} 
	?>
  <div class="table-responsive">
	<table class="js-basic-example">
	<thead><tr>
		<th>#</th>
		<th>Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody>
	<?php
		try {

			$stmt = $db->query('SELECT catID, catTitle, catSlug FROM jace_posts_categories ORDER BY catTitle DESC');
			$no = 1;
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$no++.'</td>';
					echo '<td>'.$row['catTitle'].'</td>';
				?>

				<td>
					<a href="edit-category.php?id=<?php echo $row['catID'];?>"class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>  
					
				</td>
				<td>
				    <a href="javascript:delcat('<?php echo $row['catID'];?>','<?php echo $row['catSlug'];?>')"class="btn btn-danger"><i class="icon-remove icon-white"></i>Delete</a>
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
	<p><a href='add-category.php'class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add Category</a></p>
<br><br>
</div></div>
                         
                         
                     </div>
                     
                     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="assets/bootstrap.min.js" type="text/javascript"></script>
     <script src="assets/jquery.dataTables.js" type="text/javascript"></script>
     <script src="assets/jquery-datatable.js" type="text/javascript"></script>