<?php

    $currentPage=1;
    $totalJoueur = 5;
   
    if (isset($currentPage) )  {
     
     $currentPage = intval($currentPage);
       
    } 
    
    

   $listJoueur =$this->manager->getJoueur();
   $nbreJoueur =$this->manager->getNumberJoueur();
   $numberOfPages = ceil($nbreJoueur/ $totalJoueur) ;
 
    
    $data = [
        'listJoueur' => $listJoueur,
        'nbreOfPages' => $numberOfPages,
        'currentPage' => $currentPage
    ];

?>

<div class="col-12 bg-white" style="border: solid 1px transparent; height: 65vh; border-radius:5px;">
    <h4 class="text-center mt-2" style="width: 100%; color: grey;">LISTE DES JOUEURS PAR SCORE</h4>
                        <div class=" col-12 d-flex justify-content-center">
                            <div class="col-10 d-flex m-0 p-0" style="border: solid 2px #3aded7; height: 50vh; border-radius: 10px;">

                           

                                <div class="col-8 m-0 p-0">
                                    <h4 class="m-0 pl-4" style="height: 6vh; color: grey;"> Prénom & Nom </h4>
                                    <?php
                                        foreach($data['listJoueur'] as $joueur) : ?>
                                    <div class="col-12 m-0  pl-5" style=" height: 8vh;"><?php echo $joueur->fullName ?></div>
                                    <?php endforeach ?> 
                                </div>
                                <div class="col-4 m-0 p-0">
                                    <h4 class="m-0 p-0 text-center" style="height: 6vh; color: grey;"> Scores </h4>
                                    <?php
                                        foreach($data['listJoueur'] as $joueur) : ?>
                                    <div class="col-12 d-flex justify-content-center m-0 p-0" style=" height: 8vh;"><?php echo $joueur->score ?> Pts</div>
                                    <?php endforeach ?> 
                                </div>

                            
                            </div>
                        </div>
                        <div class="col-10 step-control  position-absolute d-flex justify-content-between ml-5 pl-5" style="height: 7vh;">
                                            
                            <a href="<?=( $data['currentPage'] - 1)?>" role="button"
                                class="btn btn-primary bg-kader3 mt-2 mr-3   <?php if ($data['currentPage'] == 1 ) { echo ' disabled'; } ?>">Precedent</a>


                            <a href="<?=( $data['currentPage'] +1)?>" role="button" class="btn btn-primary bg-kader3 mt-2 mr-3 
                            <?php   if ( $data['currentPage'] == $data['nbreOfPages'] ){  echo 'disabled' ; }
                            ?>">Suivant</a>

                        </div>
 </div>