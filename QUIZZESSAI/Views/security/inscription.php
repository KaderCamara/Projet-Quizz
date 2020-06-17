<div class="col-12 d-flex justify-content-center  align-items-center" style="height: 98%; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                    <div class="col-12 bg-white" style="border: solid 1px gray; height: 100%; border-radius: 5px;">
                        <div class="col-8 p-0 m-0" style="height: 12%;border-bottom: solid 1px grey;">
                            <h2 class="m-0 p-0" style="font-size: 2em;">S'inscrire</h2>
                            <h6 class="m-0 p-0 text-secondary" style="font-size: 0.7em;">Pour tester votre niveau de culture générale</h6>
                        </div>
                        <div class="col-12 m-0 p-0 d-flex" style="height: 78%;">
                            <form class="col-8 m-0 p-0" id="form-inscription" method="post" action="<?=WEBROOT?>/security/creerUser" enctype="multipart/form-data"> 
                                    <?php
                                        if(isset($err_login)){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0" ><?=$err_login?> </small>
                                    <?php
                                        }
                                    ?>
                                <div class="form-group m-1 p-0">
                                    <label class="m-0 p-0" style="font-size: 1em;">Prénom</label>
                                    <input  type="text" class="form-control m-0" error="error_prenom"  style="height: 10%;" placeholder="Jooo" name="prenom" >
                                    <small  class="text-danger p-0 m-0" id="error_prenom"></small>
                                    <?php
                                        if(isset($erreurs['prenom'])){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['prenom']?></small>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="form-group m-1 p-0">
                                    <label class="m-0 p-0" style="font-size: 1em;">Nom</label>
                                    <input  type="text" class="form-control m-0" error="error_nom" style="height: 10%;" placeholder="WWW" name="nom" >
                                    <small  class="text-danger p-0 m-0" id="error_nom"></small>
                                    <?php
                                        if(isset($erreurs['nom'])){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['nom']?></small>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="form-group m-1 p-0">
                                    <label class="m-0 p-0" style="font-size: 1em;">Login</label>
                                    <input  type="text" class="form-control m-0" error="error_login" style="height: 10%;" placeholder="jow" name="login"  >
                                    <small  class="text-danger p-0 m-0" id="error_login"></small>
                                    <?php
                                        if(isset($erreurs['login'])){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['login']?></small>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="form-group m-1 p-0">
                                    <label class="m-0 p-0" style="font-size: 1em;">Password</label>
                                    <input  type="password" class="form-control m-0" error="error_pwd"  style="height: 10%;" placeholder="" name="pwd" id="pwd" >
                                    <small  class="text-danger p-0 m-0" id="error_pwd"></small>
                                    <?php
                                        if(isset($erreurs['pwd'])){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['pwd']?></small>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="form-group m-1 mb-4 p-0">
                                    <label class="m-0 p-0" style="font-size: 1em;">Confirm Password</label>
                                    <input  type="password" class="form-control m-0"  style="height: 10%;" placeholder="" name="Cpwd" id="Cpwd">
                                    <small id="error_mdp" class="text-danger p-0 m-0"></small>
                                    <?php
                                        if(isset($erreurs['Cpwd'])){
                                    ?>
                                    <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['Cpwd']?></small>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 11%; width: 100%;">
                                    <h2 style="font-size: 1.3em;" class="">Avatar</h2>
                                    <button type="submit" class="btn btn-primary bg-kader3 align-self-end pt-1" name="btn_inscription" style="height: 30px; width: 120px;">Créer compte </button>
                                    <input type="file" class="form-control-file" style="width:10vw;" name="imgUser" id="imgUser">
                                </div>
                            </form>
                            <div class="col-4 m-0 p-0 ">
                               <div class="col-12  m-0 p-0  d-flex justify-content-center" style=" height: 55%;"> <img id="avatar" class="rounded-circle" style="width: 200px; height: 200px; border:solid 1px black;">  </div>
                                <h6 class="text-center">Avatar</h6>
                                <div class="text-center"><small id="imageText"  class="text-danger p-0"> Veuillez choisir une image </small></div>
                            </div>
                        </div>
                    </div>
                </div>

            <script>
                

            


               /*  input=document.getElementById("input");
                const errorInput=document.getElementById("error_input");
                document.getElementById("form-inscription").addEventListener("submit",function(event) {
                   
                        let valid=true;
                         //Prenom est Vide 
                       
                         if(!input.value.trim()){
                            valid=false;
                            errorInput.innerText="Champ Obligatoire";
                            //innerHTML=>ajouter du Contenu HTML dans une Balise
                         }
                        //Empeche le Rechargement de page =>
                         if(valid==false){
                            event.preventDefault();
                             return false;
                         }
                            
                  })
                  
                  input.addEventListener("keyup",function(event){
                    errorInput.innerText=" ";
                  })*/

             /* //Chargement de L'image
             const imgUpload= document.querySelector("#imgUser");
              

             const prevUpload=()=>{
                   //Récuperation de  l'image  du champ input
                     let fileImg=imgUpload.files[0]
                     //Transformer l'image en un flux d'octets
                     let reader=new FileReader();
                     if(fileImg){
                         reader.readAsDataURL(fileImg)
                         reader.onloadend=function(){
                               const avatar= document.querySelector("#avatar");
                               avatar.src=reader.result
                               
                         }
                     }

            }



            //Ecouteur Evenement

             imgUpload.addEventListener("change",prevUpload);

            



             
            function  prevUpload(){

             }
             ou 

             prevUpload=function(){

             }
              ou Arrow Fonction
              prevUpload=()=>{
                 
               }

             */ 
                inputs=document.getElementsByTagName("input");

                document.getElementById("form-inscription").addEventListener("submit",function(event){
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
                  if(valid==false){
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
            

              const imgUpload= document.querySelector("#imgUser");
              

              const prevUpload=()=>{
                    //Récuperation de  l'image  du champ input
                      let fileImg=imgUpload.files[0]
                      //Transformer l'image en un flux d'octets
                      let reader=new FileReader();
                      if(fileImg){
                          reader.readAsDataURL(fileImg)
                          reader.onloadend=function(){
                                const avatar= document.querySelector("#avatar");
                                avatar.src=reader.result
                                
                          }
                      }
 
             }
            const a=document.getElementById("pwd");
            const b=document.getElementById("Cpwd");
            errorMdp=document.getElementById("error_mdp");
            

            document.getElementById("form-inscription").addEventListener("submit",function(event){
                if (a.value!=b.value) {
                    errorMdp.innerText="le mot de passe doit être identique";
                    event.preventDefault();
                }else{
                    errorMdp.innerText="";
            	    return false;
            }
            });

             imgUpload.addEventListener("change",prevUpload);
             imageText=document.getElementById("imageText");
             imgUpload.addEventListener("change",function(event){
                imageText.innerText=" ";
             });
            </script>





      


   
   