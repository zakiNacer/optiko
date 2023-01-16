<?php
class homeController extends Controller{

    private $card;

    public function __construct(){
        $this->card= new homeModel();
    }

    public function afficheCard(){
        return $this->card->getCard();
    }
    public function afficheActu(){
        return $this->card->getactu();
    }

    public function index(){
        $card=$this->afficheCard();
        $actu=$this->afficheactu();
        $this->render('home',compact('card','actu'));
    }
    
}
?>