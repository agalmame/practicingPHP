<?php
return "
<!doctype html>
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv = 'Content-Type' content='text/html;charset=UTF-8'/>
$pageData->css
$pageData->embededStyle
$pageData->scriptElements
</head>
<body>
$pageData->content
</body>
";