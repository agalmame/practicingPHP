<?php
include_once "models/Table.class.php";
    
class Blog_Entry_Table extends Table{


    public function saveEntry($title, $entry){
        $sql = "INSERT INTO blog_entry2 (title, entry_text) VALUES (?, ?)";
        $data = array($title, $entry);
        $statement = $this->makeStatement($sql,$data);
    }

    public function getAllEntries(){
        $sql = "select entry_id, title, SUBSTRING(entry_text, 1, 50) as intro
         from blog_entry2";
         $statement = $this->makeStatement($sql);
         return $statement;   
    }

    public function getEntry($id){
        $sql = "select * from blog_entry2 where entry_id =?";
        $data = array($id);
        $statement = $this->makeStatement($sql, $data);
        return $statement->fetchObject();
    }

    public function deleteEntry($id){
        $this->deleteCommentById($id);
        $sql = "delete from blog_entry2 where entry_id=?";
        $data = array($id);
        $statement = $this->makeStatement($sql,$data);
    }

    private function deleteCommentById($id){
        include_once "models/Comment_Table.class.php";
        $commentTable = new Comment_Table($this->db);
        $commentTable->deleteByEntryId($id);
    }

    public function updateEntry($id, $title, $text){
        $sql = "update blog_entry2 set 
                title =?,
                entry_text = ? where entry_id=?";
        $data = array($title, $text, $id);
        $statement = $this->makeStatement($sql,$data);
    }

    public function searchEntry($searchTerm){
        $sql = "select entry_id , title, date_created from blog_entry2 where title like ? or entry_text like ?";
        $data= array("%$searchTerm%","%$searchTerm%");
        $statement = $this->makeStatement($sql,$data);
        return $statement;
    }
}
?>