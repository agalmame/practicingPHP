<?php 
return "
<form method='post'  action='admin.php?page=editor' id='editor'>
    <fieldset>
        <legend>New Entery Submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlenght='150'/>
        <label>Entry</label>
        <textarea name='entry'></textarea>
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save'/>
            <input type='submit' name='action' value='delete'/>
        </fieldset>
    </fieldset>
</form>
";
?>