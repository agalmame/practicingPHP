<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
class Page_Data 
{
    public $title = "";
    public $content = "";
    public $css = "";
    public $embededStyle = "";
    public $jsElements="";

    public function addCSS($href){
        $this->css .= "<link href=$href rel='stylesheet'>";
    }

    public function setJS($jsFile){
        $this->jsElements .= "<script src='$jsFile'></script>";
    }
}