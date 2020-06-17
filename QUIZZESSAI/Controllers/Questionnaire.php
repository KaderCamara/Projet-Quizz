<?php
   
  class Questionnaire extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();
        $this->dirname="Questionnaire";
        $this->layout="layout_admin";
        $this->validator=new Validator();
        $this->manager=new QuestionsManager();  
    }
   
    //LOAD THE VIEWS
   
    public function loadViewListerQuestions(){
      session_start(); 
      $this->layout="layout_admin";
      $this->views="listerQuestions";
      $this->render();  
   }


   

   public function loadViewCreerQuestions(){
      session_start(); 
      $this->layout="layout_admin";
      $this->views="creerQuestions";
      $this->render();  
   }


   public function creerQuestions(){
    extract($_POST);

    
    if(isset($_POST['btn_questions'])){
          
         
        $this->validator->is_empty($libelle,'libelle',"Champ Obligatoire");
        $this->validator->is_empty($nbrePoints,'nbrePoints',"Champ Obligatoire");
        $this->validator->is_empty($typeReponses,'typeReponses',"Champ Obligatoire");
        $this->validator->is_empty($reponse1,'reponse1',"Champ Obligatoire");
        $this->validator->is_empty($reponse2,'reponse2',"Champ Obligatoire");
        $this->validator->is_empty($reponse3,'reponse3',"Champ Obligatoire");
        $this->validator->is_empty($reponse4,'reponse4',"Champ Obligatoire");
     if($this->validator->is_valid()){
        $this->validator->is_number($nbrePoints,'nbrePoints',"saisir un nombre");
        if($this->validator->is_valid()){
            $this->manager=new QuestionsManager();
            $questions=null;
              if($questions==null){
                 $newquestions= new questions();
                 $newquestions->libelle=$libelle;
                 $newquestions->nbrePoints=$nbrePoints;
                 $newquestions->typeReponses=$typeReponses;
                 $newquestions->reponse=$reponse1." , ".$reponse2." , ".$reponse3." , ".$reponse4;
                 $newquestions->BonneReponse=$BonneReponse;
                 $result=$this->manager->create($newquestions);
                 if($result){
                    $this->data['err_questions']="question crée avec succés";
                    $this->loadViewCreerQuestions();
                 }
 
              }
           }
     }else{
        //Champs non remplis=>Erreur
        $erreurs= $this->validator->getErrors();
        $this->data['erreurs']=$erreurs;
        $this->loadViewCreerQuestions();
        
     }
     
  
     }else{
        $this->loadViewCreerQuestions();
     }    

   }

   public function listQuestions(){  
      $liste=$this->manager->getQuestion();
      var_dump($liste);
      $kader=$this->manager->getNumberQuestions();
      var_dump($kader);
    }    

}
