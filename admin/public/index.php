<?php
session_start();


    //var_dump($_SESSION);
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

// le routeur

if(!$_SESSION['connecté']=="ok"){
    header("Location:../../public/login");
}
else{

if($ctrl_url=="ADMboutique"){
    $Controller= new ADMboutiqueController();
    if($action_url=="adding"){
        $Controller->additem(); 
    }
    else{
        $Controller->index(); 
    }
}
elseif($ctrl_url=="boutiqueTextArea"){
    $Controller= new boutiqueTaController();
    $Controller->index(); 
}
elseif($ctrl_url=="rdv"){
    $Controller= new rdvController();
    if($action_url=='delete'){
        $Controller->deletrdv($param1_url);
    }else{
        $Controller->index();
    }
       
    
}
elseif($ctrl_url=="dashbord"){
    $Controller= new dashbordController();
    if($action_url=="del"){
        $Controller->deleteitm($param1_url); 
        //
    }
    else{
        $Controller->index(); 
    }
}

elseif($ctrl_url=="homeTextArea"){
    $Controller= new HomeDaTexController();
    $Controller->index(); 
}

elseif($ctrl_url=="HomeDashbord"){
    $Controller= new homedashController();
    if($action_url=='add'){
        $Controller->insertDataCard(); 
    }
    elseif($action_url=='addcard'){
        $Controller->insertData(); 
    }
    else{
        $Controller->index();
    }
     
}
elseif($ctrl_url=="environementVirtuel"){
    $Controller= new environementViController();
    $Controller->index(); 
}
elseif($ctrl_url=="ServiceDashbord"){
    $Controller= new serviceDaController();
    $Controller->index(); 
}
elseif($ctrl_url=="update"){
    $Controller= new updateController;
     if($action_url=='selec'){
        $Controller->index($param1_url);
    }
    elseif($action_url=='modif'){
        $Controller->updateitem($param1_url);
    }
}
elseif($ctrl_url=="HomeDashbordaffiche"){
    $Controller= new homebordaffichController();
    if($action_url=='delete'){
        $Controller->deletetm($param1_url);
    }
    elseif($action_url=='delactu'){
        $Controller->deletact($param1_url);
    }
    $Controller->index(); 
}
else{
    $Controller= new ADMboutiqueController();
    $Controller->index(); 
}
}
?>