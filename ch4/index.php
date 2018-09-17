<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);

include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Dynamic image gallery";
if(isset($_GET['page'])){
    $fileToLoad = $_GET['page'];
    
}else{
    $fileToLoad = "gallery";
}
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navi.css');
$pageData->setJS('js/lightbox.js');
$pageData->content = include_once "views/navigations.php"; 
$pageData->content .= include_once "views/$fileToLoad.php";
$page = include_once "templates/page.php";
echo $page;
?>
