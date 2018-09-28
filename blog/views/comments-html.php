<?php
if(!isset($allComments)){
    trigger_error('views/comments-html.php needs $allComment');
}



$allCommentsHtml = "<ul id='comments'>";
while($commentData = $allComments->fetchObject()){
    $allCommentsHtml .= "<li>
                            $commentData->author wrote:
                            <p>$commentData->txt</p>
                        </li>";
}
$allCommentsHtml = "</ul>";
return $allCommentsHtml;
?>