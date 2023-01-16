<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    
    
   
    
        

           
            <div class= "text-center">
                <div class="container col-md-7"> 
                    
                    <div class="card bg-dark text-black text-center">
                        <img src="../assets/img/contact.png" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <p class="card-text" style="font-size: x-large;">Découvez tout les services d'optico</p>
                        </div>
                    </div>
                    <!-- card pour aficher modifier le contenue de la page home -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Gestion du contenu de la page home</h5>
                        </div>
                        <div class="card-body">
                              <!-- le tableau -->
                            <div class="table-responsive-sm" >
                             <table class="table table-light  table table-bordered mt-5">
                                <thead>
                                    <td>id</td>
                                    <td>titre</td>
                                    <td>text</td>
                                    <td>action </td>
                                    <td>ordre </td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td><p>Atelier visagisme</p></td>
                                        <td><p>Vous avez une mutuelle ne remboursant pas bien l</p></td>
                                        <td><a href="tablephp/delegal.php?id=">🗑️<a href="tablephp/modigal.php?id=">&#128393;</td>
                                        <td><a href="tablephp/asc.php?id=">ASC<a/><br><a href="tablephp/desk.php?id=">DESK<a/></td>              
                                    </tr>
                                </tbody>
                             </table>
                            </div>
                             <!-- formulaire -->
                            <form>
                                <div class="form-floating mt-5">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"    style="height: 100px"></textarea>
                                        <!-- du php code-->
                                        <label for="floatingTextarea2">Ajouter un titre</label><br>
                                </div>
                                <div class="form-floating mt-1">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"    style="height: 100px"></textarea>
                                        <!-- du php code-->
                                        <label for="floatingTextarea2">Ajouter du text</label><br>
                                </div>
                                <input type="submit" class="btn btn-primary"></input>
                            </form>       
                        </div>
                     </div>
                </div>    
            </div>
       
   
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>