<?php


require_once __DIR__ . "/User.php";
require_once __DIR__ . "/CreditCard.php";


class Custemer extends User{


    private $card;
    public $cart; // array

    public function setCreditCard($_number,$_name, $_expired_date_y, $_expired_date_m, $_cvv){

      try{
        $this->card = new CreditCard($_number,$_name, $_expired_date_y, $_expired_date_m, $_cvv);
      }catch (Exception $e){
        echo $e->getMessage();
      }

    }

    // tutti i paramatri li trsaformo in array e li salvo iin $cart
    public function setCart(...$products){
      $this->cart = $products;
    }




}