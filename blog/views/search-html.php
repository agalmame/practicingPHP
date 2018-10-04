<?php
if(!isset($searchData)){
    trigger_error('view search-html.php needs $searchData variable');
}

$outputs = "<section id='search'><p>you searched for $term</p><ul>";
while($searchRow = $searchData->fetchObject()){
    $href = "index.php?page=blog&amp;id=$searchRow->entry_id";
    $outputs .= "<li> <a href='$href'>$searchRow->title</a> </li> ";
}
$outputs .= "</ul></section>";

return $outputs;
?>