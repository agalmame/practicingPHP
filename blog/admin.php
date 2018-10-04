<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL Blog demo";
$pageData->addStyle('css/blog.css');
// $pageData->content="<h1>YES!</h1>";
$pageData->content = include_once "views/admin/admin-navigation.php";
$db = new PDO("mysql:host=localhost;dbname=simple_blog","root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_GET['page'])){
    $loadedPage=$_GET['page'];
}else{
    $loadedPage = 'enteries';
}
$pageData->content .= include_once "controllers/admin/$loadedPage.php";
$page = include_once "views/page.php";
echo $page;

?>