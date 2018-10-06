<?php

class Admin_User{
    private  $loggedIn = false;

    public function __construct(){
        session_start();
    }

    public function isLoggedIn(){
        if(isset($_SESSION['log-in'])){
            $out = $_SESSION['log-in'];
        }else{
            $out = false;
        }
        return $out;
    }

    public function login(){

        $_SESSION['log-in'] = true;

    }

    public function logout(){

        $_SESSION['log-in'] = false;
    }
}