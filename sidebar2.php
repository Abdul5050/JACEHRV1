
 <aside class="span-8 last right clearfix">
      <h2><span>blog categories</span></h2>
      <ul>
          <?php
$stmt = $db->query('SELECT catTitle, catSlug FROM jace_posts_categories ORDER BY catID DESC limit 5');
while($row = $stmt->fetch()){
	echo '<li><a href="c-'.$row['catSlug'].'">'.$row['catTitle'].'</a></li>';
}
?>
      </ul>
      
      
      
      <h2><span>Recent posts</span></h2>
      <?php
$stmt = $db->query('SELECT * FROM jace_posts ORDER BY postID DESC LIMIT 5');
while($row = $stmt->fetch()){
     $img = $row['img'];
							if($img !=""){
	echo '
	<img src="'. WEB_ROOT.'cptngood/img/'.$img.'" width="70" height="64" alt="" class="span-2">
      <h3> <a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h3>
      <p>'. mb_strimwidth($row['postCont'], 0, 80, '...').'</p>
      <p class="date">'.date('m J', strtotime($row['postDate'])).' at '.date('H:i a', strtotime($row['postDate'])).'</p>
      <hr>';
							}
}
?>
     
      <h2><span>Archive</span></h2>
      <ul>
          <?php
$stmt = $db->query("SELECT Month(postDate) as Month, Year(postDate) as Year FROM jace_posts GROUP BY Month(postDate), Year(postDate) ORDER BY postDate DESC");
while($row = $stmt->fetch()){
	$monthName = date("F", mktime(0, 0, 0, $row['Month'], 10));
	$slug = 'a-'.$row['Month'].'-'.$row['Year'];
	$y = $row['Year'];
	echo "<li><a href='$slug'>$monthName $y  </a></li>";
}
?>

      </ul>
    </aside>
    