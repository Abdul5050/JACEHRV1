<?php
require_once('cptngood/includes/config.php');
require_once('cptngood/includes/user.php');
require_once('cptngood/includes/protect.php');
include("helper.php");

if (isset($_POST) && isset($user->is_logged_in())) {
    $parent_id = ($_POST['reply_id'] == NULL || $_POST['reply_id'] == '') ? 0 : $_POST['reply_id'];
    $email = $_POST['comment_email'];
    $name = $_POST['comment_name'];
    $web = $_POST['comment_web'];
    $username = $_POST['username'];
	$pid = $_POST['pid'];
    $comment_text = $_POST['comment_text'];
    $depth_level = $_POST['depth_level'];
     $sql = "INSERT INTO pcomment(comment_text, rid,pid, created_by) VALUES('$comment_text', $parent_id,'$pid', '$username')";
    $query = dbQuery($sql);
    $inserted_id = dbInsertId();
    $sql = "SELECT * FROM pcomment WHERE comment_id=" . $inserted_id;
    $results = dbQuery($sql);
    if ($results) {
        while ($row = dbFetchAssoc($results)) {
            if ($depth_level < 3) {
                $reply_link = "<a href=\"#\" class=\"reply_button\" id=\"{$row['comment_id']}\">reply</a><br/>";
            } else {
                $reply_link = '';
            }
            $depth = $depth_level + 1;
            $name = strlen($row['created_by']) ? $row['created_by'] : 'anonymous user';
            echo "<li id=\"li_comment_{$row['comment_id']}\" data-depth-level=\"{$depth}\">" .
            "<div><span class=\"commenter\">{$name} says</span>&nbsp;<span class=\"comment_date\">,  {$row['created_date']}</span></div>" .
            "<div style=\"margin-top:4px;\">{$row['comment_text']}</div>" .
            $reply_link . "</li>";
        }
        echo '<div class="success">Comment successfully posted</div>';
    } else {
        echo '<div class="error">Error in adding comment</div>';
    }
} else {
    echo '<div class="error">Please enter required fields</div>';
}
 
/*
 * End of add_comment.php
 */