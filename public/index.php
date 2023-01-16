<?php
session_start();
// var_dump($_SESSION);

    // var_dump($_SESSION);
    // die();
    
    require '../app/Autoloader.php';
    require '../app/Database.php';
    
    autoloader::register();
    
    $url=($_GET['url'])??null;
    
    
    //FILTER_SANITIZE_URL pour netoyer url des caractere speciaux
    $url=explode("/",filter_var($url,FILTER_SANITIZE_URL));
    
    
    //le rooter
    $ctrl_url=$url[0]??null;
    $action_url=($url[1])??'index';
    $param1_url=($url[2])??null;
    
    
        if($ctrl_url=="boutique"){
            $Controller= new boutiqueController();
            if($action_url=='page'){
                $Controller->index($param1_url);
            }
            else{
                $Controller->index();
            }  
        } 
    
    elseif($ctrl_url=="catboutique"){
        $Controller= new catBoutiqueController();
         if($action_url == 'cat'){   
             $Controller->index($param1_url);
         } 
    }
    elseif($ctrl_url=="rendezvous"){
        $Controller= new rendezvousController();
        if($action_url=="addrdv"){
            $Controller->ajoutrdv();
        }else{
            $Controller->index();
        }          
       
    }
    elseif($ctrl_url=="singleProd"){
        $Controller= new singleprodController();
        if ($action_url == 'idgate'){
            
             //var_dump($param1_url);
            $Controller->index($param1_url);
            
        }else{
            $Controller->index();
        }  
    }
    elseif($ctrl_url=="service"){
        $Controller= new serviceController();
        $Controller->index(); 
    }
    
    elseif($ctrl_url=="espaceClient"){
        $Controller= new espaceClientController();
        if(!$_SESSION['user2']){
      
            header('location:../public/client');   
        }
        if($action_url=="connect"){
            $Controller->CheckRdv($param1_url);
        }
        elseif($action_url=="delaterdv"){
            $Controller->deleteRdv($param1_url);

        }else{
            $Controller->index();
        }
       
    }
    elseif($ctrl_url=="contact"){
        $Controller= new contactController();
        if($action_url=="mailing"){
            $Controller->sendMail();
        }
        else{
              $Controller->index();
        }
    }
    elseif($ctrl_url=="apropos"){
        $Controller= new aproposController();
        $Controller->index(); 
    }
    elseif($ctrl_url=="login"){
        $Controller= new adminController();
        if($action_url=="auth"){
            $Controller->authentification($param1_url);
        }elseif($action_url=='logout'){
            $Controller->decon();
        }
        else{
            $Controller->index();
        }
    }
    elseif($ctrl_url=="client"){
        $Controller= new clientController();
        if(isset($_SESSION['user2'])){
      
            header('location:../public/espaceClient');   
        }
        if($action_url=="auth"){
            $Controller->checkUser($param1_url);
        }elseif($action_url=="logout"){
            $Controller->déconnexion();
        }
            $Controller->index();
    }
    elseif($ctrl_url=="inscription"){
        $Controller= new inscriptionController();
            if($action_url=="add"){
                $Controller->addCstemers();
            }
            $Controller->index();
    }
    elseif($ctrl_url=="mailbackup"){
        $Controller= new mailbackupController();
        if($action_url=="forget"){
            $Controller->pswTemporary();
        }
            $Controller->index();
    }
    elseif($ctrl_url=="password"){
        $Controller= new passwordController();
            $Controller->index();
    }
    elseif($ctrl_url=="userCnct"){
        $Controller= new  userCnctController();
        $Controller->index(); 
    }else{
        $Controller= new homeController();
        $Controller->index();
    }


