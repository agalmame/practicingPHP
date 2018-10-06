<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL Blog demo";
$pageData->addStyle('css/blog.css');
// $pageData->content="<h1>YES!</h1>";
$pageData->addScript("script/editor.js");
// $pageData->content = include_once "views/admin/admin-navigation.php";
$db = new PDO("mysql:host=localhost;dbname=simple_blog","root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if(isset($_GET['page'])){
//     $loadedPage=$_GET['page'];
// }else{
//     $loadedPage = 'enteries';
// }
include_once "models/Admin_User.class.php";
$admin = new Admin_User();
$pageData->content = include_once "controllers/admin/login.php";
if($admin->isLoggedIn()){
    $pageData->content = include_once "views/admin/admin-navigation.php";
    if(isset($_GET['page'])){
        $controller = $_GET['page'];
    }else{
        $controller = "enteries";
    }
    $pageData->content .= include_once "controllers/admin/$controller.php";
}
$page = include_once "views/page.php";
echo $page;

?>