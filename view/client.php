<section>
        <div class="container">
            <div class="row">
                 <div class="col-md mt-5">
                    <div>
                         <img src="../public/image/client.png" class="loginPic" >
                    </div>
                 </div>
                
                <div class="col-md">
                        <div class="d-flex align-items-center mb-3 pb-1">
                                  
                                  <img src= "../public/image/optikoback.png" style="width:250px;">
                                  <span class="h1 fw-bold mb-0"></span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter a l'espace client</h5>
                        <br>    
                    <?php
                    if(isset($_GET['erreur'])){
                        $err=$_GET['erreur'];
                    
                        switch($err) 
                        {
                            case 'inexistant'; 
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> ce compte n'éxiste pas
                                </div>
                            <?php
                            break;
                            case 'incorect';
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> identifiant ou mot de passe incorect
                                </div>
                            <?php
                            break;
                            case'format_inco';
                            ?>
                            <div class="alert alert-danger">
                                    <strong>Erreur</strong> veuillez vérifier le format de mail
                            </div>
                            <?php
                            break;

                            

                        }
                    };
                    ?>
                    <form name="login" action="espaceClient/connect" method="POST" >
                            <label for="mail" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="mail" name="mail" placeholder="entrez votre nom"> 
                        <div>   
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="entrez votre mot de passe">
                            <p>Le mot de passe doit au moins contenir
                                <span id="miniscule" class="invalid"> une Miniscule</span> /
                                <span id="majuscule" class="invalid"> une Majuscule</span> /
                                <span id="chiffre" class="invalid"> un Chiffre</span> /
                                <span id="caractere" class="invalid"> 12 Caractères </span> 
                            </p>
                        </div>
                        <input  type="submit" name="submit" id="" class="btn btn-dark mt-3 " value="submit"></input>   
                    </form>
                        <p style="color:red; font-size: 20px;"id="error"></p>
                            <div class="d-flex justify-content-between">
                                    <a href="mailbackup">Mot de passe oubllié </a>
                                    <a href="inscription">inscription </a>
                            </div>
                        <div>
                            
                        </div>    
                </div>
            </div>
              
        </div>
</section>
