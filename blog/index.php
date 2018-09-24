<?php
error_repporting(E_ALL);
ini_set("display_errors",1);
$pageData = new Page_Data();
$pageData->title= "PHP/MYSQL blog demo exemple";
$pageData->addStyle("css/blog.css");
$db = new PDO("mysql:host=localhost;dbname=simple_blog","root","");
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pageData->content .= include_once "controllers/blog.php";
$page = include_once "views/page.php";
echo $page;
?>

