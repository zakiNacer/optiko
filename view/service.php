
    <section>
        <div class="container">
            <div class="card bg-dark text-black text-center">
                <img src="../public/image/santeservice.jpg" class="card-img" alt="">
                 <div class="card-img-overlay">
                     <p class="card-text" style="font-size: x-large;">Découvez tout les services d'optico</p>
                </div>
            </div>
            <div class=" col mt-4 p-5 bg-light text-black rounded text-center">
                <h1>Tout savoir nos services en ligne</h1>
                <p>Optiko en boutique, Optiko KIDS, ou encore l’entretien de votre équipement,
                    Bénéficiez de toute l’expertise de notre opticien de haute qualité.</p>
            </div> 
            <div class="row">
                <div class="col-sm mt-3">
                    <img src="../public/image/service.png" class="serimg">
                </div>
                <div class="col-md mt-3">
                    <h3>Nos services à retrouver dans le magasin</h3>
                    <p>Chaque opticien propose en magasin une gamme de services spécifiques. Découvrez-les !
                        Pour retrouver ceux proposés par votre opticien, rendez-vous sur sa page dédiée.</p>
                </div>  
            </div>
            <div class="row mt-3">
                <?php foreach($card as $crd): ?>
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-text"><?php echo $crd->titre;?></h3>
                          <p class="card-text"><?php echo $crd->contenu;?>
                          </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
           </div>
        </div>
    </section>