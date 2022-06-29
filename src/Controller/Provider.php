<?php

namespace APP\Controller;

use APP\Model\Address;
use APP\Model\Product;
use APP\Model\Provider;
use APP\Model\Validation;
use APP\Utils\Redirect;

require '../../vendor/autoload.php';

if(empty($_POST)){
    session_start();
    Redirect::redirect(type:'error',message:"Requisição inválida!!!");
}
$cnpj = $_POST["cnpj"];
$name = $_POST["name"];
$phone = $_POST["phone"];
/*$address = new Address(
    publicPlace: $_POST['publicPlace'],
    numberOfStreet: $_POST['numberOfStreet'],
    complement:$_POST['complement'],
    neighborhood:$_POST['neighborhood'],
    city: $_POST['city'],
    zipCode:$_POST['zipCode']
);*/

$error = array();
if (!Validation::validateName($name)) {
    array_push($error, "O nome deve conter mais de 2 caracteres!!!");
}

if (Validation::validateName($phone)) {
    array_push($error, "O número deve ser maior que zero!!!");
}if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {

    Redirect::redirect(
        message: "O fornecedor $name foi cadastrado com sucesso!!!"
    );
}

