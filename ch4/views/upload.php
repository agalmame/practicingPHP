<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
//complete source code for views/upload.php

$imageSent = isset($_POST['new-img']);
if($imageSent){
    $out = showImage();
}else{
    $out = include_once "views/upload-form.php";
}

return $out;

function showImage(){
    $out = "<pre>".print_r($_FILES,true)."</pre>";
    return $out;
}
