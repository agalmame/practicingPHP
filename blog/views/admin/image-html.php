<?php
if(!isset($UplaodMessage)){
    $UplaodMessage = "New Image";
}

return "<form action = 'admin.php?page=images' method = 'post' 
        enctype='multipart/form-data'>
            <p>$UplaodMessage</p>
            <input type='file' name='image' accept= 'image/jpeg'/>
            <input type='submit' name='new-image' value='upload'/>
        </form>
";
?>