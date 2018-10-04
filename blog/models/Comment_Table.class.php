<?php
include_once "models/Table.class.php";
class Comment_Table extends Table{
    
    public function saveComment($entryId, $author,$txt){
        $sql = "INSERT INTO comment2 (entry_id, author, txt) values(?, ?, ?)";
        $data = array($entryId, $author, $txt);
        $statement = $this->makeStatement($sql,$data);
        return $statement;
    }

    public function getAllById($id){
        $sql = "SELECT author, txt , date FROM comment2 WHERE entry_id=? ORDER BY comment_id";
        $data = array($id);
        $statement = $this->makeStatement($sql,$data);
        return $statement;
    }

    public function deleteByEntryId($id){
        $sql = "delete from comment2 where entry_id=?";
        $data = array($id);
        $stetement = $this->makeStatement($sql, $data);
    }
}
?>