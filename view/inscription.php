<section class="mt-5">
        <h3 class="text-center">Inscription</h3>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md mt-5">
                    <img src="../public/image/inscreption.PNG" style="height: 650pxpx;" >
                </div>
                <div class="col-md">

                    <form name="login" action="inscription/add"  method="POST">
                        <?php
                          if(isset($_GET['required'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Vous devriez vous incrire avant la prise du rendez-vous  
                            </div>
                          <?php
                          }
                          
                        ?>  
                        <?php
                          if(isset($_GET['ErrEexistant'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Vous etes déja inscrit ! 
                            </div>
                          <?php
                          }
                          
                        ?>    
                        <?php
                          if(isset($_GET['ErrNnum'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> le nom ne dois pas contenir des chiffres ! 
                            </div>
                          <?php
                          }
                        ?>
                        <?php
                          if(isset($_GET['ErrPnum'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> le prenom ne dois pas contenir des chiffres ! 
                            </div>
                          <?php
                          }
                        ?>
                        <?php
                          if(isset($_GET['Errformat_inco'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Le format du mail est incorrect ! 
                            </div>
                          <?php
                          }
                        ?>
                         <?php
                          if(isset($_GET['ErrIncoherentMail'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Les deux mails ne correspond pas ! 
                            </div>
                          <?php
                          }
                        ?>
                        <?php
                          if(isset($_GET['ErrIncoherentPsw'])){
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Les deux Mot de passe ne correspond pas ! 
                            </div>
                          <?php
                          }
                        ?>                                  
                        <div>
                            <h5 class="text-center">Créez votre compte dans une minute</h5>
                        </div>
                        <div>
                            <label for="" class="form-label">Nom</label>
                            <label class="visually-hidden" for="specificSizeInputName">Nom</label>
                            <input type="text" class="form-control" name="psudo" placeholder="entrez votre nom">
                            
                        </div>
                        <div class="mt-3">
                            <label for="" class="form-label">Prenom</label>
                            <label class="visually-hidden" for="specificSizeInputName">Prenom</label>
                            <input type="text" class="form-control" name="prenom" placeholder="entrez votre prénom">
                        </div>
                        <div >
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="text" class="form-control" name="mail" id="mail1" aria-describedby="emailHelp" placeholder="entrez votre mail">
                          <div id="emailHelp" class="form-text">Ne jamais partager votre email a personne.</div>
                          
                        </div>
                        <div >
                          <label for="exampleInputEmail1" class="form-label">Confirmer Email</label>
                          <input type="text" class="form-control" name="mail2" aria-describedby="emailHelp" placeholder="Confirmez votre mail">
                          <p style="color:red; font-size: 20px;"id="errormail"></p>
                        </div>
                        
                        <div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="entrez votre mot de passe">
                            <div id="" class="form-text">mot de passe doit contenir entre 8 et 20 caractère</div>
                            <p style="color:red; font-size: 20px;"id="errornb"></p>
                          </div>
                          <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" name="ps2" placeholder="Confirmez votre mot de passe">
                            <div id="" class="form-text">Assurer que le mot de passe soit identique</div>
                            <p style="color:red; font-size: 20px;"id="errorpw"></p>
                          </div>
                          <p>Le mot de passe doit au moins contenir
                            <span id="miniscule" class="invalid"> une Miniscule</span> /
                            <span id="majuscule" class="invalid"> une Majuscule</span> /
                            <span id="chiffre" class="invalid"> un Chiffre</span> /
                            <span id="caractere" class="invalid"> 12 Caractères </span> 
                          </p>
                        </div>
                        <!-- chechbox -->
                        <div class="mt-3">
                          <label for="" class="form-label">Sexe</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre"  value="Homme" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Homme
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre" value="Femme">
                            <label class="form-check-label" for="exampleRadios2">
                              Femme
                            </label>
                          </div>
                          <br>
                        </div>
                        <!-- <button type="submit" id="btn" class="btn btn-dark">inscription</button> -->
                        <input  type="submit" name="submit" id="btn" class="btn btn-dark mt-3 text-center " value="submit"></input>  
                       
                      </form>
                      <div></div>
                      <p style="color:red; font-size: 20px;"id="erreur"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Inscription -->
    <script src="../public/js/inscription.js"></script>
