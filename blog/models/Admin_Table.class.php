<?php
include_once "models/Table.class.php";

class Admin_Table extends Table{

    public function create($email,$password){
        $this->checkEmail($email);
        $sql = "insert into admin (email,password) values (?,MD5(?))";
        $data = array($email,$password);
        $this->makeStatement($sql,$data); 
    }

    public function checkEmail($email){
        $sql = "select * from admin where email = ?";
        $data = array($email);
        $stetement = $this->makeStatement($sql,$data);
        if($stetement->rowCount()>0){
            $e = new Exception("ERROR: email already used!");
            throw $e;
        }
    }  
    
    public function checkCredentials($email,$password){
        $sql = "select * from admin where email=? and password = MD5(?)";
        $data = array($email, $password);
        $stetement = $this->makeStatement($sql, $data);
        if($stetement->rowCount()>0){
            $outupt = true;
        }else{
            $excep = new Exception('Login failed');
            throw $excep;
        }
        return $outupt;
    }
}

?>