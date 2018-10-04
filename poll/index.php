<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include_once "models/Page_Data.class.php";

$pageData = new Page_Data();
$pageData->title = "The poll application";
$dbInfo = "mysql:host=localhost;dbname=playground";
$dbUser = "root";
$dbPassword= "";
try{
    $db = new PDO($dbInfo, $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pageData->content = "<h1>We're connected</h1>";
}catch(EXEPTION $e){
    $pageData->content = "<h1>no connection</h1>";
}
$pageData->content .= include_once "controllers/poll.php";

$page = include_once "views/page.php";
echo $page;
?>