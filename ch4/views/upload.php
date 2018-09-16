<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
//complete source code for views/upload.php
include_once "classes/uploader.class.php";
$imageSent = isset($_POST['new-img']);
if($imageSent){
    $out = showImage();
}else{
    $out = include_once "views/upload-form.php";
}

return $out;

function showImage(){
    $fileUpload = new Uploder('image-data');
    $fileUpload->saveIn("img");
    $saved =  $fileUpload->save();
    if($saved){
        $out = "<p>file uploaded</p>";
    }else
        $out = "<p>somthing wrong </p>";

    return $out;
}
