<?php
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);
$entriesOutput = $entryTable->getAllEntries();

$entriesAsHtml = include_once "views/admin/entries-html.php";

return $entriesAsHtml;

?>