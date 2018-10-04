<?php

class Uploader{

    private $name;
    private $data;
    private $destination;
    private $errorMessage;
    private $errorCode;

    public function __construct($key){
        $this->name = $_FILES[$key]['name'];
        $this->data = $_FILES[$key]['tmp_name'];
        $this->errorCode = ($_FILES[$key]['error']);
   }

    public function saveIn($path){
        $this->destination = $path ;
    }

    private function readyToUplaod(){
        $folderIsWritable = is_writable($this->destination);
        if(!$folderIsWritable){
            $this->errorMessage = "ERROR: the folder $folderIsWritable
                                    isn't writable chande permission";
            $canUpload = false;
        }else{
            $canUpload = true;
        }
        return $canUpload;
    }

    public function save(){
        if($this->readyToUplaod()){
            $name = "$this->destination/$this->name";
            move_uploaded_file($this->data,$name); 
        }else{
            $excep = new Exception($this->errorMessage);
            throw $excep;
        }
   }
}
?>