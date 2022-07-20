<?php
<<<<<<< HEAD
if($_server['SERVER_NAME'] == 'localhost'){
    define('DNS' , 'mssql:host=localhost:3307;
    dbname=retail_store_morning');
    define('USER', 'root');
    define('PASSWORD', '');
}else{
    define('DNS' , 'mssql:host=localhost:3307;
    dbname=retail_store_morning');
    define('USER', 'root');
    define('PASSWORD', '');
}
// define('DNS', 'mysql:host=localhost:3307;dbname=loja');
// define('USER', 'root');
// define('PASSWORD', '');
=======

define('DNS', 'mysql:host=localhost:3306;dbname=loja');
define('USER', 'root');
define('PASSWORD', '');
>>>>>>> b34b1bd0b4f1abf547395474a0e5a14e39118294
