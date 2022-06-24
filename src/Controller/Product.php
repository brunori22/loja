<?php

namespace APP\Controller;

use APP\Model\Validation;
use APP\Utils\Redirect;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    // Redirecionar o usuário
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$productName = $_POST["name"];
$productCostPrice = $_POST["cost"];
$quantity = $_POST["quantity"];
$provider = $_POST["provider"];

$error = array();

//array_unshift > Adcionar no inicio do array
//array_push > Adicionar no final do array

//array_shift > Remove do inicio do array
//array_pop > Remove do final do array

if(Validation::validateName(($productName))){
    array_push($error,"O nome do produto deve conter mais de 2 caracteres!!!");
}

if(Validation::validateNumber(($productCostPrice))){
    array_push($error,"O preço de custo do produto devera ser maior que zero!!!");
}

if(Validation::validateNumber($quantity)){
    array_push($error, "A quantidade de entrada devera ser maior que zero");
}

if($error){
    Redirect::redirect(message:$error,type:'warning');
}else{
    Redirect::redirect(message:"O produto $productName foi cadastrado com sucesso!!!");
}