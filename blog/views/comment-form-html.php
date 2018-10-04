<?php 
if(!isset($entryId)){
    trigger_error('views/comment-html.php needs an $entryId');
}
return "
<form id='comment-form' action = 'index.php?page=blog&amp;id=$entryId' method='post' >
    <input type='hidden' name='entry-id' value='$entryId'/>
    <label>Your name</label>
    <input type='text' name='user-name'/>
    <label> Your comment</label>
    <textarea name='new-comment'></textarea>
    <input type='submit' name='test' value='post!'>
</form>";