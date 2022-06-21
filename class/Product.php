<?php 


class Product{

  public $name;
  public $code;
  public $price;
  public $description;

  public function getInfoProductHtml(){

    return "<ul>
              <li>Nome Prodotto: ". $this->name ."</li>
              <li>Codice: ". $this->code ."</li>
              <li>Prezzo € ". $this->price ."</li>
              <li>Descrizione: ". $this->description ."</li>
          </ul>";

  }

}