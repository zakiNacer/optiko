<section>
        <div class="container">
            <div class="row">
                 <div class="col-md mt-5">
                    <div>
                         <img src="../public/image/login.jpg" class="loginPic" >
                    </div>
                </div>
                
                <div class="col-md">
                        <div class="d-flex align-items-center mb-3 pb-1">
                                  <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                                  <img src= "../public/image/optikoback.png" style="width:250px;">
                                  <span class="h1 fw-bold mb-0"></span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter a l'espace Admin</h5>
                    <br>
                    <?php
                    $msg="identifiant ou mot de passe incorrect";
                    if(isset($_GET['erreur'])){
                        echo '<div class="alert alert-danger" id="erreur" role="alert">'.$msg.'</div>';
                    }
                    ?>
                    <form name="login" action="login/auth" method="POST" >
                            <label for="mail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="entrez votre nom"> 
                        <div>   
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="entrez votre Mot de passe">
                            <p>Le mot de passe doit au moins contenir
                                <span id="miniscule" class="invalid"> une Miniscule</span> /
                                <span id="majuscule" class="invalid"> une Majuscule</span> /
                                <span id="chiffre" class="invalid"> un Chiffre</span> /
                                <span id="caractere" class="invalid"> 12 Caractères </span> 
                            </p>
                        </div!>
                        <input  type="submit" name="submit" id="" class="btn btn-dark mt-3 " value="submit"></input>   
                      </form>
                      <p style="color:red; font-size: 20px;"id="error"></p>
                </div>
              </div>
        </div>
    </section>