<?php
   
  class Jeu extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();
        $this->dirname="jeu";
        $this->layout="layout_joueur"; 
        $this->manager=new UserManager(); 
        session_start();   
    }
   
    //LOAD THE VIEWS
   
  

   public function loadViewJeu(){
    echo 0; 
 }

    public function loadViewListerJoueurs() {
    $this->layout="layout_admin";
    $this->views="listerJoueurs";
    $this->render(); 
}


}
