<?php
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);

if(isset($_GET['id'])){
    $entryId = $_GET['id'];
    $object= $entryTable->getEntry($entryId);
    $blogOutput = include_once "views/entry-html.php";
}else{
    $entries = $entryTable->getAllEntries();
    $blogOutput = include_once "views/list-entry-html.php";
}
return $blogOutput;

?>