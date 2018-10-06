<?php
if(!isset($entryData)){
    $entryData = new stdClass();
    $entryData->entry_id =0;
    $entryData->title = "";
    $entryData->entry_text ="";
}

return "
<form method='post'  action='admin.php?page=editor' id='editor'>
    <input  id='id' name='id'  value='$entryData->entry_id' type='hidden'/>
    <fieldset>
        <legend>New Entery Submission</legend>
        <label>Title</label>
        <input type='text' name='title'  maxlenght='150' value = '$entryData->title'/>
        <p id='title-warning'></p>
        <label>Entry</label>
        <textarea name='entry'>$entryData->entry_text</textarea>
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save'/>
            <input type='submit' name='action' value='delete'/>
        </fieldset>
    </fieldset>
</form>
<!DOCTYPE html>
<html>
<head>
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>tinymce.init({ selector:'textarea',plugins:'image' });</script>
";
?>