<?php

namespace APP\Utils;

class Redirect
{
    public static function redirect(
        string|array $message,
        string $url = '../View/Message.php',
        string $type = 'success'
    ) {
        if (is_array($message)) {
            // TODO Implementar leitura do array
        } else {
            if ($type == 'success') {
                $_SESSION['msg_success'] = $message;
            } else if ($type == 'error') {
                $_SESSION['msg_error'] = $message;
            } else {
                $_SESSION['msg_warning'] = $message;
            }
        }
        header("location:$url");
    }
}
