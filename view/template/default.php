<!DOCTYPE html>
<html>
<head>
    <base href= "/www/final/Public/" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- lien css -->
   
    <link href="css/ras.css" rel="stylesheet">
    <link href="css/pieddepage.css" rel="stylesheet">
    <!-- home -->
     <link href="css/slick.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <!-- contact -->
    <!-- boutique -->
     <link href="css/boutique.css" rel="stylesheet">
    <!-- fontawesome -->
    <!-- login -->
    <link href="css/log.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    
</head>
<body>      
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
        </label>
        <nav class="header">
            <div class="logo-checkbox">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtnInterieur">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo"><a href=""><img src="../public/image/optikoback.png" class="sigle"></a></label>

            </div>
            <span class="phone"><i class="fas fa-phone"></i> 01 60 66 01 80</span>
            <ul> 
                <li><a class="active" href="home">Home</a></li>
                <li><a href="boutique">Boutique</a></li>
                <li><a href="service">Services</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="apropos">Apropos</a></li>
                <div class="dropdown">
                    <span class="log">Connexion</span>
                    <div class="dropdown-content">
                        <li><a href="login">Admin</a></li>
                        <li><a href="client">client</a></li>
                        <li><a href="espaceClient">Mes rendez-vous</a></li>
                    </div>
                </div>
            </ul> 
        </nav>
        <?php 
            echo $leRendu; 
        ?>   
    <footer class="mt-3">
        <div class="flex-b">
            <div class="col">
                <h3 class="wiw">Notre perspective </h3>
                <p class="bas">A travers nos offres et sélections en optique et audition, vous choisissez en toute liberté vos paires de lunettes de vue, lunettes de soleil ou bien encore vos appareils auditifs afin de pouvoir voir et entendre le monde différemment et d’en révéler ainsi le Bien.</p>
            </div>
            <div class="col">
                <h3>Group sud</h3>
                <p>Optiko</p>
                <h6>01 60 66 01 80</h6>
                
                <p>melun 77000</p>
                <p class="email-id">optikoopticien2@gmail.com</p>
            </div>
            <div class="col">
                <h3>Nos fournisseurs</h3>
                <ul>
                    <li><a href="https://www.krys.com/lentilles/coopervision?gclid=CjwKCAiAjoeRBhAJEiwAYY3nDBujl-n6RAgKPkceIurEkqGPbBmpC-ZQ_1JK1vTG3Cqp8BsZueq16xoC2UoQAvD_BwE"target="_blank">Coupervision</a></li>
                    <li><a href="https://www.jnjvisioncare.fr/"target="_blank">Johnson & johnson vision</a></li>
                    <li><a href="https://www.lentillesaprixnet.com/categorie-produit/lentilles/marques-lentilles/ophtalmic-marques-lentilles/?gclid=CjwKCAiAjoeRBhAJEiwAYY3nDB15wQcwXZL0zCPa6hSs-UYf2SYAUY4FkoddTQT2P-zFqUHyuauuLBoCI64QAvD_BwE"target="_blank">Ophtalmic</a></li>
                    <li><a href="https://www.alcon.fr/fr"target="_blank">Alcon</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>NewsLetter</h3>
                <form class="nEwsLtr">
                    <i class="fas fa-envelope-open"></i>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Mension légale</p>
        
       
    </footer>
     
    
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  



<!-- code js slick -->
<!-- for home -->

<!-- for contact -->
<script src="../public/js/verifForms.js"></script>
<!-- inscreption -->
<script src="../public/js/loginAdminCrl.js"></script> 

<script src="../public/js/slick.js"></script>

</body>
</html>