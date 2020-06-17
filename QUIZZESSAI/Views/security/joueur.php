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

<div class="col-12 d-flex" style="height: 73vh; background-color: white; border-radius: 5px;">
                        <div class="col-8 mt-3" style="height: 68vh; border: solid 1px #51bfd0; border-radius: 5px;"> 
                            <div class="col-12 p-0 pt-2 mb-5 d-flex align-items-end flex-column" style="height: 16vh;">
                                <div class="col-12 m-0 p-0 " style="height: 17vh; background-color: #f2f2f2;"><h2 class="text-center m-0"><ins>Question:</ins></h2> <br> <h3 class="text-center">Les languages web</h3></div>
                                <div class="col-1 m-0 mt-2" style="height: 5vh; width: 100%; background-color: #f2f2f2;">3pts</div>
                            </div>
                            <div class="col-12 p-0 pl-5" style="height: 32vh;">
                                <div class="form-check" style="height: 8vh;" >
                                    <input class="form-check-input" type="checkbox" name="Reponse" value="option1" id="Reponse1" >
                                    <label class="form-check-label" for="Reponse1"> HTML </label>
                                  </div>
                                  <div class="form-check" style="height: 8vh;">
                                    <input class="form-check-input" type="checkbox" name="Reponse" value="option2" id="Reponse2">
                                    <label class="form-check-label" for="Reponse2">   R  </label>
                                  </div>
                                  <div class="form-check" style="height: 8vh;">
                                    <input class="form-check-input" type="checkbox" name="Reponse" value="option3" id="Reponse3">
                                    <label class="form-check-label" for="Reponse3"> JAVA </label>
                                  </div>
                            </div>
                            <div class="col-12 mt-1 d-flex justify-content-between" style="height: 9vh;">
                                <a class="btn btn-primary bg-kader3 mt-2 mr-3" href="#" role="button" style="height: 6vh; width: 10vw;">Précédent</a>
                                <a class="btn btn-primary bg-kader3 mt-2 mr-3" href="#" role="button" style="height: 6vh; width: 10vw;">Suivant</a>
                            </div>
                        </div>

                        <div class=" col-4 align-self-center ml-2" style="height: 55vh;">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="TS-tab" data-toggle="tab" href="#TS" role="tab" aria-controls="TS" aria-selected="true">Top Scores</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="MMS-tab" data-toggle="tab" href="#MMS" role="tab" aria-controls="MMS" aria-selected="false">mon meilleur score</a>
                                </li>
                              </ul>
                              <div class="tab-content p-2" id="myTabContent"  style="border: solid 1px #f2f2f2; border-top: none; height: 48vh; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
                                <div class="tab-pane fade show active" id="TS" role="tabpanel" aria-labelledby="TS-tab"> 

                                        <div class="d-flex">
                                            
                                        
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
                                <div class="tab-pane fade" id="MMS" role="tabpanel" aria-labelledby="MMS-tab">
                                    mon score
                                </div>
                        </div>
</div>
 