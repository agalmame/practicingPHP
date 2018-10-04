<?php
include_once "models/Blog_Entry_Table.class.php";
$blogTable = new Blog_Entry_Table($db);
$output = include_once "views/search-form-html.php";
if(isset($_POST['search-term'])){
    $term = $_POST['search-term'];
    $searchData = $blogTable->searchEntry($term);
    $output .= include_once "views/search-html.php";
}
    

return $output;

?>