<?php

class UserManager extends Manager{
   
    function __construct(){
        $this->className="User";
    }



    public function create($objet){
       $sql="INSERT INTO `user` (`id`, `fullName`, `login`, `pwd`, `profil`, `avatar`, `score`) VALUES (NULL, '".$objet->fullName."', '".$objet->login."', '".$objet->pwd."', '".$objet->profil."', '".$objet->avatar."', '0');";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($objet){

    }
    public  function delete($id){
      
    }
    public function findAll(){
      
    }
    public function findById($id){

    }  

    public function loginExist($login){
        $sql="select * from user where login='$login' ";
        $datas=$this->executeSelect($sql);
        return count($datas)==1? $datas[0]:null;
        }

    public function getUserByLoginAndPwd($login,$pwd){
       $sql="select * from user where login='$login' and pwd='$pwd'";
       if($users=$this-> ExecuteSelect($sql)){
       return $users[0];
       }
    } 

    public function getNumberJoueur() {
        $sql="select * from user where profil = 'joueur'";
        $datas=$this->executeSelect($sql);
        return count($datas);
      }
  
      
       public function getJoueur() {
        $sql="select * from user where profil = 'joueur' order by score desc";
        $data= $this->executeSelect($sql);
        return  $data;
      }
}