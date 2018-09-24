<?php
include_once "models/Blog_Entry_Table.class.php";

$entryTable = new Blog_Entry_Table($db);
if(isset($_POST['action'])){
    if($_POST['action'] == 'save'){
        $entryTable->saveEntry($_POST['title'], $_POST['entry']);
    }
}
$editorHtml = include_once "views/admin/editor-html.php";
return $editorHtml ;
