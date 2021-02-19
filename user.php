<?php 
include_once "database.php";

class user extendS database{



    private $userid;
    private $Name;
    private $Password;
    private $Email;
    private $Gender;



    public function userid(){
        return $this->userid;
    }
    public function getname(){
        return $this->Name;
    }
    public function getpassword(){
        return $this->Password;
    }
    
    public function getemail(){
        return $this->Email;
    }
    
    
    public function getgender(){
        return $this->Gender;
    }


    public function userid($value){
        $this->userid=$value;
  }
  public function setname($value){
       $this->Name=$value;
  }
  public function setpassword($value){
        $this->Password=$value;
  }
  
  public function setemail($value){
        $this->Email=$value;
  }
 
 
  public function setgender($value){
        $this->Gender=$value;
  }
 


}






















?>