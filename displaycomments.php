<?php
require_once('cptngood/includes/config.php');
require_once('cptngood/includes/user.php');
require_once('cptngood/includes/protect.php');
include("helper.php");
 
 
 $pid = $row['postID'];
$sql = "SELECT * FROM users u,pcomment p where u.username=p.created_by and p.pid='$pid'  ";
$results = dbQuery($sql);
$items = array();
while ($row = mysqli_fetch_array($results)) {
    $items[] = $row;
}
$commentsb = format_comments($items);

echo $commentsb;
 
/*
 * End of comments.php
 */
 
 ?>