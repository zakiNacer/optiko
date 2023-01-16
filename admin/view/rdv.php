        
    <div class="text-center">
        
        
        <div class="container col-md-7">
           
           
            
            <?php
            foreach($rndv as $rond): 
                
            ?>
            <div class="table-responsive-sm" >
                <table class="table table-dark mt-5">
                    <thead>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Adresse mail</td>
                        <td>Date et l'heure</td>
                        <td>Numero de téléphone</td>
                        <td>Motif</td>
                       
                        <td>action</td>
                    </thead>
                    <tbody>
                    <tr class="table-active">
                        
                        <td><?php echo $rond->nom; ?></td>
                        <td><?php echo $rond->prenom; ?></td>
                        <td><?php echo $rond->mail; ?></td>
                        <td><?php echo $rond->date; ?></td>
                        <td><?php echo $rond->numero;?></td>
                        <td><?php echo $rond->motif; ?></td>
                       
                        <td>
                        
                        <a href="rdv/delete/<?php echo $rond->id;?>"><i class="fas fa-trash-alt" class="spc"></i></a>
                        </td>
                        
                        
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
               
            </div>
        </div>
      
        
</div>