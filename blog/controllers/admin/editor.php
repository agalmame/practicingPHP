<?php
include_once "models/Blog_Entry_Table.class.php";

$entryTable = new Blog_Entry_Table($db);
if(isset($_GET['id'])){
    $entryData = $entryTable->getEntry($_GET['id']);
}
if(isset($_POST['action'])){
    if($_POST['action'] == 'save' ){
        if($_POST['id'] ==='0'){
            $entryTable->saveEntry($_POST['title'], $_POST['entry']);
        }else{
            $entryTable->updateEntry($_POST['id'], $_POST['title'], $_POST['entry']);
        }
    }elseif($_POST['action']=='delete'){
        $entryTable->deleteEntry($_POST['id']);
    }
}
$editorHtml = include_once "views/admin/editor-html.php";
return $editorHtml ;
