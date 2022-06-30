<?php
namespace APP\Model;

class validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 2;
    }

    public static function validateNumber(float $number):bool
    {
        return $number > 0;
    }

}