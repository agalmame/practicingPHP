<?php
include_once "models/Comment_Table.class.php";
$commentTable = new Comment_Table($db);
if(isset($_POST['test'])){
    $commentTable->saveComment($entryId,$_POST['user-name'],$_POST['new-comment']);
}
$comments = include_once "views/comment-form-html.php";
$allComments = $commentTable->getAllById( $entryId );
//get first row as a StdClass object

$comments .= include_once "views/comments-html.php";

return $comments;
?>