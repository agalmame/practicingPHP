<?php
if(!isset($UplaodMessage)){
    $UplaodMessage = "New Image";
}

$imagesAsHtml = "<h1>All images</h1>
                <dl id ='images'>";

$iterator = new DirectoryIterator(".");

while($iterator->valid()){
    $file = $iterator->current();
    $fileName = $file->getFilename();
    $src = "./$fileName";
    $info = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $info->file($src);
    if($mimeType=="image/jpeg"){
        $href = "admin.php?page=images&amp;delete-image=$src";
        $imagesAsHtml .= "<dt><img src='$src' /></dt>
                            <dd><a href='$href'>delete</a></dd>";
    }
    $iterator->next();
}

$imagesAsHtml .= "</dl>";

return "<form action = 'admin.php?page=images' method = 'post' 
        enctype='multipart/form-data'>
            <p>$UplaodMessage</p>
            <input type='file' name='image' accept= 'image/jpeg'/>
            <input type='submit' name='new-image' value='upload'/>
        </form>
        <div>
        $imagesAsHtml
        </div>
";
?>