<?php// echo substr($blabla,0,100)."..."; ?>
    <div class= "text-center">
        <div class="container col-md-7"> 
            <h5>Gestion du contenu de la page home</h5>
            <div class="card bg-dark text-black text-center">
                <img src="../public/assets/img/contact.png" class="card-img" alt="">
                <div class="card-img-overlay">
                    <p class="card-text" style="font-size: x-large;">Découvez tout les services d'optico</p>
                </div>
            </div>
            <!-- card pour aficher modifier le contenue de la page home -->
            <h5 class="mt-2">Ajouter une card</h5> 
            <!-- le tableau -->
            
            <!-- le formulaire -->
            <form action="HomeDashbord/add" method="POST" enctype="multipart/form-data">
               
                <div class="form-floating mt-1">
                        <textarea class="form-control" placeholder="Leave a comment here" name="text"    style="height: 100px"></textarea>
                        
                        <label for="text">Ajouter du text</label><br>
                </div>
                
                <label for="fichier" >Uploader une image </label><br>
                    <input type="file" name="files" class="btn btn-primary"></input><br>
                <input type="submit" class="btn btn-primary"></input>
               
            </form>
            <h5 class="mt-5">Ajouter une actualité</h5>
            <!-- tableau -->
            
            <!-- formulaire -->
            <form action="HomeDashbord/addcard" method="POST" >
               
               <div class="form-floating mt-1">
                       <textarea class="form-control" placeholder="Leave a comment here" name="titre2"    style="height: 100px"></textarea>
                       
                       <label for="text">Ajouter du text</label><br>
               </div>
               <div class="form-floating mt-1">
                       <textarea class="form-control" placeholder="Leave a comment here" name="contenu"    style="height: 100px"></textarea>
                       
                       <label for="text">Ajouter du text</label><br>
               </div>
              
               
               <input type="submit" class="btn btn-primary"></input>
              
           </form>
        </div>              
    </div>
       
   
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
