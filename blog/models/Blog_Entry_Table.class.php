<?php
class Blog_Entry_Table {
    private $db;

    public function __construct($db){
        $this->db=$db;
    }
    public function saveEntry($title, $entry){
        print("test");
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
}
?>