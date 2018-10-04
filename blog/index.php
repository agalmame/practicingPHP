<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title= "PHP/MYSQL blog demo exemple";
$pageData->addStyle("css/blog.css");
$pageData->addScript("script/script.js");

$db = new PDO("mysql:host=localhost;dbname=simple_blog","root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$controller = 'blog';
if(isset($_GET['page'])){
    if($_GET['page']=='search'){
        $controller = 'search';
    }
}

$pageData->content .= include_once "views/search-form-html.php";
// $pageData->content .= include_once "controllers/blog.php";
$pageData->content .= include_once "controllers/$controller.php";

$page = include_once "views/page.php";
echo $page;
// echo phpversion();
?>

