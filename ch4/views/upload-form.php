<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
return "
<form  action='index.php?page=upload' method='post' enctype='multipart/form-data'>
<input type='file' accept='image/png' name='image-data'>
<div><input type='submit' value='upload' name='new-img'></div>
</form>
";