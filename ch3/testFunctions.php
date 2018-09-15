<?php
//function declaration
function p($content){
    return "<p>$content</p>";
}
$output = p('this is the first stetement');
$output .= "<h1>hello just a text </h1>";
$output .= p('and this is the second');
echo $output;
