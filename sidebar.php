
 <aside class="span-8 last right clearfix">
      <h2><span>blog categories</span></h2>
      <ul>
          <?php
$stmt = $db->query('SELECT catTitle, catSlug FROM jace_posts_categories ORDER BY catID DESC limit 10');
while($row = $stmt->fetch()){
	echo '<li><a href="c-'.$row['catSlug'].'">'.$row['catTitle'].'</a></li>';
}
?>
      </ul>
      
      
    
    </aside>
    