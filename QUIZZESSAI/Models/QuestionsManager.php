<?php

class QuestionsManager extends Manager{
   
    function __construct(){
        $this->className="Questions";
    }



    public function create($objet){
       $sql="INSERT INTO `quest` (`id`, `libelle`, `nbrePoints`, `typeReponses`, `reponse`, `BonneReponse` ) VALUES (NULL, '".$objet->libelle."', '".$objet->nbrePoints."', '".$objet->typeReponses."', '".$objet->reponse."', '".$objet->BonneReponse."');";
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

    public function getNumberQuestions() {
        $sql="select * from quest";
        $kader=$this->executeSelect($sql);
        return count($kader);
      }
  
      
       public function getQuestion() {
        $sql="select * FROM quest order by id asc";
        return $this->executeSelect($sql); 
      }

    
}