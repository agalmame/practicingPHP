<?php 
include_once "models/Admin_Table.class.php";
if(isset($_POST['log-in'])){
    $adminTable = new Admin_Table($db);
    try{
        $check = $adminTable->checkCredentials($_POST['email'],$_POST['password']);
        $admin->login();
        setcookie("userEmail",$_POST['email'],time()+60*2,"/","localhost",false,false);
    }catch(Exception $e){
        trigger_error("ERROR: ".$e->getMessage());
    }



}
if(isset($_GET['log'])){
    if($_GET['log']=='out'){
        $admin->logout();
    }
}

$view = include_once "views/admin/login-form-html.php";
return $view;
?>