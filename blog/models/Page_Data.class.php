<?php

class Page_Data
{
    public $title = "";
    public $content = "";
    public $css = "";
    public $embededStyle = "";
    public $scriptElements = "";

    public function addStyle($href){
        $this->css .= "<link rel='stylesheet' href='$href?v=". time() . "'/>";
    }

    public function addScript($src){
        $this->scriptElements .= "<script src='$src' type='text/javascript'></script>";
    }
}