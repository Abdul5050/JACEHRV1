<?php

function protect($v){
    $v = trim($v);
    $v = stripslashes($v);
    $v = htmlentities($v, ENT_QUOTES);
    $v = strip_tags($v);
    
    return $v;
}
