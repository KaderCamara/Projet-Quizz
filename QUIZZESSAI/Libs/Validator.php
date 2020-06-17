<?php
class Validator {
    
    private $errors=[];

    public function getErrors(){
           return $this->errors;
    }

    public function is_valid(){
       return count($this->errors)===0;
    }



public function  is_empty($valeur,$keys,$sms=null){
    if(empty($valeur)){
        if($sms==null){
            $sms="Champ Obligatoire";
        }
        $this->errors[$keys]= $sms;
        }
    }

public function  is_egal($valeur1,$valeur2,$keys,$sms=null){
    if($valeur1!=$valeur2){
        if($sms==null){
            $sms="le mot de passe doit etre identitique";
        }
        $this->errors[$keys]= $sms;
        }
    }

    public function is_number($nombre,$key,$errorMessage="Veuiller saisir un nombre"){
        if(!is_numeric($nombre)){
            $this->errors[$key]= $errorMessage;
        }
    }    






}



?>