<?php require_once('./views/layout/inc/header.inc.php')?>
        
        
        <div class="main m-0 p-0 d-flex justify-content-center align-items-center">
           
            <div class="col-11 m-0 p-0" style="height: 88vh;">
                <div class="col-12 bg-kader1 d-flex justify-content-start" style="height: 12vh; border-top-left-radius: 5px; border-top-right-radius: 5px">
                    <h3 class="pt-4 ml-5 text-center" style="width: 88%;">CRÉER ET PARAMÉTRER VOS QUIZZ</h3>
                    <a class="btn btn-primary bg-kader3 mt-4 pt-2" href="<?=WEBROOT?>" role="button" style="height: 40px;">Déconnexion</a>
                </div>
                <div class="col-12 d-flex justify-content-center  align-items-center" style="height: 76vh; background-color: #f2f2f2; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
                    <div class="col-4 mr-3 p-0" style="height: 55vh; border-radius: 5px;">
                        <div class="col-12 d-flex" style="height: 19vh; color: white; background-image: linear-gradient(white, #51bfd0); border-top-left-radius : 5px; border-top-right-radius : 5px;">
                            <img src="<?=WEBROOT. "assets/uploads/" .$_SESSION['user_avatar'];?>" class="rounded-circle mt-3 mr-4" style="width: 100px; height: 100px;">
                            <div class="mt-4"> <h3 class="m-0 pt-2"> <?php echo strtoupper($_SESSION['user_fullname']);?> </h3> </div>
                        </div>
                        <div class="col-12 p-0 m-0" style="height: 36vh;">
                            <a class="btn btn-primary btn-lg btn-block d-flex m-0 p-0" href="<?=WEBROOT?>/questionnaire/loadViewlisterQuestions" role="button" style="height: 9vh; border-radius: 0%; background-color: white; border:none;">
                                <div class="bande"></div> <h5 class="text-secondary mt-3" style="width: 90%;">Liste Questions</h5> <div class="icones align-self-center"  id="icone1"></div>
                            </a>
                            <a class="btn btn-primary btn-lg btn-block d-flex m-0 p-0" href="<?=WEBROOT?>/security/loadViewInscriptionAdmin" role="button" style="height: 9vh; border-radius: 0%; background-color:#f8f3f0; border: none;">
                                <div class="bande_active"></div> <h5 class="text-secondary mt-3" style="width: 90%;">Créer Admin</h5> <div class="icones align-self-center" id="icone2active"></div>
                           </a>
                           <a class="btn btn-primary btn-lg btn-block d-flex m-0 p-0" href="<?=WEBROOT?>/jeu/loadViewListerJoueurs" role="button" style="height: 9vh; border-radius: 0%; background-color: white; border: none;">
                                 <div class="bande"></div> <h5 class="text-secondary mt-3" style="width: 90%;">Liste Joueurs</h5> <div class="icones align-self-center" id="icone1"></div>
                            </a>
                            <a class="btn btn-primary btn-lg btn-block d-flex m-0 p-0" href="<?=WEBROOT?>/questionnaire/loadViewCreerQuestions" role="button" style="height: 9vh; border-radius: 0%; background-color: white; border: none; border-bottom-left-radius : 5px; border-bottom-right-radius : 5px;">
                                <div class="bande"></div> <h5 class="text-secondary mt-3" style="width: 90%;">Créer Questions</h5> <div class="icones align-self-center" id="icone2"></div>
                           </a>
                        </div>
                    </div>
                    <div class="col-8 p-0 mt-2 d-flex align-items-center" style="height: 76vh; border-radius: 5px;">
                            <?php echo $content_for_layout ?>
                    </div>
                </div>
            </div>
        
        
        </div>
        
<?php require_once('./views/layout/inc/footer.inc.php')?>   

   
    