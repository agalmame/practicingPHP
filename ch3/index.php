<?php
error_reporting(E_ALL);
ini_set("sidplaye_errors",1);
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "building a processing web form with php";
$pageData->content = include_once "views/navigation.php";

$buttonIsClicked = isset($_GET['page']);
if($buttonIsClicked){
    $fileToLoad = $_GET['page'];
    $pageData->content .= include_once "views/$fileToLoad.php";
}

$page = include_once "templates/page.php";

echo $page;

?>