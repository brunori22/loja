<?php

namespace APP\UTILS;

CLASS Redirect
{
public static function redirect(
    string | array $message,
    string $url = '../View/Massage.php',
    string $type = 'success'
    
    )    
{
if(is_array($message)){
    //todo implementar leitura do array

}else{
    if($type == 'success'){
        $_SESSION['mesg_success'] = $message;
    }else if($type == 'error'){
        $_SESSION['msg_error'] = $message;
    }else{
        $_SESSION['msh_waening'] = $message;
    }
}
    header("location:$url");

    }   
}