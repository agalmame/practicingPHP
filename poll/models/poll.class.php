<?php
 class Poll
 {
     private $db;

     public function __construct($db){
         $this->db=$db;
     }
     public function getPollData(){
         $sql="select poll_question ,yes,no from poll where poll_id=1";
         $statement = $this->db->prepare($sql);
         $statement->execute();
         
         $pollData= $statement->fetchObject();
         return $pollData;
     }
     public function updatePoll($input){
        if($input==="no"){
            $updateSQL="update poll set no=no+1 where poll_id =1";
        }elseif($input==="yes"){
            $updateSQL="update poll set yes=yes+1 where poll_id =1";
        }
        $updateStatement = $this->db->prepare($updateSQL);
        $updateStatement->execute();
     }
 }
 ?>