
        
        <div class="text-center mt-5">
          <div class="container col-md-7">
                <form action="update/modif/<?php echo $display->id ?>" method="POST">
                        <input class="form-control form-control-lg" type="text" name="titre" value="<?php echo $display->titre; ?>">
                        <input class="form-control form-control-lg" type="text" name="contenu" value="<?php echo $display->contenu; ?>">
                        <input type="submit" class="btn btn-primary"></input>
                 </form>
                </div>
           
        </div>


