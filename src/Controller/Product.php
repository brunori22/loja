<?php

namespace APP\Controller;

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
$productPrice = $_POST["price"];
$quantity = $_POST["quantity"];
$provider = $_POST["provider"];
