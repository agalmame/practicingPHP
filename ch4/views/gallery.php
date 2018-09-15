<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
//complete source code for views/gallery.php
return showImage();

function showImage(){
    $out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='image'>";
    $out .= "<li>will soon </li>";
    
    $filesInFolder = new DirectoryIterator("img");
    while($filesInFolder->valid()){
        $file = $filesInFolder->current();
        $fileName = $file->getFilename();
        $src = "img/".$fileName;
        $fileInfo = new Finfo( FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($src);
        if($mimeType == 'image/jpeg' || $mimeType =='image/png'){
            $out .=  "<li><img alt='$fileName' src= '$src'/>";
        }
        $filesInFolder->next();

    }
    $out .= "</ul>";
    return $out;
}