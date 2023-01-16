
    
 <?php
 //debegueer pour voir qsq je recois 
//var_dump( $getProd);
 ?> 
 

 <section>
                <div class="container">

                    <div class=" col mt-4 p-5 bg-light text-black rounded">
                        <h1>Tout savoir sur les opticiens en ligne</h1>
                        <p>Bien choisir sa paire de lunettes, c'est essentiel pour avoir des verres adaptés à sa vue, mais aussi pour arborer un accessoire chic, design et de qualité. En optant pour un opticien en ligne, on a la possibilité de puiser dans une vaste collection de marques de lunettes de vue et de lunettes de soleil, à tous les prix et pour tous les goûts.</p>
                    </div> 
                    
                    <div class="row">
                    
                        <div class="col-md-6 mt-4">
                            
                            <h2><?php echo $getProd->marqname; ?></h2>
                            <div class="mt-1 text-center">
                                <div>
                                    <img src="../public/image/topBrands/<?php echo $getProd->marqimg; ?> " style="width:330px; height:250px; " class="singlePic">
                                    <!-- class="singlePic" -->
                                </div>
                                <div class="rating  mt-3">
                                    <span class="text-primary">
                                        <?php


                                        for($i=0 ; $i<$getProd->marqetoile ; $i++){
                                        ?>
                                        <i class ="fas fa-star" style="font-size:24px;"></i>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h3>le label de la marque (histoire)</h3>
                                <p><?php echo $getProd->discription; ?></p>
                            </div>
                        </div>
    
                        <!-- 2eme block pour article-->
                            <div class="col-md-6 mt-4">
                                <div class="d-flex justify-content-end">
                                    <h3>catégories <span class="badge bg-dark"><?php echo $getProd->catname; ?></span></h3>
                                </div>
                                
                                <div class="row"> 
                                    <!-- start card       -->
                                    <div class="col-md">
                                            <div class="text-center">
                                                <div class="collection-img">
                                                    <img src="../public/image/produit/all/<?php echo $getProd->aimg ;?>" style="width:330px; height:250px; object-fit:cover;" class="singlePic">
                                                    <!-- class="singlePic"> -->
                                                </div>
                                                <div class="">
                                                    <h5><?php echo $getProd->anom;?></h5>
                                                    <p>Disponible</p>
                                                </div>
                                            </div>   
                                    </div>
                                   
                                    
                                   
                                    <!-- fin de carte -->
                                </div>
                            </div>
        
                                    
                           
    
                        <!-- 2eme block pour article -->
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Des lunettes de vue et quoi d'autre ?</h3>
                            <p>Un opticien en ligne offre non seulement la vente de lunettes de vue, mais également des lunettes de soleil et des lentilles, comme tout opticien. Les lentilles sont des produits faciles à commander et à acheter en ligne, à un prix souvent intéressant, et la question du choix des montures ne se pose pas.
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-between">
                            <div class="row">
                            <div class="col-sm-6 mt-2">
                                <a href="rendezvous"><img src="../public/image/home/rdv.png" style="width:260px;height:150px;"></a>
                            </div>
                            <div class="col-sm-6 mt-2">
                                <a href="service"><img src="../public/image/home/customervice.jpg" style="width:260px; height:150px;"></a>
                            </div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p>Les lunettes de soleil, pour femme ou pour homme, sont aussi un achat qu'il est bon de faire en ligne, à la fois pour le prix et pour le choix. Une paire de Ray-Ban est un produit couramment recherché par les clients des opticiens en ligne, pour son style, la qualité de ses montures et la bonne filtration de la lumière qu'elle propose</p>
                        </div>
                    </div>
                </div>
            </section>



