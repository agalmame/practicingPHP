<?php

include_once "models/Admin_Table.class.php";



if(isset($_POST['email']) and $_POST['password']==$_POST['confirmPassword']){
    $adminTable = new Admin_Table($db);
    try{
        $adminTable->create( $_POST['email'],$_POST['password']);
        $adminFormMessage = "new user created  for".  $_POST['email'];
    }catch(Exception $e){
        trigger_error("ERRO:". $e->getMessage());
    }
}

$output = include "views/admin/new-admin-form-htm.php";
return $output;

?>