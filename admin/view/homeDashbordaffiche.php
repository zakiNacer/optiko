<
    <div class= "text-center">
        <div class="container col-md-7"> 
            <h5>Afficher le  contenu de la page home</h5>
            <div class="card bg-dark text-black text-center">
                <img src="../public/assets/img/contact.png" class="card-img" alt="">
                <div class="card-img-overlay">
                    <p class="card-text" style="font-size: x-large;">Découvez tout les services d'optico</p>
                </div>
            </div>
            <!-- card pour aficher modifier le contenue de la page home -->
            <h5 class="mt-2">Bloque 1</h5> 
            <!-- le tableau -->
            <div class="table-responsive-sm" >
                <table class="table table-light  table table-bordered mt-5">
                    <thead>
                        <td>id</td>
                        <td>image</td>
                        <td>text</td>
                        <td>action </td>
                        
                    </thead>
                    <?php foreach($displ as $dsp):?>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><img style="width:90px"   src="../../public/image/home/<?php echo $dsp->img ;?>"></td>
                            <td><p><?php echo substr($dsp->contenu,0,100)."..."; ?></p></td>
                            <td><a href="HomeDashbordaffiche/delete/<?php echo $dsp->id; ?>">🗑️</td>
                                         
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
            </div>
            <!-- le formulaire -->
            
            <h5 class="mt-5">tableau 2</h5>
            <!-- tableau -->
            <div class="table-responsive-sm" >
                <table class="table table-light  table table-bordered mt-5">
                            <thead>
                            <td>id</td>
                            <td>titre</td>
                            <td>text</td>
                            <td>action </td>
                            
                            </thead>
                            <?php foreach($affiche as $displ): ?>
                            <tbody>
                            <tr> 
                                <td><?php echo $displ->id; ?></td>
                                <td><h6><?php echo $displ->titre; ?><h6></td>
                                <td><p><?php echo substr($displ->contenu,0,95) ?></p></td>
                                
                                <td><a href="HomeDashbordaffiche/delactu/<?php echo $displ->id; ?>">🗑️<a href="update/selec/<?php echo $displ->id; ?>">&#128393;</td>             
                            </tr>
                            
                            </tbody>
                            <?php endforeach; ?>
                </table>
            </div>       
            <!-- formulaire -->
           
        </div>              
    </div>
       
   
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
