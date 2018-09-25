<?php
class Blog_Entry_Table {
    private $db;

    public function __construct($db){
        $this->db=$db;
    }

    public function saveEntry($title, $entry){
        $sql = "INSERT INTO blog_entry (title, entry_text) VALUES (?, ?)";
        $statement = $this->db->prepare($sql);
        $par = array($title, $entry);
        try{
            $statement->execute($par);
        }catch(Exception $e){
            $msg = "<p>you tried to run sql: $sql</p> <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }

    public function getAllEntries(){
        $sql = "select entry_id, title, SUBSTRING(entry_text, 1, 50) as intro
         from blog_entry";
        $statement = $this->db->prepare($sql);
        try{
            $statement->execute();
        }catch(Exception $e){
            $msg= "<p>you are trying to: $sql</p>
                   <p> exception: $e";
            trigger_error($msg);
        }
        return $statement;   
    }
    public function getEntry($id){
        $sql= "select * from blog_entry where entry_id =?";
        $statement= $this->db->prepare($sql);
        $data= array($id);
        try{
            $statement->execute($data);
        }catch(Exception $e){
            $msgErr = "<h1>you tried to run this command:$sql</h1>
                       <p>exception: $e</p>";
            trigger_error($msgErr);
        }
        $object= $statement->fetchObject();
        return $object;
    }
}
?>