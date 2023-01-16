<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- slick -->
    <!-- start SLICK CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
 <!-- start jquery for slick -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>       
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
<section class="mt-5">
      <div class ="container">
          <section>
            <div class="row">
               <!-- debut de bloque -->
               <div class="col-md-8">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel text-center">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../public/image/home/banner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="text-carou">0€ charge pour vos lunettes</h5>
                              <p class="text-carou">Votre pair est 100% prise en charge</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../public/image/home/0depense.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="text-carou">Je veux des belles lunettes</h5>
                              <p class="text-carou">trouvez vos lunette de reves.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../public/image/home/tendance.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="text-carou">Tendance Dita</h5>
                              <p class="text-carou">Découvrez toute la collection.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" class="prev" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>

                <!-- fin du bloque 1  -->
                <!-- debut de 2eme bloque -->
                <div class="col-md text-center">
                  <div> 
                    <img src="../public/image/home/service.jpg">
                  </div>
                  <div> 
                    <img src="../public/image/home/rdv.png">
                  </div>
                </div> 
                <!-- fin de 2eme bloque -->
            </div>
          </section>
   
          <div class="mt-4">
              <div class=" text-center">
                <h3>Bien venu sur optico en ligne</h3>
                <p> Optico l'opticien en ligne, depuis 2008 nous vous proposons
                    des lunettes et lentilles de contact aux meilleurs prix. Nous proposons aussi des services tels que le changement de
                    verres correcteurs sur votre monture, la garantie satisfait ou remboursé ou l'essai à domicile de montures.
                </p>
              </div>
              <div class="row mt-5">
                <?php foreach($card as $crd):?>
                <!-- start carte -->
                <div class="col-md-4">
                  <div class="text-center">
                      <div class="collection-img">
                          <img src="../public/image/home/<?php echo $crd->img;?>" class="img">
                      </div>
                      <div class="">
                          <p class=""><?php echo $crd->contenu;?></p>
                      </div>
                  </div>
                </div>
                <?php endforeach;?>
               
              </div>
          </div>
          <!-- start JS slider -->
            <h3 class="text-center mt-3">Trouvez tout nos prestigieuses marques</h3> 
            <div class="brands mt-3">
              <div class="switch"><img src="../public/image/logos/battatura.jpg"></div>
              <div class="switch"><img src="../public/image/logos/berluti.png"></div>
              <div class="switch"><img src="../public/image/logos/cazal.png"></div>
              <div class="switch"><img src="../public/image/logos/Céline.jpg"></div>
              <div class="switch"><img src="../public/image/logos/Dior.jpg"></div>
              <div class="switch"><img src="../public/image/logos/dita.png"></div>
              <div class="switch"><img src="../public/image/logos/fendi.jpg"></div>
              <div class="switch"><img src="../public/image/logos/FRED.jpg"></div>
              <div class="switch"><img src="../public/image/logos/gucci.png"></div>
              <div class="switch"><img src="../public/image/logos/jack-and-francisjpg.jpg"></div>
              <div class="switch"><img src="../public/image/logos/jean-reno.jpg"></div>
              <div class="switch"><img src="../public/image/logos/johnDalia.png"></div>
              <div class="switch"><img src="../public/image/logos/l'amy.jpeg"></div>
              <div class="switch"><img src="../public/image/logos/marc jacob.jpg"></div>
              <div class="switch"><img src="../public/image/logos/opal.png"></div>
              <div class="switch"><img src="../public/image/logos/paul&joe.jpg"></div>
              <div class="switch"><img src="../public/image/logos/rayban.png"></div>
              <div class="switch"><img src="../public/image/logos/versace.jpg"></div> 
            </div>
          
         
          <div class="row mt-5 text-center">
            <?php foreach($actu as $act):?>
            <div class="col-md">
              <h3><?php echo $act->titre;?></h3>
              <p><?php echo $act->contenu;?></p>
            </div>
            <?php endforeach;?>
            
            
          </div>

        </div>
</section>
    

     
</body>
</html>

