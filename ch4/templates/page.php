<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
return "
<!doctype html>
<html>
<head>
<title>
$pageData->title
</title>
$pageData->css
<meta Content= text/html;charset=UTF-8;http-equiv='Content-Type>
<meta name='viewport' content='width=device-width,initial-scale=1.0'>
$pageData->css
$pageData->embededStyle 
</head>
<body>
$pageData->content
</body>
</html>
";