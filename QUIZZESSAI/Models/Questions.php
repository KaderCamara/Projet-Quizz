<?php
class Questions implements IManager{
    public $id;
    public $libelle;
    public $nbrePoints;
    public $typeReponses;
    public $reponse;
    public $BonneReponse;

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function getId(){
        return $this->id;
    }
    

    public function hydrate($row){
       $this->id=$row['id'];
       $this->libelle=$row['libelle'];
       $this->nbrePoints=$row['nbrePoints'];
       $this->typeReponses=$row['typeReponses'];
       $this->reponse=$row['reponse'];
       $this->BonneReponse=$row['BonneReponse'];
    }
}