
<ul id='adminmenu'>
	<li><a href='index.php'>Blog</a></li>
	<li><a href='categories.php'>Categories</a></li>
        <?php
			
			if( $_SESSION['adminLevel'] =="5"){
			?>
                        <li><a href='users.php'><i class="icon-user"></i> Users</a></li><?php } ?>
	<li><a href="../../../" target="_blank"><i class="icon-eye-open"></i> Website</a></li>
	
</ul>
<div class='clear'></div>
<hr />