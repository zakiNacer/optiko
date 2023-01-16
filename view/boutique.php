
    <!-- start collection e-boutique -->
    <section id="collection" class="py-5">
        <div class="container">
            <div>
                <div class="card bg-dark text-black text-center">
                    <img src="../public/image/contact.png"   class="card-img" alt="">
                    <div class="card-img-overlay">
                        <p class="card-text" style="font-size: x-large;"></p>
                    </div>
                </div>
            </div>
            <div class="categories">
                <?php foreach($categorie as $cat):?>
                <div class="alignement">
                    <a href="catboutique/cat/<?php echo $cat->id; ?>" class=" bouton mt-5"><?php echo $cat->nom; ?></a>
                </div>
                
                <?php endforeach;?>
            </div>
            <div class="title text-center mt-4">
                <h2 class="position-relative d-inline-block">Catégorisez vos produits </h2>
            </div>

            <div class="collection-list mt-4 row">
			    <!-- start cadr -->
                <?php foreach($produit as $prod):?>
                <div class=" col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="collection-img">
                             <a href ="singleProd/idgate/<?php echo $prod->id ; ?>"><img src="../public/image/produit/all/<?php echo $prod->image; ?>"  style="width:250px; height:170px; object-fit:cover;"  class="picshop" ></a>
                             <!-- class="picshop" ></a> -->
                        </div>
                        <div class="">
                           
                            
                            <p class=""><?php echo $prod->nom; ?></p>
                            <p class="">Disponible</p>
                            <h6>détails de produit </h6>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <!-- end card -->
            </div>
           
        </div>
        <!-- pagination -->
        <?php  ?>
        <div class=" mt-5 container  ">
           
            <nav aria-label="...">
                <ul class="d-flex justify-content-center">
                    <li class="page-item <?php if($pagecurrent==1){ echo "disabled" ;}?>">
                    
                    <a class="page-link" href="boutique/page/<?php echo $pagecurrent-1;?>">Previous</a>
                    
                    </li> 
                    <?php for($page=1; $page<=$nb_page; $page++){?>
                    <li class="page-item active" aria-current="page">
                        <a class="page" href="boutique/page/<?php echo $page;?>"><?php echo $page;?></a>
                    </li>
                    <?php } ?>
                    <li class="page-item <?php if($pagecurrent==10){ echo "disabled" ;}?>">
                    <a class="page-link" href="boutique/page/<?php echo $pagecurrent+1;?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- pagination -->

    </section>
    <main class="mt-5">
        <div class="container">
            <section id="best-featur" class="text-center">
                <h2 >Pourquoi choisir optico</h2>
                <div class="row d-flex justify-content-center mb-4">
                    <div class="col-md-8">
                        <p>Vous souhaitez l'avis d'un opticien qualifié ou vous recherchez les meilleurs prix pour vos lunettes préférées, nous sommes là pour vous.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-hand-holding-usd fa-4x"></i>
                        <p>Meilleur prix adaptable.</p>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-glasses fa-4x"></i>
                        <p>plus de 500 montures en stock.</p>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-award fa-4x"></i>
                        <p>Agréé par Sécurité social et mutuel.</p>
                    </div>
                    <div class="col-3" >
                        <i class="far fa-calendar-alt fa-4x"></i>
                        <p>Vennez le temps que vous voulez ou par un rendez-vous.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
