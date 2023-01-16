<?php
class serviceController extends Controller{



    private $card;

    public function __construct(){
        $this->card= new serviceModel();
    }

    public function afficheCard(){
        return $this->card->getCard();
    }


    public function index(){
        $card=$this->afficheCard();
        $this->render('service',compact('card'));
    }
}
?>
   
