<?php
if(!isset($object)){
    trigger_error('the fallowing variable is needed: $object ');
}
return "<article>
<h1>$object->title</h1>
<div class='date'>$object->date_created</div>
<p>$object->entry_text</p>
</article>
";
?>