<?php
class User implements IManager{
    public $id;
    public $fullName;
    public $login;
    public $pwd;
    public $profil;
    public $avatar;
    public $score;

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function getProfil(){
        return $this->profil;
    }
    

    public function hydrate($row){
       $this->id=$row['id'];
       $this->fullName=$row['fullName'];
       $this->login=$row['login'];
       $this->pwd=$row['pwd'];
       $this->profil=$row['profil'];
       $this->avatar=$row['avatar'];
       $this->score=$row['score'];
    }
}