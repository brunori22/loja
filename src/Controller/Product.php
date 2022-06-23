<?php
namespace APP\CONTROLLLER;


use APP\Utils\Redirect;

require '../../vendor/autoload.php';

IF(empty($_POST)){
    session_start();

//Redirecionar o usuario
Redirect::redirect(
type:'error',
message:"requisição invvalida!!!"
);
}


$productName = $_POST["name"];
$productPrice = $_POST["price"];
$productQuantity = $_POST["quantity"];
$provider = $_POST["provider"];