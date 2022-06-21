<?php

require_once __DIR__ . "/class/Product.php";

$iphone = new Product();
$iphone->name = "Iphone 13";
$iphone->price = 939;
$iphone->code = "kjdfn568sd";
$iphone->description = "Telefoni e fai anche le foto";

$frullatore = new Product();
$frullatore->name = "FrullaTutto";
$frullatore->price = 50;
$frullatore->code = "jhdfdsf555";
$frullatore->description = "Frulli e triti cone se non ci fosse un domani";

$frigorifero = new Product();
$frigorifero->name = "FreddaTutto";
$frigorifero->price = 500;
$frigorifero->code = "kfjfdgfdg65dfg";
$frigorifero->description = "Conserva tutto come se non ci fosse un domani";


