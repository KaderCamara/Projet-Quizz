

<?php
 
 $currentPage=1;
    $totalQuestions = 5;
   
    if (isset($currentPage) )  {
     
     $currentPage = intval($currentPage);
       
    } 
    

   $listQuestions=$this->manager->getQuestion();
   $nbreQuestions=$this->manager->getNumberQuestions();
   $numberOfPages = ceil($nbreQuestions/ $totalQuestions) ;
 
    
    $data = [
        'listQuestions' => $listQuestions,
        'nbreOfPages' => $numberOfPages,
        'currentPage' => $currentPage
    ];

    var_dump($data);

?>












<div class="col-12 bg-white" style="border: solid 1px transparent; height: 66vh; border-radius:5px;">
    <div class="col-12 d-flex justify-content-center p-2" style="height: 8vh;">
                            <h4 class="mr-5">Nbre Question/Jeu</h4>
                            <div class="col-1 d-flex justify-content-center mr-5" style="border: solid 1px grey; height: 5vh;"> 5 </div>
                            <a class="btn btn-primary mr-3 pt-1" href="#" role="button" style="height: 5vh;  background-color: #5e91b0; border: none;">OK</a>
                        </div>
                        <div class=" col-12 d-flex justify-content-center">
                            <div class="col-10 m-0 pt-2" style="border: solid 2px grey; height: 51vh; border-radius: 10px;">

                                <?php foreach($data['listQuestions'] as $question) : ?>

                                    <div class="col-12 mt-1" style="border: height: auto;">
                                        <h5> Question n*<?php echo $question->id?>: <?php echo $question->libelle?></h5>
                                        <div class="d-flex justify-content-between">
                                            Réponses: <?php echo $question->reponse?> <h6> Bonne réponse: <?php echo $question->BonneReponse?>  </h6> 
                                        </div>
                                        
                                    </div>
                                    
                                
                                <?php endforeach ?>   

                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end m-0 p-0" style="height: 7vh;">
                            <a class="btn btn-primary bg-kader3 mt-2 mr-3" href="#" role="button" style="height: 5vh;">Suivant</a>
                        </div>
</div>