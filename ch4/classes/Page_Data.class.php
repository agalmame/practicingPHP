<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
class Page_Data 
{
    public $title = "";
    public $content = "";
    public $css = "";
    public $embededStyle = "";

    public function addCSS($href){
        $this->css .= "<link href=$href rel='stylesheet'>";
    }
}