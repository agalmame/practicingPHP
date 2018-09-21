<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$PageData = new stdClass();
$pageData->title = "portfolio site";
$pageData->content = include_once "template/navigation.php";
$pageData->css = "<link href='css/layout.css' rel='stylesheet/>";
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
    $pageData->content .= include_once "views/$fileToLoad.php";
}

$page = include_once "template/page.php";

 echo $page;
?>
