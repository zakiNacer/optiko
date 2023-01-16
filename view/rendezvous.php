<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css jquerry date-timepicker -->
    <link rel="stylesheet" href="../public/js/jquery.datetimepicker.min.css">
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/jquery.datetimepicker.full.min.js"></script>
</head>
<body>



<section>
        <div class="container">
        
           
                
                <div class=" col mt-4 p-5 bg-light ">
                    <h3 class="text-center" id="trad">Bienvenu a bord, merci de bien vouloir prendre RDV.</h3>
                    <p> Suite aux conditions sanitaires .Nous respectons les gestes barrières pour la sécurité de nos clients et de nos collaborateurs.</p>
                </div> 

                <?php
                    if(isset($_GET['erreur'])){
                        $err=$_GET['erreur'];
                    
                        switch($err) 
                        {
                            case 'format_inco'; 
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Veuillez respecter le format du Mail
                                </div>
                            <?php
                            break;
                            case 'indisponible';
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Ce rendez-vous a déja été pris, veuillez choisir un autre créneau
                                </div>
                            <?php
                            break;
                            case'required';
                            ?>
                            <div class="alert alert-danger">
                                    <strong>Erreur</strong> Inscription requise pour la prise du rendez-vous
                            </div>
                            <?php
                            break;
                            case'num_inco';
                            ?>
                            <div class="alert alert-danger">
                                    <strong>Erreur</strong> le format du numero est incorrect 
                            </div>
                            <?php
                            break;
                        }
                    };
                ?>
                 
            <form action="rendezvous/addrdv" method="POST">
                 <div>
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="entrez votre nom"> 
                </div>
                <div class="mt-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="entrez votre prénom">
                </div>
                <div class="mt-3">
                    <label for="mail" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="entrez votre mail">
                </div>
                
                 <!-- le select -->
                 <label for="select" class="form-label mt-2">Choisissez un motif</label><br>
                 <select class="form-select" name="select" aria-label="Default select example">
                     <option>lentilles de contact</option>
                     <option>Examens de vue</option>
                     <option>Lunettes de vue et de soleil</option>
                     <option>Renseignement et Conseils</option>
                 </select>
                <!-- start datepicker -->
                    <div class="mt-3">
                        <label for="date" class="form-label">Choisissez une date</label><br>
                        <input type="text" class="form-control" name="date" id="datepicker">
                    </div>
                <br>
                
                <div>
                    <label for="numero" class="form-label">Numero de téléphone</label>
                    <label class="visually-hidden" for="specificSizeInputName">numero</label>
                    <input type="number" class="form-control" id="number" name="numero"  placeholder="number"> 
                    <br>  
                </div> 
                
                <input  type="submit" name="submit" class="btn btn-dark mt-3 " value="submit"></input>
                    
            </form>
            <h5 style="color:red; font-size: 20px;"id="erreur"></h5> 
            <!-- consigne -->
            <div class=" col mt-4 p-5 bg-light ">
                <h3">A retenir</h3>
                <p">Avant de vous rendre chez votre opticien pour une vérification de la vue, munissez-vous :</p>
                <ul>
                    <li >L'examen de vue est offert et sur rendez-vous dans tous nos magasins.</li>
                    <li  >Venez avec votre ordonnance en cours de validité (sauf urgence).</li>
                    <li>Nos opticiens pourront adapter votre prescription et renouveler votre équipement en l'absence de contre-indication.</li>
                    
                </ul>
            </div>         
        </div>
        
</section>

</body>
</html>
<!-- rendezvous -->
<script src="../public/js/gestionRdv.js"></script>

 <!-- code js datepicker -->
 <script src="../public/js/datepicker.js"></script>