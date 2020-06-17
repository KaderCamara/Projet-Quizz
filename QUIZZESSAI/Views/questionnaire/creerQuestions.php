<div class=" col-12 m-0 p-0 bg-white" style="border: solid 1px transparent; height: 65vh; border-radius:5px;">
<h4 class="text-center mt-2" style="width: 100%; color: #50bfd0;">PARAMÉTRER VOTRE QUESTION</h4>
                        <div class=" col-12 d-flex justify-content-center m-0 p-0">
                        <form id="form-questions" class="col-10 m-0 p-0" method="post" action="<?=WEBROOT?>/questionnaire/creerQuestions">
                            <div class="col-12 m-0 p-0" style="border: solid 2px #3aded7; height: 55vh; border-radius: 10px;">
                                <div class="col-12 p-0" style=" height:47vh ">

                                    <?php
                                        if(isset($err_questions)){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 ml-5" ><?=$err_questions?> </small>
                                    <?php
                                        }
                                    ?>

                                    <div class="col-12 d-flex mt-1" style="height: 13vh;;">
                                        <label class="align-self-center font-weight-bold text-uppercase"> Questions </label>
                                        <input type="text" name="libelle" error="error_libelle" style="width: 40vw; background-color: #f2f2f2; border: solid 1px transparent;" class="ml-3" >
                                        <small id="error_libelle" class="text-danger p-0 m-0"></small>
                                        <?php
                                        if(isset($erreurs['libelle'])){
                                        ?>
                                        <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['libelle']?></small>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="col-12 d-flex mt-1" style="height: 8vh;">
                                        <label class="align-self-center font-weight-bold"> Nbre de Points </label>
                                        <input type="number" name="nbrePoints" error="error_nbrePoints" style="width: 5vw; background-color: #f2f2f2; border: solid 1px transparent; height:6vh ;" class="ml-3 align-self-center" >
                                        <small id="error_nbrePoints" class="text-danger p-0 m-0"></small>
                                        <small id="number" class="text-danger p-0 m-0"></small>
                                        <?php
                                        if(isset($erreurs['nbrePoints'])){
                                        ?>
                                        <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['nbrePoints']?></small>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="col-12 d-flex" style="height: 10vh;">
                                        <label class="align-self-center font-weight-bold"> Type of Questions </label>
                                        <select class="custom-select align-self-center ml-3" error="error_choix" name="typeReponses" style="width:32vw ; height: 7vh; background-color: #f2f2f2;">
                                            <option  value="Choix Multiple">Choix Multiple</option>
                                            <option value="Choix Simple">Choix Simple</option>
                                            <option value="Choix texte">Choix texte</option>
                                          </select>
                                          <small id="error_choix" class="text-danger p-0 m-0"></small>
                                          <small id="error_typeReponses" class="text-danger p-0 m-0"></small>
                                          <?php
                                            if(isset($erreurs['typeReponses'])){
                                            ?>
                                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['typeReponses']?></small>
                                            <?php
                                                }
                                            ?>
                                    </div>

                                    <div class="col-12 p-0" style="height: 16vh;">
                                        <div class="col-12 d-flex" style="height: 4vh;">
                                            <label> Réponse 1</label>
                                            <input type="text" name="reponse1" id="reponse1" error="error_reponse" style="width: 30vw;" class="ml-3 mr-4">
                                            <div class="ml-2 mr-3">  <input type="radio" value="reponse1" name="BonneReponse" /> </div>
                                            <div id="iconesupp" class="mr-5 align-self-center" style="height: 25px; width: 21px;"></div>
                                            
                                        </div>
                                            <?php
                                            if(isset($erreurs['reponse1'])){
                                            ?>
                                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['reponse1']?></small>
                                            <?php
                                                }
                                            ?>
                                        <div class="col-12 d-flex" style="height: 4vh;">
                                            <label> Réponse 2</label>
                                            <input type="text" name="reponse2" id="reponse2" error="error_reponse" style="width: 30vw;" class="ml-3 mr-4">
                                            <div class="ml-2 mr-3"> <input type="radio" value="reponse2" name="BonneReponse" /> </div>
                                            <div id="iconesupp" class="mr-5 align-self-center" style="height: 25px; width: 21px;"></div>
                                        </div>
                                            <?php
                                            if(isset($erreurs['reponse2'])){
                                            ?>
                                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['reponse2']?></small>
                                            <?php
                                                }
                                            ?>
                                        <div class="col-12 d-flex" style="height: 4vh;">
                                            <label> Réponse 3</label>
                                            <input type="text" name="reponse3" id="reponse3" error="error_reponse" style="width: 30vw;" class="ml-3 mr-4">
                                            <div class="ml-2 mr-3">   <input type="radio" value="reponse3" name="BonneReponse" />  </div>
                                            <div id="iconesupp" class="mr-5 align-self-center" style="height: 25px; width: 21px;"></div>
                                        </div>
                                            <?php
                                            if(isset($erreurs['reponse3'])){
                                            ?>
                                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['reponse3']?></small>
                                            <?php
                                                }
                                            ?>
                                        <div class="col-12 d-flex" style="height: 4vh;">
                                            <label> Réponse 4</label>
                                            <input type="text" name="reponse4" id="reponse4" error="error_reponse" style="width: 30vw;" class="ml-3 mr-4">
                                            <div class="ml-2 mr-3">   <input type="radio" value="reponse4" name="BonneReponse" />  </div>
                                            <div id="iconesupp" class="mr-5 align-self-center" style="height: 25px; width: 21px;"></div>
                                        </div>
                                        <small id="error_reponse" class="text-danger p-0 m-0"></small>

                                             <?php
                                            if(isset($erreurs['reponse4'])){
                                            ?>
                                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['reponse4']?></small>
                                            <?php
                                                }
                                            ?>
                                        
                                        

                                    </div>

                                </div>
                                <div class="col-12 d-flex justify-content-end m-0 p-0" style="height: 7vh;">
                                    <button type="submit" class="btn btn-primary bg-kader3 mt-2 mr-3 pt-1" name="btn_questions" role="button" style="height: 5vh;">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                        </div>
</div>

<script>
    


    inputs=document.getElementsByTagName("input");

                document.getElementById("form-questions").addEventListener("submit",function(event){
                let valid=true;
                  for(let input of  inputs){
                      if(!input.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(input.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=input.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText="Champ Obligatoire"
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                            
                         }
                            
                  }
                  if(valid===false){
                            event.preventDefault();
                             return false;
                   }
              });

              
               for(let input of  inputs){
                       input.addEventListener("keyup",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })

                }



</script>