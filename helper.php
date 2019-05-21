<?php

function format_comments($comments) {
    $html = array();
    $root_id = 0;
    foreach ($comments as $comment)
        $children[$comment['rid']][] = $comment;

    // loop will be false if the root has no children (i.e., an empty comment!)
    $loop = !empty($children[$root_id]);

    // initializing $parent as the root
    $parent = $root_id;
    $parent_stack = array();

    // HTML wrapper for the menu (open)
    $html[] = '<ul class="comment-list comment">';

    while ($loop && ( ( $option = each($children[$parent]) ) || ( $parent > $root_id ) )) {
        if ($option === false) {
            $parent = array_pop($parent_stack);

            // HTML for comment item containing childrens (close)
            $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2) . '</ul>';
            $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1) . '</li>';
        } elseif (!empty($children[$option['value']['comment_id']])) {
            $tab = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1);
            $keep_track_depth = count($parent_stack);
            if ($keep_track_depth <= 3) {
                $reply_link = '<a href="javascript:void(0);" style="margin-top: 40px;margin-right: 40px;color: #4CAF50;" class="reply_button tooltips tooltipped reply-btn" id="%2$s" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i> Reply</a>';
            } else {
                $reply_link = '';
            }
			$img = '' . $option["value"]["img"];
			$name = '<div class="left comment-img"><a href="'.$option['value']['username'].'"><img src='. WEB_ROOT."cptngood/img/".$img .' style="width: 60px;height: 60px;border-radius: 50%;border: 2px solid #fff;"/> </a></div><div class="card-content comment-content"><div class="comment-meta">';
            //$name.=  strlen($option['value']['created_by']) ? $option['value']['created_by'] : 'anonymous_user';
            //$reply_link = '%1$s%1$s<a href="#" class="reply_button" id="%2$s">reply</a><br/>';
            // HTML for comment item containing childrens (open)
            $html[] = sprintf(
                    '%1$s<li id="li_comment_%2$s" data-depth-level="' . $keep_track_depth . '">' .
                    '%1$s%1$s<div class="clearfix card"><span class="commenter">%3$s</span>' .
                    '<span class="comment_date">%5$s</span></div>' .
                    '%1$s%1$s<div style="margin-top:4px;">%4$s</div></div>' .
                    $reply_link . '</li>', $tab, // %1$s = tabulation
                    $option['value']['comment_id'], //%2$s id
                    $name . '<p class="author"><a href="'.$option['value']['username'].'">'.$option['value']['username'].'</a>'. '<span> says: </span></p>', // %3$s = commenter
                    '<span style="display:none;" style="margin-top: 0px;margin-bottom: 0px;">'.$option['value']['comment_id'].'</span>', // %4$s = comment
                    '<p class="date" style="margin-top: 0px;">' . date('M j, Y', strtotime($option['value']['created_date'])).' at '.date('H:i a', strtotime($option['value']['created_date'])).'</p>'. $option['value']['comment_text'].'' // %5$s = comment created_date
					
            );
            //$check_status = "";
            $html[] = $tab . "\t" . '<ul class="comment-list comment">';

            array_push($parent_stack, $option['value']['rid']);
            $parent = $option['value']['comment_id'];
        } else {
			$img = '' . $option["value"]["img"];
			$name = '<div class="left comment-img"><a href="'.$option['value']['username'].'"><img src='. WEB_ROOT."cptngood/img/".$img .' style="width: 60px;height: 60px;border-radius: 50%;border: 2px solid #fff;"/> </a></div><div class="card-content comment-content"><div class="comment-meta">';
            //$name = strlen($option['value']['created_by']) ? $option['value']['created_by'] : 'anonymous user';
            $keep_track_depth = count($parent_stack);
            if ($keep_track_depth <= 3) {
$reply_link = '<a href="javascript:void(0);" style="margin-top: 40px;margin-right: 40px;color: #4CAF50;" class="reply_button tooltips tooltipped reply-btn" id="%2$s" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i> Reply</a>';
            } else {
                $reply_link = '';
            }

            //$reply_link = '%1$s%1$s<a href="#" class="reply_button" id="%2$s">reply</a><br/>%1$s</li>';
            // HTML for comment item with no children (aka "leaf")
            $html[] = sprintf(
                    '%1$s<li id="li_comment_%2$s" data-depth-level="' . $keep_track_depth . '">' .
                    '%1$s%1$s<div class="clearfix card"><span class="commenter">%3$s</span>' .
                    '<span class="comment_date">%5$s</span>' .
					'%1$s%1$s<div style="margin-top:4px;">%4$s</div></div>' .
                    $reply_link . '</li>', str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1), // %1$s = tabulation
                    $option['value']['comment_id'], //%2$s id
                    $name . '<p class="author"><a href="'.$option['value']['username'].'">'.$option['value']['username'].'</a>'. '<span> says: </span></p>', // %3$s = commenter
                    '<span style="display:none;" style="">'.$option['value']['comment_id'].'</span>', // %4$s = comment
                    '<p class="date" style="">' . date('M j, Y', strtotime($option['value']['created_date'])).' at '.date('H:i a', strtotime($option['value']['created_date'])).'</p>'. $option['value']['comment_text'].'' // %5$s = comment created_date
					
            );
        }
    }

    // HTML wrapper for the comment (close)
    $html[] = '</ul>';
    return implode("\r\n", $html);
}

/*
 * End of helper.php
 */