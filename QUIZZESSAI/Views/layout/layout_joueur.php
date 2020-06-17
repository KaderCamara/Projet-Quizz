<?php require_once('./views/layout/inc/header.inc.php')?>
<div class="main m-0 p-0 d-flex justify-content-center align-items-center">
        <div class="col-11 m-0 p-0" style="height: 88vh;">
                <div class="col-12 bg-kader1 d-flex justify-content-between p-0" style="height: 12vh; border-top-left-radius: 5px; border-top-right-radius: 5px">
                    <div class="col-1 pl-2 pt-1 align-items-center">
                        <img src="<?=WEBROOT. "assets/uploads/" .$_SESSION['user_avatar'];?>" style="width: 50px; height: 50px; border-radius: 20px;" class="ml-3">
                        <h5> <?php echo strtoupper($_SESSION['user_fullname']);?></h5>
                    </div>
                    <h3 class="pt-2 ml-5 text-center" style="width: 70%;">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ <br>
                        JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE </h3>
                    <a class="btn btn-primary bg-kader3 mt-4 pt-2 mr-2" href="<?=WEBROOT?>" role="button" style="height: 40px;">Déconnexion</a>
                </div>
                <div class="col-12 d-flex justify-content-center  align-items-center" style="height: 76vh; background-color: #f2f2f2; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
                    
                        
                        <?php echo $content_for_layout ?>

                </div>
            
        </div>
    
 </div>      
<?php require_once('./views/layout/inc/footer.inc.php')?>   

   
    