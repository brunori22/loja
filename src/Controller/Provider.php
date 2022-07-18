<?php

namespace APP\Controller;
use APP\Controller\ProviderDAO;
use APP\Model\Address;
use APP\Model\Product;
use APP\Controller\Provider;
use APP\Model\DAO\AddressDAO;
use APP\Model\Validation;
use APP\Utils\Redirect;
use PDOException;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    Redirect::redirect(type: 'error', message: "Requisição inválida!!!");
}

$cnpj = $_POST["cnpj"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$numberOfStreet = $_POST['numberOfStreet'];
$publicPlace = $_POST['publicPlace'];
$complement = $_POST['complement'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];



$address = new Address(
    publicPlace: $publicPlace,
    numberOfStreet: $numberOfStreet,
    complement: $complement,
    neighborhood: $neighborhood,
    city: $city,
    zipCode: $zipCode
);

$error = array();


//////Validação Fornecedor//////// 
if (!Validation::validateName($name)) {
    array_push($error, "O campo Nome necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($cnpj)) {
    array_push($error, "O campo CNPJ necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateNumber($phone)) {
    array_push($error, "O campo Telefone necessita de mais de 3 caractéres!!!");
}
///////Validação do Address/////////    
if (!Validation::validateName($publicPlace)) {
    array_push($error, "O campo Rua necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($numberOfStreet)) {
    array_push($error, "O campo Número necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($complement)) {
    array_push($error, "O campo Complemento necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($neighborhood)) {
    array_push($error, "O campo Bairro necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($city)) {
    array_push($error, "O campo Cidade necessita de mais de 3 caractéres!!!");
}
if (!Validation::validateName($zipCode)) {
    array_push($error, "O campo CEP necessita de mais de 3 caractéres!!!");
}


if ($error) {
    Redirect::redirect(message: $error, type: 'warning');
} else {
    $provider = new Provider(
        cnpj: $cnpj,
        name: $name,
        phone: $phone,
        address: new Address(
            publicPlace: $publicPlace,
            numberOfStreet: $numberOfStreet,
            complement: $complement,
            neighborhood: $neighborhood,
            city: $city,
            zipCode: $zipCode
        )
    );
    
    try{
    $dao = new ProviderDAO();
    $dao = new AddressDAO();
    $result = $dao->insert($provider); 
    if ($result) {
        Redirect::redirect(message: "O fornecedor $providerName foi cadastrado com sucesso!!!");

    }else{
        Redirect::redirect(message: "lamento, não foi possivel cadastrar o forncedor $providername", type: 'error');

    }


    Redirect::redirect(message: "O fornecedor $name foi cadastrado com sucesso!!!");
    }catch (PDOException $e) {

    }


}
