<?php
class Table{
    public $db;

    public function __construct($db){
        $this->db = $db;
    }
    
    public function makeStatement($sql,$data = null){
        $statement = $this->db->prepare($sql);
        try{
            $statement->execute($data);
        }catch(Exception $e){
            $msg = "<h2>you tried to execute : $sql</h2>
            <p>exceptionL: $e</h2>";
            trigger_error($msg);
        }
        return $statement;
    }
}

?>