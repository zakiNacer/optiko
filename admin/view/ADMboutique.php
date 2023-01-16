
    
    
   
    
        

           
            <div class= "text-center">
                <div class="container col-md-7"> 
                    
                    <div class="card bg-dark text-black text-center">
                    <img src="../public/assets/img/contact.png" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <p class="card-text" style="font-size: x-large;">Découvez tout les services d'optico</p>
                        </div>
                    </div>
                    <!-- card pour aficher modifier le contenue de la page home -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Gestion de contenu de la page boutique</h5>
                        </div>
                        
                            <form action ="ADMboutique/adding" method="POST" enctype="multipart/form-data">
                                 <?php
                                 $msg="le produit a bien été ajouté ! ";
                                 if (isset($_GET['aprouved'])){
                                    echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
                                 }
                                 ?>

                                 <h5> Ajouter un produit </h5>
                                <label for="fichier" >Uploader une image </label><br>
                                <input type="file" name="file" class="btn btn-primary"></input><br>
                                <h5> Nommer l'article </h5>
                                <input type="text" class="form-control" placeholder="Nom de marque" aria-label="Username" name="article">
                                <h5>Ajouter la catégorie</h5>
                                
                                <select class="form-select form-select-lg mb-3 mt-5" name="cat" aria-label=".
                                form-select-lg example">
                                
                                    <option selected>Selectionner la catégorie</option>
                                    <?php foreach($id as $last_id):?>
                                    <option value="<?php echo $last_id->id; ?>"><?php echo $last_id->nom; ?></option>
                                    <?php endforeach; ?>
                                </select>
                               
                                <select class="form-select form-select-sm" name="brand" aria-label=".form-select-sm example">
                                    <option selected>Selectionner la marque</option>
                                    <?php foreach($brand as $last_brand):?>
                                    <option value="<?php echo $last_brand->id; ?>"><?php echo $last_brand->brand; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                        <input type="submit" class="btn btn-primary"></input>
                                 <!-- </div> -->
                            </form> 
                           
                        </div>
                     </div>
                </div>    
            </div>
       
   
  
  
  
 