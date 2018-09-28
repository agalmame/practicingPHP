<?php
if(!isset($entriesOutput)){
    trigger_error('view needs the $entriesOutput variable');
}

$entriesList = "<ul>";
while($entry = $entriesOutput->fetchObject()){
    $href = "admin.php?page=editor&amp;id=$entry->entry_id";
    $entriesList .= "<li><a href='$href'>$entry->title</a></li>";
}
$entriesList .= "</ul>";
return $entriesList;
?>