<?php
   
  class Security extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();
        $this->dirname="security";
        $this->layout="layout_connexion";
        $this->manager=new UserManager(); 
         session_start();
    }
   
    //LOAD THE VIEWS
   
    
    

   public function loadViewInscription($layout="layout_connexion"){
      $this->layout=$layout;
      $this->views="inscription";
      $this->render();  
   }

   public function loadViewInscriptionAdmin(){
      $this->layout="layout_admin";
      $this->views="inscription";
      $this->render();  
   }

    public function index(){
      unset( $_SESSION['userConnect']);
      session_destroy();
       $this->views="Connexion";
       $this->render();
      
    }

     

    public function seConnecter(){
      
      
      

      //extract permet d'extraire les valeurs d'un tableau associatif sur ces clés
       if(isset($_POST['btn_connexion'])){
          //Passer par le Formulaire de Connexion
         
            extract($_POST);
            $this->validator->is_empty($login,'login',"Login Obligatoire");
            $this->validator->is_empty($pwd,'pwd',"Password Obligatoire");
            if($this->validator->is_valid()) {
            //Connexion a la Base Donnée   
               $this->manager=new UserManager();
               $user=null;
               $user=$this->manager->getUserByLoginAndPwd($login,$pwd);
               if(!empty($user)) {
                  
                  //Login et Mot de Passe Correct
                     $_SESSION['userConnect']=$user;
                     $_SESSION['user_id'] = $user->id;
                     $_SESSION['user_login'] = $user->login;
                     $_SESSION['user_fullname'] = $user->fullName;
                     $_SESSION['user_profil'] = $user->profil;
                     $_SESSION['user_avatar'] = $user->avatar;
                     
                     if($user->getProfil()==="admin"){
                        
                        $this->loadViewInscription("layout_admin");
                     }else{
                           $this->layout="layout_joueur";
                           $this->views="joueur";
                           $this->render();
                        }
                      
                   
                  
               }else{
                     //Login ou Mot de Passe InCorrect
                           $this->data['err_login']="! Attention ! Login ou Mot de Passe Incorect";
                           $this->views="Connexion";
                           $this->render();
               }
           
         }else{
            //Champs non remplis=>Erreur
            $erreurs= $this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->views="connexion";
            $this->render();
         }

       }else{
          //Passer par URL
          $this->views="connexion";
          $this->render();
       }
   
      
    
      }    
    
   
      public function creerUser(){
         extract($_POST);
         
         if(isset($_SESSION['userConnect'])){
            $profil="admin";
            $layout="layout_admin";
         }else{
            $profil="joueur";
            $layout="layout_connexion";
            
         }
         
         
 
            
         if(isset($_POST['btn_inscription'])){
          
         
            $this->validator->is_empty($login,'login',"Champ Obligatoire");
            $this->validator->is_empty($pwd,'pwd',"Champ Obligatoire");
            $this->validator->is_empty($Cpwd,'Cpwd',"Champ Obligatoire");
            $this->validator->is_empty($prenom,'prenom',"Champ Obligatoire");
            $this->validator->is_empty($nom,'nom',"Champ Obligatoire");
            $data = [
               'imgUser' =>$_FILES['imgUser'],
           ];

           // Validate File and upload
           $avatarName  = $data['imgUser']['name'];
           $avatarTmpName  = $data['imgUser']['tmp_name'];
           $avatarSize  = $data['imgUser']['size'];
           $avatarError  =$data['imgUser']['error'];
           $avatarType  = $data['imgUser']['type'];

           $avatarExt = explode('.', $avatarName);
           $avatarActualExt = strtolower((end($avatarExt)));

           $allowed = array('jpg', 'jpeg', 'png');
           // verify extention
           if (in_array($avatarActualExt, $allowed)) {
               if ($avatarError === 0) {
                   if ($avatarSize < 1000000) {
                       $avatarNewName = uniqid('', true).".".$avatarActualExt;
                       $data['imgUser'] = $avatarNewName;
                       $avatarDestination =  'assets/uploads/' .$avatarNewName;
                       move_uploaded_file($avatarTmpName, $avatarDestination);
                   } else {
                       $data['imgUser_err'] = 'Fichier trop grand ';
                   }
               } else {
                   $data['imgUser_err'] = 'Erreur upload ';
               }

           } else {
               $data['imgUser_err'] = 'Extension non autorisé ';
           }
         
         
         $newAvatar=$data['imgUser'];
            
         $data['imgUser_err'] = 'Fichier non accepté ';
         if($this->validator->is_valid()){
            $this->validator->is_egal($pwd,$Cpwd,"Cpwd","le mot de passe doit etre identique");
            if($this->validator->is_valid()){
            $this->manager=new UserManager();
                  $user=null;
                  $user=$this->manager->loginExist($login);
                  if($user==null){
                     $newUser= new user();
                     $newUser->login=$login;
                     $newUser->pwd=$pwd;
                     $newUser->fullName=$prenom." ".$nom;
                     $newUser->profil=$profil;
                     $newUser->avatar=$newAvatar;
                     $result=$this->manager->create($newUser);
                     if($result){
                        $this->data['err_login']="Compte crée avec succés";
                     $this->loadViewInscription($layout);
                     }
                     
                     
                  }else{
                     $this->data['err_login']="Login existe déjà";
                     $this->loadViewInscription($layout);
                  }
               }
         }else{
            //Champs non remplis=>Erreur
            $erreurs= $this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->loadViewInscription($layout);
            
         }
         
      
         }else{
            $this->loadViewInscription($layout);
         }
            
       }

       public function loadViewListerQuestions(){
         $this->layout="layout_admin";
         $this->views="listerQuestions";
         $this->render();  
      }

      public function loadViewCreerQuestions(){
         $this->layout="layout_admin";
         $this->views="creerQuestions";
         $this->render();  
      }

     

}
