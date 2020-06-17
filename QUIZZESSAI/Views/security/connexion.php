
<div class="col-6 m-0 p-0" style="height: 60vh;">

                <div class="col-12 bg-kader1 d-flex justify-content-start" style="height: 13vh;">
                    <h3 class="pt-4 pl-3" style="width: 92%;">Login form</h3>
                    <button type="button" class="close" aria-label="Close">
                        <div class="exit" class="mt-3"> </div>
                    </button>
                </div>
                <div class="col-12 bg-kader2 pl-5 pt-4" style="height: 47vh;">

                            <?php
                                if(isset($err_login)){
                            ?>
                            <small id="helpId" class="text-danger p-0 m-0" ><?=$err_login?> </small>
                            <?php
                                }
                            ?>

                    <form method="post" action="<?=WEBROOT?>/security/seConnecter">
                        <div class="form-group pt-2">
                            <div class="d-flex"><input id="input" type="text" class="form-control " placeholder="Login" name="login"> <div class="login_logo"></div> </div>
                            <?php
                                if(isset($erreurs['login'])){
                            ?>
                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['login']?></small>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="form-group pt-2">
                            <div class="d-flex"> <input id="input" type="password" class="form-control" placeholder="Password" name="pwd"><div class="mdp_logo"></div> </div>
                            <?php
                                if(isset($erreurs['pwd'])){
                            ?>
                            <small id="helpId" class="text-danger p-0 m-0"><?=$erreurs['pwd']?></small>
                            <?php
                                }
                            ?>
                        </div>
                        <button type="submit" name="btn_connexion" class="btn btn-primary bg-kader1" style="height: 50px; width: 120px;">connexion </button>
                        <a href="<?=WEBROOT?>/security/loadViewInscription" style="text-decoration: none; color: grey;" class="ml-5">S'inscrire pour jouer</a>
                      </form>
                </div>
            </div>