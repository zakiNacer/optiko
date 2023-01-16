
    <div class="container">
        
            
        
            
            <div class="alert alert-dark d-flex justify-content-between" role="alert" >
                            <div class="mt-2">
                            <h3> Bonjour <span><?php echo $_SESSION['user2']->nom;?></span> <span><?php echo $_SESSION['user2']->prenom;?></span> </h3>
                            </div>
                            
                            <div class="">
                                <script>
                                   
                                    var date = new Date();
                                    var options = {weekday: "long", year: "numeric", month: "long", day: "2-digit"};
                                    document.write(date.toLocaleDateString("fr-FR", options));
                                    
                                </script>
                            </div>
                            
                        </div>
            <div>
            <div class="d-flex justify-content-end mt-4">
                <div class="flex-end">
                    <!-- <span>Mot de passe</span>
                    <a href="password/update"><img src="../public/image/seting.png" style="width:35px;"></a><br> -->
                    <span>déconnexion</span>
                    <a href="client/logout"><img src="../public/image/off.jpg" style="width:35px;"></a>
                </div>
                
            </div>
            
            </div>  
        
            <div class="container">
                <div class="card bg-dark text-black text-center">
                    <img src="../public/image/santeservice.jpg" class="card-img" alt="">
                    <div class="card-img-overlay">
                        <p class="card-text" style="font-size: x-large;">bonjour votre rendez vous a bien été enrigisté, a bientot</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-5">
                     <div class="">
                         <h5>Un mail de confirmation vous sera envoyé sur votre adresse électronique </h5><br>
                    </div>
                    
                </div>
                
                
                
                
                <?php
                if(!$rendv){
                    
                ?>  
                   
                        
                        <div class="alert alert-primary d-flex justify-content-between" role="alert" >
                            <div class="mt-2">
                                Vous n'avez pas de rendez-vous<br>
                            </div>
                            
                            <div class="">
                                <a href="rendezvous" class="btn btn-outline-primary" class="d-flex f-end">Prendre un rendezvous</a>
                            </div>
                            
                        </div>
                        
                   
                    
                 <?php
                 
                }else ?>
                <?php foreach($rendv as $rdv): ?> 
                    <?php
                {
                ?>
                <div class="table-responsive-sm " >
                    <table class="table table-dark mt-5">
                        <thead>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Adresse mail</td>
                            <td>Date et l'heure</td>
                            <td>Numero de téléphone</td>
                            <td>Motif</td>
                            <td>action</td>
                            <!-- <td># de rendez vous</td> -->
                            
                        </thead>
                        <tbody>
                        <tr class="table-active">
                            
                            <td><?php echo $rdv->nom; ?></td>
                            <td><?php echo $rdv->prenom; ?></td>
                            <td><?php echo $rdv->mail; ?></td>
                            <td><?php echo $rdv->date; ?></td>
                            <td><?php echo $rdv->numero;?></td>
                            <td><?php echo $rdv->motif; ?></td>
                            
                            <td>
                            
                            <a href="espaceClient/delaterdv/<?php echo $rdv->id;?>"><i class="fas fa-trash-alt" class="spc"></i></a>
                            </td>
                            
                            
                        </tr>
                        
                        </tbody>
                    </table>
                   
                </div>
                <?php
                 }
                ?>
                <?php endforeach;?>
            </div>
           
            <main class="mt-5">
                
                    <section id="best-featur" class="text-center">
                        <h2 >Les avantages de la prise de rdv</h2>
                        <div class="row d-flex justify-content-center mb-4">
                            <div class="col-md-8">
                               <!-- <p>rajouter du text</p> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>disponibilité</h5>
                                <i class="far fa-badge-check  fa-4x"></i>
                                <p>acceder a notre disponibilité pour a melun pour un meilleur expertise.</p>
                            </div>
                            <div class="col-4">
                                <h5>personalisé</h5>
                                <i class="fas fa-sliders-v fa-4x"></i>
                                <p>prenez un rendez vous en ligne, 24H/24 et 7j/7.</p>
                            </div>
                            <div class="col-4">
                                <h5>rapidité</h5>
                                <i class="far fa-tachometer-fastest fa-4x"></i>
                                <p>Retrouvez votre historique de rendez-vous et ordennance dans votre espace client </p>
                            </div>
                            
                           
                        </div>
                    </section>
                
            </main>
       
    </div>