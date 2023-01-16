
        
        <div class="text-center mt-5">
          <div class="container col-md-7">

                 <?php
                    $msg="Un mot de passe provisoir vous a été envoyé dans votre adresse éléctronique";
                    $msg2="Ce compte n'éxiste pas ";
                    if(isset($_GET['available'])){
                        echo '<div class="alert alert-primary" id="erreur" role="alert">'.$msg.'</div>';
                    }
                    elseif(isset($_GET['notAvailable'])){
                        echo '<div class="alert alert-danger" id="erreur" role="alert">'.$msg2.'</div>';
                    }
                    ?>
                <form action="mailbackup/forget" method="POST">
                        <h5>Veuillez entrer votre mail</h5>
                        <input class="form-control form-control-lg" type="email" name="mail" value="">
                        <input type="submit" class="btn btn-primary"></input>
                 </form>
                </div>
           
        </div>


